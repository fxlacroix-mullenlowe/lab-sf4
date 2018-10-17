<?php

namespace App\Controller;

use App\Entity\Analyzer\Analyzer;
use App\Form\Analyzer\AnalyzerType;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

/**
 * @Route("/analyzer")
 */
class AnalyzerController
{
    /**
      * @Route("/", name="analyzer")
      */
    public function analyzer(Request $request, Environment $twig, RegistryInterface $doctrine, FormFactoryInterface $formFactory)
    {
        $analyzer   = new Analyzer();
        $form       = $formFactory->createBuilder(AnalyzerType::class, $analyzer)->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $doctrine->getEntityManager();
            $entityManager->persist($analyzer);
            $entityManager->flush();
        }

        return new Response($twig->render('analyzer/analyzer.html.twig', [
            'form'  =>  $form->createView()
        ]));
    }

    /**
     * @Route("/call/{type}/{call}", name="call")
     */
    public function calls($type, $call)
    {
        $class = sprintf("App\\Consumer\\%sConsumer", ucfirst($type));
        $consumer = new $class();

        return new JsonResponse($consumer->get($call));

    }
}
