<?php

namespace Controllers;

class Candidate
{
    function create()
    { // retourne une vue
        $view = './views/candidate.php';

        return compact('view');
    }

    function show() // montre un candidat (nom, image)
    {
        $candidateModel = new \Models\Candidate();
        $candidateModel->all();
        $candidateModel->show('name', 'photo');
        header('Location: index.php');
        //header('Location: index.php?action=show&resource=candidate');
        exit();


    }
}

