<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class TurtleController
{
    public function crier()
    {
        return new Response(content:'<h1>Je stridule !!!</h1>');
    }
}