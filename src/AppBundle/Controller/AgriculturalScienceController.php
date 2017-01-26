<?php

/**
 * This AgriculturalScienceController is created for Agricultural Science page of the consultancy agency website. 
 *
 * @author Eyobiel
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AgriculturalScienceController extends Controller {

    /**
     * This method renders a response agriculturalScience.html.twig from the consultancy folder inside views
     *
     * @Route("/agricultural")
     *
     * @param $request Request
     *
     * @return Response
     */

    public function agriculturalAction(Request $request) {
        $response = $this->render('consultancy/agriculturalScience.html.twig');

        return $response;
    }

}
