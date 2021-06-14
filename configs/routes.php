<?php

return [
    ['method' => 'GET',
        'action' => 'show',
        'resource' => 'candidate',
        'controller' => 'Candidate', // nom du fichier
        'callback' => 'show', // fonction de callback cible toujours fonction de Controllers
    ],
    ['method' => 'GET',
        'action' => '',
        'resource' => '',
        'controller' => 'Election',
        'callback' => 'index',
    ],
    ['method' => 'GET',
        'action' => 'show',
        'resource' => 'arrondissement',
        'controller' => 'Arrondissement', // nom du fichier
        'callback' => 'show', // fonction de callback cible toujours fonction de Controllers
    ],
];