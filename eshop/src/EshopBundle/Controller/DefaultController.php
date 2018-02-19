<?php

namespace EshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $entity_maneger = $this->getDoctrine()->getManager();
        $product_repository = $entity_maneger->getRepository("EshopBundle:Product");
        $products = $product_repository->findAll();
          
        return $this->render('@Eshop\Default\index.html.twig', array("products" => $products ));
    }
}
