<?php
// src/GreetingGenerator.php
namespace App;

use Psr\Log\LoggerInterface;

class GreetingGenerator
{
    public function __construct(private readonly LoggerInterface $logger)
    { 
    }
    public function getRandomGreeting(): string
    {
        $greetings = ['Bonjour', 'Hello', 'Hola'];
        $greeting = $greetings[array_rand($greetings)];
        $this->logger->info('Utilisation de greeting: '.$greeting);
        return $greeting;
    }

}