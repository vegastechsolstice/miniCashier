<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class RecordController extends AbstractController
{
    /**
     * @Route("/records")
     *
     * @return Response
     */
    public function records()
    {
        return $this->render(
            'recordkeeping/index.html.twig',
            []
        );
    }
}