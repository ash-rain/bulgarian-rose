<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use pmill\Doctrine\Hydrator\ArrayHydrator;

class WebsiteController extends AbstractController
{
    public function home()
    {
        return $this->render('home.html.twig');
    }

    public function shop()
    {
        $categories = ['Rose Water', 'Rose Oil', 'Soaps', 'Candles', 'Creams', 'Perfumes', 'Bath Salts', 'Souvenirs'];
        $products = [
            ['name' => 'Perfume Essence 2.1 ml', 'id' => 1],
            ['name' => 'Rose Oil 1ml', 'id' => 2],
            ['name' => 'Rose Buds', 'id' => 3],
            ['name' => 'Rose Soap', 'id' => 4],
            ['name' => 'Rose Oil 1ml', 'id' => 5],
            ['name' => 'Bath Salts With Essential Lavender Oil', 'id' => 6],
        ];

        return $this->render('shop.html.twig', compact('categories', 'products'));
    }

    public function about()
    {
        return $this->render('about.html.twig');
    }
}