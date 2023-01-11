<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Faker\Factory;
use Faker\Generator;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    /**
     * @var Generator
     */
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 5; $i++) {
            $product = new Product();
            $product->setName($this->faker->name);
            $product->setPrice(mt_rand(10, 100));
            $product->setDescription($this->faker->realText(100));
            $manager->persist($product);
        }
        $manager->flush();
    }
}
