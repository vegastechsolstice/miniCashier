<?php

namespace App\Controller;

use App\Service\ChangeTenderService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController
{
    /**
     * @Route("/")
     *
     * @return Response
     */
    public function main()
    {
        return $this->render(
            'homepage/index.html.twig',
            []
        );
    }

    /**
     * @Route("/cashier")
     *
     * @return Response
     */
    public function cashier()
    {
        return $this->render(
            'cashier/index.html.twig',
            []
        );
    }

    /**
     * @Route("/change")
     *
     * @param Request $request
     * @return Response
     */
    public function calculateChange(Request $request)
    {
        $totalCost      = $request->query->get('totalCost');
        $amountProvided = $request->query->get('amountProvided');

        $change = (new ChangeTenderService($totalCost, $amountProvided))->getChangeFromPerson();

        return $this->render(
            'cashier/change.html.twig',
            ['change' => $change]
        );
    }
}