<?php

namespace Controllers;

class Election //Home Page
{
    function index()
    {
        $candidateModel = new \Models\Candidate();
        $candidates = $candidateModel->all();
        $view = './views/election.php';

        // afficher les 2 premiers candidats selon l'arrondissement



        return compact('view');

    }
}