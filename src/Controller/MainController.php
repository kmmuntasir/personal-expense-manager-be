<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class MainController
{
    public function index(): Response
    {
        return new Response('API Home');
    }
}