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
        //$candidates = json_decode(json_encode($candidates), true);

        // afficher les 2 premiers candidats selon l'arrondissement

        $liste = [];
        foreach ($candidates as $candidate) {
            $candidateName = $candidate->nom;
            $candidateArrondissement = $candidate->arrondissement;
            $candidateLevel = $candidate->niveau;
            $candidateStatus = $candidate->statut;

            if(isset($liste[$candidateArrondissement])) { // ps
                var_dump('hi');
                if(count($liste[$candidateArrondissement]) === 1 && ($candidateStatus === '1e de liste' || $candidateStatus === '2e de liste')) { // si 1 seul candidat,
                    $liste = [
                        ['arrondissement' => 'Belgique',
                         'niveau' => 'Parlement européen'],
                        ['ps' => 'Amandine', 'mail' => 'amandine@lp.fr'],
                    ];
                }
            }else{
                if(($candidateStatus === '1e de liste' || $candidateStatus === '2e de liste')) {
                    $liste = ['ecolo' => 'Amandine', 'mail' => 'amandine@lp.fr'];
                }
            }

            var_dump($candidateName);
            die();




        }



        return compact('allCandidates', 'candidates', 'arrondissement', 'status' ,'view');

    }
}
