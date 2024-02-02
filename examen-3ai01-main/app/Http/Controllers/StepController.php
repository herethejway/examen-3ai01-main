<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StepController extends Controller
{
    public function index()
    {
        $title = "Débugger d'une erreur Laravel";
        $description = "Bravo ! Vous avez réussi la première étape !";
        $next = "step2";
        $button = "Étape suivante";

        return view('step', compact('title', 'description', 'next', 'button'));
    }
    public function step2()
    {
        $title = "Nous sommes à l'étape 2";
        $description = "Si je ne me trompe pas, vous avez réussi la première étape ! Maintenant, je comprends pas pourquoi le bouton ne fonctionne pas pour passer à l'étape suivante...";
        $next = "step3";


        return view('step2', compact('title', 'description', 'next'));
    }
    public function step3()
    {
        $title = "Nous sommes à l'étape 3";
        $description = "Top, on continue !";
        $next = "step3";
        $button = "Étape suivante";

        return view('step3', compact('title', 'description', 'next', 'button'));
    }
    public function step4()
    {
        $title = "Nous sommes à l'étape 4";
        $description = "Vous devez construire une liste de personnages de Rick et Morty. Vous pouvez utiliser l'API suivante : https://rickandmortyapi.com/api/character";
        $next = "step5";
        $button = "Étape suivante";

        //call api to get data in laravel
        $url = "https://rickandmortyapi.com/api/character";
        $data = json_decode(file_get_contents($url), true);
        $characters = $data['results'];




        return view('step4', compact('title', 'description', 'next', 'button', 'characters'));
    }
    public function step5()
    {
        $array = [
            'title' => "Nous sommes à l'étape 5",
            'description' => "Vous avez un problème de type",
            'next' => "step6",
            'button' => "Étape suivante"
        ];

        return view('step5', compact('array'));

    }
    public function step6()
    {
        $title = "Nous sommes à l'étape 6";
        $description = "Vous avez un problème pour afficher la view";
        $next = "step7";
        $button = "Étape suivante";

        view('step6', compact('title', 'description', 'next', 'button'));
    }
    public function step7()
    {
        $title = "Nous sommes à l'étape 7";
        $description = "Algorithme de tri, vous devez trier le tableau avec des nombres et afficher le résultat";
        $numbers = [];
        for ($i = 0; $i < 15; $i++) {
            $numbers[] = rand(-100, 1000);
        }
        
      
        $button = "Étape suivante";
        $next = "step8";

        return view('step7', compact('title', 'description', 'next', 'button', 'numbers'));
    }
    public function step8()
    {
        $title = "Nous sommes à l'étape 8";
        $description = "Vous devez construire la vue et afficher les variables";
        $next = "step9";
        $button = "Étape suivante";

        return view('step8', compact('title', 'description', 'next', 'button'));
    }
    public function step9()
    {
        $title = "Nous sommes à l'étape 9";
        $result = 0;
        $description = "Vous devez écrire du code pour réaliser la suite de fibonacci quand vous affichez le nombre 63245986 vous devez attribuer cette valeur à la variable $result et le bouton doit s'afficher";
        $next = "step10";
        $button = "Étape suivante";

        return view('step9', compact('title', 'description', 'next', 'button', 'result'));
    }
    public function step10()
    {
        $title = "Vous avez terminé l'examen";
        $description = "Vous avez terminé l'examen, vous pouvez maintenant envoyer votre code sur github et nous envoyer le lien par mail à l'adresse suivante : michael.pollet.1@formateur.ifapme.be";


        return view('step10', compact('title', 'description'));
    }
}
