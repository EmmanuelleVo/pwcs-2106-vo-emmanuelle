<?php

namespace Controllers;

class Dashboard
{
    function show()
    {
        $view = './views/candidate.php';




        return compact('view');

    }
}

