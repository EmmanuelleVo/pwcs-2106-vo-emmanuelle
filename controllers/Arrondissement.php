<?php

namespace Controllers;

class Arrondissement
{
    function show()
    {
        $candidateModel = new \Models\Candidate();
        $view = './views/arrondissement.php';

        // afficher tous les candidats selon l'arrondissement ? niveau ?


        return compact('view');

    }
}