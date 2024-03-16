<?php

//FR

// ANOMALIES
$anomalies = [
    'anomalie_1' => [
        'nom_categorie' => 'Anomalies',
        'id' => 1,
        'nom' => 'Sphère Gravitationnelle',
        'url' => 'images/anomalies/anomalie-sphere-gravitationnelle.jpg',
        'alt_image' => 'image anomalie Sphère Gravitationnelle',
        'danger' => 'danger',
        'niveau_danger' => '3',
        'rareté' => 'rareté',
        'niveau_rareté' => '5',
        'description' => [
            'Cette anomalie, grâce à des pulsions, attire tout vers son centre.',
            'C\'est pourquoi on peut observer de nombreux objets s\'y diriger.',
        ],
    ],
    'anomalie_2' => [
        'nom_categorie' => 'Anomalies',
        'id' => 2,
        'nom' => 'Couloir de feu',
        'url' => 'images/anomalies/anomalie-couloir-de-feu.jpg',
        'alt_image' => 'image anomalie Couloir de Feu',
        'danger' => 'danger',
        'niveau_danger' => '1',
        'rareté' => 'rareté',
        'niveau_rareté' => '4',
        'description' => [
            'À l\'emplacement de cette anomalie, le sol devient brûlant.',
            'Peu dangereuse car elle n\'est pas en mouvement et vue de loin.',
        ],
    ],
    'anomalie_3' => [
        'nom_categorie' => 'Anomalies',
        'id' => 3,
        'nom' => 'Téléport',
        'url' => 'images/anomalies/anomalie-teleport.jpg',
        'alt_image' => 'image anomalie Teleport',
        'danger' => 'danger',
        'niveau_danger' => '4',
        'rareté' => 'rareté',
        'niveau_rareté' => '5',
        'description' => [
            'Cela est une rareté - une sphère gravitationnelle.',
            'Qui, si on s\'en approche, nous téléporte dans un endroit au hasard de la Zone...',
        ],
    ],
    'anomalie_4' => [
        'nom_categorie' => 'Anomalies',
        'id' => 4,
        'nom' => 'Électre',
        'url' => 'images/anomalies/anomalie-electre.jpg',
        'alt_image' => 'image anomalie Electre',
        'danger' => 'danger',
        'niveau_danger' => '4',
        'rareté' => 'rareté',
        'niveau_rareté' => '2',
        'description' => [
            'Une anomalie qui électrocute à des millions de volts.',
            'Elle n\'est pas rare, mais mortelle...',
        ],
    ],
    'anomalie_5' => [
        'nom_categorie' => 'Anomalies',
        'id' => 5,
        'nom' => 'Tourbillon',
        'url' => 'images/anomalies/anomalie-tourbion.jpg',
        'alt_image' => 'image anomalie Tourbion',
        'danger' => 'danger',
        'niveau_danger' => '4',
        'rareté' => 'rareté',
        'niveau_rareté' => '2',
        'description' => [
            'L\'image illustre très bien son fonctionement...',
            'Presque invisible, mais on peut la repérer avec les feuilles qui tournent autour.',
        ],
    ],
];

// MUTANTS
$mutants = [
    'mutant_1' => [
        'id' => 1,
        'nom' => 'Snork',
        'url' => 'images/mutants/mutant-snork.jpg',
        'alt_image' => 'Le mutant Snork',
        'danger' => 'danger',
        'niveau_danger' => '4',
        'rareté' => 'rareté',
        'niveau_rareté' => '3',
        'description' => '
        Le Snork est un être humain ayant été exposé à des doses excessives de radiations, le transformant en un mutant. Leur force réside dans leur nombre, dotés d\'une aptitude à bondir à des grande hauteurs, leur proie n\'a souvent aucune chance de leur échapper.',
    ],
    'mutant_2' => [
        'id' => 2,
        'nom' => 'Sangsue',
        'url' => 'images/mutants/mutant-sangsue.jpg',
        'alt_image' => 'Le mutant Sangsue',
        'danger' => 'danger',
        'niveau_danger' => '5',
        'rareté' => 'rareté',
        'niveau_rareté' => '4',
        'description' => 'La Sangsue, autrefois humain, est désormais un être mutant issu d\'expériences scientifiques. Sa dangerosité réside dans sa capacité à devenir presque invisible, doublée d\'une force redoutable. Son mode d\'attaque est insidieux : il s\'accroche à ses proies avec ses tentacules pour se nourrir de leur sang.',
    ],
    'mutant_3' => [
        'id' => 3,
        'nom' => 'Sanglier',
        'url' => 'images/mutants/mutant-sanglier.jpg',
        'alt_image' => 'Le mutant Sanglier',
        'danger' => 'danger',
        'niveau_danger' => '2',
        'rareté' => 'rareté',
        'niveau_rareté' => '1',
        'description' => 'Le Sanglier, autrefois ordinaire, a été métamorphosé par des mutation, le rendant plus imposant, agile, agressif et puissant.',
    ],
    'mutant_4' => [
        'id' => 4,
        'nom' => 'Poltergeist',
        'url' => 'images/mutants/mutant-poltergeist.jpg',
        'alt_image' => 'Le mutant Poltergeist',
        'danger' => 'danger',
        'niveau_danger' => '4',
        'rareté' => 'rareté',
        'niveau_rareté' => '3',
        'description' => 'Il existe deux variétés de poltergeists : les électriques et les enflammés. Leur attaques se manifeste sous forme de feu ou d\'électricité, capables de nous tuer instantanément avec cette force.',
    ],
    'mutant_5' => [
        'id' => 5,
        'nom' => 'Chimer',
        'url' => 'images/mutants/mutant-chimer.jpg',
        'alt_image' => 'Le mutant Chimer',
        'danger' => 'danger',
        'niveau_danger' => '5',
        'rareté' => 'rareté',
        'niveau_rareté' => '5',
        'description' => 'La Chimère, redoutable parmi les mutants de la Zone, se distingue par ses deux têtes, sa vitesse fulgurante, sa capacité à bondir à des hauteurs impressionnantes, et sa force prodigieuse, l\'évasion est impossible...',
    ],
];

// PERSONNAGES
$personnages = [
    'personnage_1' => [
        'id' => 1,
        'nom' => 'Skif',
        'url' => 'images/personnages/skif.gif',
        'alt_image' => 'Le personnage Skif',
        'importance' => 'importance dans l\'histoire',
        'niveau' => '5',
        'description' => [
            'Le personnage principal, tous les extraits montré dans les trailer son vue par Skif à la première personnes, donc nous n\'avons jamais vu son visage.',
            'Grâce à un autre trailler, nous avons appris que Nimble est amie avec Strider et qu\'ils se sont rencontrés en étant adeptes de Monolithe.',
            'Avec ce personnage, nous aurons la capacité de prendre des décisions influençant non seulement le sort du personnage mais aussi l\'ensemble du monde du jeu.',
        ],
    ],
    'personnage_2' => [
        'id' => 2,
        'nom' => 'Strider',
        'url' => 'images/personnages/Strider.jpg',
        'alt_image' => 'Le personnage Strider',
        'importance' => 'importance dans l\'histoire',
        'niveau' => '5',
        'description' => [
            'Strider a émergé dans la Zone après avoir traversé une existence difficile à l\'extérieur, arrivant en tant que Stalker avec pour objectif de tirer profit de cette nouvelle vie.',
            'Strider, au fil du temps, s\'est fait convertir en adepte du Monolithe, s\'engageant dans de nombreuses batailles qui ont façonné son destin. C\'est au cours de ces conflits qu\'il a croisé la route de Skif.',
            'Au cours de Stalker 2, Strider perd le contact avec Monolithe, comme tous les autres adeptes. Dans le trailer, on le voit partager avec Skif le moment précis où ce lien a été rompu.',
        ],
    ],
    'personnage_3' => [
        'id' => 3,
        'nom' => 'Faust',
        'url' => 'images/personnages/Faust.jpg',
        'alt_image' => 'Le personnage Faust',
        'importance' => 'importance dans l\'histoire',
        'niveau' => '3',
        'description' => [
            'On voit Faust que quelques secondes dans le trailer, il dénonce qu\'il est impossible de tuer "le dieu Monolithe".',
            'Derrière lui se trouvent les guerriers de Monolithe.',
            'En somme, on peut comprendre qu\'il est l\'un des commandants de la fraction de Monolithe.',
        ],
    ],
    'personnage_4' => [
        'id' => 4,
        'nom' => 'Nimble',
        'url' => 'images/personnages/Nimble.jpg',
        'alt_image' => 'Le personnage Nimble',
        'importance' => 'importance dans l\'histoire',
        'niveau' => '5',
        'description' => [
            'Dans le trailer, Nimble parle à un autre personnage, Skif, le protagoniste principal, et lui révèle qu\'il a dû tuer un stalker pour sauver la Zone.',
            'Il énonce de même dans le trailer que la zone lui a donné une nouvelle vie et qu\'il la protégera tout le temps.',
            'Il semble que ce sera l\'antagoniste de l\'histoire.',
        ],
    ],
    'personnage_5' => [
        'id' => 5,
        'nom' => 'Dalin',
        'url' => 'images/personnages/Dalin.jpg',
        'alt_image' => 'Le personnage Dalin',
        'importance' => 'importance dans l\'histoire',
        'niveau' => '3',
        'description' => [
            'Dalin semble être une personne prospère cherchant à tirer profit de la zone.',
            'Il semble que Skif travaille pour lui et reçoit des instructions d\'action de ça part.',
            'La zone attire effectivement les personnes riches, car on peut y gagner beaucoup d\'argent...',
        ],
    ],
    'personnage_6' => [
        'id' => 6,
        'nom' => 'Korshunov',
        'url' => 'images/personnages/Korshunov.jpg',
        'alt_image' => 'Le personnage Korshunov',
        'importance' => 'importance dans l\'histoire',
        'niveau' => '4',
        'description' => [
            'Nous n\'avons pas beaucoup d\'informations sur Korshunov, ni dans les textes ni dans les trailers.',
            'Mais vu les couleurs noires et blanches de son gilet, on peut supposer qu\'il fait partie de la faction "Devoir" et qu\'il doit être haut placé, voire même être le chef.',
            'Dans le traller, on peut observer que Korshunov et Skif se préparent ensemble pour un combat.',
        ],
    ],
];



?>
