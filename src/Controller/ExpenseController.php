<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ExpenseController extends AbstractController
{
    public function list(Request $request): JsonResponse
    {
        return $this->json($request);
    }

    public function add(): Response
    {
        return new Response('Adding');
    }
}