<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Ads;
use AppBundle\Form\AdsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
    /**
     * @Route("/add",name="add_adv")
     * @Template
     */
    public function createAdsType(Request $requset){
        $add_ad=new Ads;
        $form=  $this->createForm(new AdsType(), $add_ad);
        $form->handleRequest($request);
        if ($form->isValid()){
            $add_ad=$form->getData();
            $em=  $this->getDoctrine()->getManager();
            $em->persist($add_ad);
            $em->flush();
        }
        return ["myform"=>$form->createView()];
    }
}
