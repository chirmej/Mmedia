<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DashController extends AbstractController
{
    public function homepage(){
        $test = "test home page";
        return $this->render('dash/homepage.html.twig', [ 'text'=> $test,]);
    }
}