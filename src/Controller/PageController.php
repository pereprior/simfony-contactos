<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/page', name: 'app_page')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/', name: 'init')]
    public function init(): Response
    {
        return new Response("Bienvenido a la web de contactos");
    }

    private array $contctsArray = [
        1 => ["nombre" => "Juan Pérez", "telefono" => "524142432", "email" => "juanp@ieselcaminas.org"],
        2 => ["nombre" => "Ana López", "telefono" => "58958448", "email" => "anita@ieselcaminas.org"],
        5 => ["nombre" => "Mario Montero", "telefono" => "5326824", "email" => "mario.mont@ieselcaminas.org"],
        7 => ["nombre" => "Laura Martínez", "telefono" => "42898966", "email" => "lm2000@ieselcaminas.org"],
        9 => ["nombre" => "Nora Jover", "telefono" => "54565859", "email" => "norajover@ieselcaminas.org"]
    ];

    #[Route('/contact/{id}', name: 'contact')]
    public function contact(int $id): Response
    {
        $result = $this->contctsArray[$id] ?? null;
        if ($result) {
            $html = "<ul>";
            $html .= "<li>ID: " . $id . "</li>";
            $html .= "<li>Nombre: " . $result["nombre"] . "</li>";
            $html .= "<li>Teléfono: " . $result["telefono"] . "</li>";
            $html .= "<li>Email: " . $result["email"] . "</li>";
            $html .= "</ul>";

            return new Response("<html><body>$html</body></html>");
        }
        return new Response("Contacto no encontrado.");
    }

    #[Route('/contact/search/{text}', name: 'contact')]
    public function search($text): Response
    {
        $resultados = array_filter($this->contctsArray,
            function ($contacto) use ($text) {
                return strpos($contacto["nombre"], $text) !== FALSE;
            }
        );

        if (count($resultados)) {
            $html = "<ul>";
            foreach($resultados as $id => $resultado) {
                $html .= "<li>" . $id . "</li>";
                $html .= "<li>" . $resultado["nombre"] . "</li>";
                $html .= "<li>" . $resultado['telefono'] . "</li>";
                $html .= "<li>" . $resultado['email'] . "</li><br>";
            }
            $html .= "</ul>";
            return new Response("<html><body>$html</body></html>");
        }

        return new Response("No se han encontrado resultados.");
    }

}
