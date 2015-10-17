<?php

namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdsType
 *
 * @author Diba
 */
class AdsType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add("name")
                ->add("price")
                ->getForm();
    }
    public function getName() {
        return "app_dss";
    }
}
