<?php

include('include/twig.php');
include('include/data-categorie-fr.php');
$twig = init_twig();

echo $twig->render('personnages.twig', [
	'lang' => 'fr',
	'titre' => 'Personnages',
	'categorie' => $personnages,
	'style' => 'css/personnages.css',
]);

?>