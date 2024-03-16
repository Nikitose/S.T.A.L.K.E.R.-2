<?php

include('include/twig.php');
include('include/data-categorie-en.php');
$twig = init_twig();

echo $twig->render('personnages.twig', [
	'lang' => 'en',
	'titre' => 'Characters',
	'categorie' => $personnages,
	'style' => 'css/personnages.css',
]);

?>