<?php

namespace App\Controller;

use App\GreetingGenerator;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    // #[Route('/{hello}/{color}', methods: ['GET'])]
    // public function index(string $hello, string $color): Response
    // {
    //     return $this->render('default/index.html.twig', [
    //         'hello' => $hello,
    //         'color' => $color,
    //     ]);
    // }

    // #[Route('/api/bonjour/{name}', methods: ['GET'])]
    // public function apiBonjour(string $name): JsonResponse
    // {
    //     return $this->json([
    //         'name' => $name,
    //         'symfony' => 'rocks',
    //     ]);
    // }

    // #[Route('/bonjour/{name}', methods: ['GET'])]
    // public function services(string $name, LoggerInterface $logger, GreetingGenerator $generator): Response
    // {
    //     $greeting = $generator->getRandomGreeting();
    //     $logger->info("On dit $greeting $name !");
    //     return new Response("$greeting $name !");
    // }

    // #[Route('/number')]
    // public function number(): Response
    // {
    //     $number = random_int(0, 100);
    //     return $this->render('default/index.html.twig', [
    //         'number' => $number,
    //     ]);
    // }
}
