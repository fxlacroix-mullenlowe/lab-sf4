<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/", options = { "expose" = true })
 */
class ApiController
{
    /**
     * @Route("/get/firstname", methods={"GET","HEAD"})
     */
    public function getFirstname()
    {
        $number = mt_rand(0, 100);
        return new JsonResponse([
            'firstname' => 'Olivier'
        ]);
    }

}