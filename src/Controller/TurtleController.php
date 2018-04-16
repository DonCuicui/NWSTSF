<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TurtleController
{
    /**
     * @Route("/turtle/crier");
     */
    public function crier()
    {
        return new Response('<h1>Je stridule !!!</h1>');
    }
}