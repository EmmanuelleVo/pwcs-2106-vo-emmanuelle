<?php

namespace Controllers;

use Models\Candidate;

class Election //Home Page
{
    function index()
    {
        $candidateModel = new Candidate();
        $candidates = $candidateModel->all();
        $view = './views/election.php';

        // afficher les 2 premiers candidats selon l'arrondissement

        foreach ($candidates as $candidate) {
            $candidateName = $candidate->nom;
            $candidateArrondissement = $candidate->arrondissement;
            $candidateLevel = $candidate->niveau;
            $candidateStatus = $candidate->statut;




        }


        return compact('name', 'level', 'arrondissement', 'status' ,'view');
            var_dump($candidate['name']);

    }
}