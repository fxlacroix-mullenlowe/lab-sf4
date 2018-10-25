<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;


class ApiController
{
    /**
     * @Route("/api/get/firstname", methods={"GET","HEAD"})
     */
    public function getFirstname()
    {
        $number = mt_rand(0, 100);
        return new JsonResponse([
            'firstname' => 'Olivier'
        ]);
    }

}