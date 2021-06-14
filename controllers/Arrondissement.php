<?php

namespace Controllers;

use Models\Candidate;

class Arrondissement
{
    function show()
    {
        $candidateModel = new \Models\Candidate();


        $candidateModel = new Candidate();
        $allCandidates = [];
        $candidates = $candidateModel->all();
        $candidates = json_decode(json_encode($candidates), true);
        $view = './views/arrondissement.php';


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

        return compact('allCandidates', 'candidates', 'arrondissement', 'status' ,'view');

    }
}