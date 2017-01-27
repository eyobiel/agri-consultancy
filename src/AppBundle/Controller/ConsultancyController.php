<?php

/**
 * This ConsultancyController is created for the home page of the consultancy agency website. 
 *
 * @author Eyobiel
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ConsultancyController extends Controller {

    /**
     * This method renders a response index.html.twig (homepage) from the consultancy folder inside views
     *
     * @Route("/consultancy", name="consultancy")
     *
     * @param $request Request
     *
     * @return Response
     */
    
    public function consultAction(Request $request) {
        $response = $this->render('consultancy/index.html.twig');

        return $response;
    }
}
