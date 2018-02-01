<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MyController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function myAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('mine/index.html.twig');
    }

   /**
     * @Route("updated", name="updated")
     */
    public function updatedAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('mine/updated.html.twig');
    }

}
