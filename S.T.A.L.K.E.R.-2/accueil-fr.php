<?php

include('include/twig.php');
include('include/data-accueil-fr.php');
$twig = init_twig();

echo $twig->render('accueil.twig', [
	'lang' => 'fr',
	'titre' => 'S.T.A.L.K.E.R. 2',
	'style' => 'css/accueil.css',
	'accueil' => $accueil,
]);

?>