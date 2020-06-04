<?php

return [
    //obligatoire
    'CloudClass' => 'Waka\Utils\Classes\Gd', // obligatoire pour cloud files dans model et futur traitement
    'assets' => [ // obligatoire pour pdf
        'css' => [
            //si il  a du less penser à le mettre dans le registrer du plugin pour le combiner en css
            '/waka/crsm/assets/css/simple_grid/simple-table.css' => 'simple table',
        ],
    ],
    //fin obligatoire
    'civ' => ['Mme/M.' => 'Mme/M.', 'Mme' => 'Mme', 'M.' => 'M.', 'Dr' => 'Dr', 'Pr' => 'Pr'],
    
];
