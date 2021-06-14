<?php

return [
    ['method' => 'GET',
        'action' => 'show',
        'resource' => 'candidate',
        'controller' => 'Candidate',
        'callback' => 'show',
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
        'controller' => 'Arrondissement',
        'callback' => 'show',
    ],
    ['method' => 'POST',
        'action' => 'store',
        'resource' => 'Candidate',
        'controller' => 'Candidate',
        'callback' => 'store'
    ],
];