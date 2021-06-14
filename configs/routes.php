<?php

return [
    ['method' => 'GET',
        'action' => 'show',
        'resource' => 'candidate',
        'controller' => 'Candidate', // nom du fichier
        'callback' => 'show' // fonction de callback cible toujours fonction de Controllers
    ],
];