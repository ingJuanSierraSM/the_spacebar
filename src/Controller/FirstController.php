<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class FirstController
{
    public function homepage() 
    {
        return new Response("<h1>Hello world!</h1> <br> <h2>By Ssimor</h2>");
    }
}