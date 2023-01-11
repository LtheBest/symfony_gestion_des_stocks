<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/product/display')]
class ProductController extends AbstractController
{
    #[Route('/', name: 'app_product_index')]
    public function index(ProductRepository $product): Response
    {
        return $this->render('product/index.html.twig', [
            'products' => $product->findAll(),
        ]);
    }

    #[Route('/add', name: 'app_product_add')]
    public function add(ProductRepository $product, Request $request, ManagerRegistry $doctrine): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $doctrine->getManager();

            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('app_product_index');
        }
        return $this->render('product/ajout.html.twig', [
            'form' => $form->createView(),
            'product' => $product,
        ]);
    }

    #[Route('/edit/{id}', name: 'app_product_edit')]
    public function edit(Request $request, Product $product, ManagerRegistry $doctrine)
    {
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $doctrine->getManager();

            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('app_product_index');
        }

        return $this->render('product/edit.html.twig', [
            'form' => $form->createView(),
            'product' => $product,
        ]);
    }
    
    #[Route('/{id}', name: 'app_product_delete')]
    public function delete(Product $product, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        $entityManager->remove($product);
        $entityManager->flush();

        return $this->redirectToRoute('app_product_index', [
            'product' => $product->getId()
        ]);
    }
}