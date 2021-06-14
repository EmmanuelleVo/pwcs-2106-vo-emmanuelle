<?php

namespace Controllers;

use Models\Candidate;

class Election //Home Page
{
    function index()
    {
        $candidateModel = new Candidate();
        $allCandidates = [];
        $candidates = $candidateModel->all();
        $view = './views/election.php';
        $candidates = json_decode(json_encode($candidates), true);

        // afficher les 2 premiers candidats selon l'arrondissement

        foreach ($candidates as $candidate) {
            $candidateName = $candidate->nom;
            $candidateArrondissement = $candidate->arrondissement;
            $candidateLevel = $candidate->niveau;
            $candidateStatus = $candidate->statut;

            $candidateName = $candidate['nom'];
            $candidateArrondissement = $candidate['arrondissement'];
            $candidateLevel = $candidate['niveau'];
            $candidateStatus = $candidate['statut'];


            $allCandidates[$candidateName]['arrondissement'] = $candidateArrondissement;
            $allCandidates[$candidateName]['niveau'] = $candidateLevel;
            $allCandidates[$candidateName]['statut'] = $candidateStatus;



        }
            //var_dump($allCandidates); die();




        return compact('allCandidates', 'candidates', 'arrondissement', 'status' ,'view');

    }
}