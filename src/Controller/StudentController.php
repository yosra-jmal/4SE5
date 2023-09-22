<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    #[Route('/student/{name}', name: 'app_student')]
    public function index($name): Response
    {
        return new Response("bonjour mes étudiants ".$name);
    }


    #[Route('/showTeacher/{name}', name: 'showteacher')]
    public function showTeacher($name): Response

    {
     return $this->render("student/index.html.twig",['n'=>$name]);
    }
}
