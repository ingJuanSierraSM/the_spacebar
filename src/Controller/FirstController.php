<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController
{
    /**
     * @Route("/")
     */
    public function homepage(): Response
    {
        return new Response("<h1>Hello world!</h1> <br> <h2>By Ssimor</h2>");
    }

    /**
     * @Route("/greet/{person}")
     */
    public function greet($person): Response
    {
        return new Response("<h2> Hi $person!</h2> <br> <h3>Welcome to the Ssimor 'spacebar' </h3>");
    }
}