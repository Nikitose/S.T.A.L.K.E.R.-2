<?php

include('include/twig.php');
include('include/data-accueil-en.php');
$twig = init_twig();

echo $twig->render('accueil.twig', [
	'lang' => 'en',
	'titre' => 'S.T.A.L.K.E.R. 2',
	'style' => 'css/accueil.css',
	'accueil' => $accueil,
]);

?>