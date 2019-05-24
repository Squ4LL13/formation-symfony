<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController {

    /**
     * @Route("/hello/{prenom}/age/{age}", name="hello", requirements={"age"="\d+"})
     * @Route("/hello", name="hello_base")
     * @Route("/hello/{prenom}", name="hello_prenom")
     * Montre la page qui dit Bonjour ...
     */
    public function hello($prenom = "anonyme", $age = 0) {
        return $this->render('hello.html.twig', ['prenom' => $prenom, 'age' => $age]);
    }

    /**
     * @Route("/", name="homepage")
     */
    public function home() {
        $prenoms = ["Lior" => 31, "Joseph" => 12, "Anne" => 55];
        return $this->render('home.html.twig', [
                'title' => "Au revoir tout le monde",
                'age' => 19,
                'tableau' => $prenoms
            ]
            );
    }

}

?>