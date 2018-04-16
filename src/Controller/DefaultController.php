<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription()
    {
        return new Response('<body><h1>Inscription/connexion</h1></body>');
    }
    /**
     * @Route("/support", name="support")
     */
    public function support()
    {
        return new Response('<body><h1>Support</h1></body>');
    }
    /**
     * @Route("/stats", name="stats")
     */
    public function stats()
    {
        return new Response('<body><h1>Stats</h1></body>');
    }
    /**
     * @Route("/default", name="default")
     */
    public function index()
    {
        return new Response('<body></br><a href="/inscription"><h1> Inscription</h1></a></br><a href="/support"><h1> Support</h1></a></br><a href="/stats"><h1> Stats</h1></a></body>');
    }
}
