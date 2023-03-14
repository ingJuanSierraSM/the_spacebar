<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController
{
    /**
     * @Route("/")
     */
    public function homepage() 
    {
        return new Response("<h1>Hello world!</h1> <br> <h2>By Ssimor</h2>");
    }
}