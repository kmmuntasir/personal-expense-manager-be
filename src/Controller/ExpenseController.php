<?php

namespace App\Controller;

use App\Entity\Expense;
use App\Repository\ExpenseRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ExpenseController extends AbstractController
{
    public function list(ExpenseRepository $expenseRepository, Request $request): JsonResponse
    {
        $expenses = $expenseRepository->findAll();
        return $this->json($expenses);
    }

    public function add(ManagerRegistry $doctrine): JsonResponse
    {
        $expense = new Expense();
        $expense->setTitle('Expense 1');
        $expense->setDescription('Description 1');

//        $em = $doctrine->getManager();
//
//        $em->persist($expense);

        return $this->json($expense);
    }
}