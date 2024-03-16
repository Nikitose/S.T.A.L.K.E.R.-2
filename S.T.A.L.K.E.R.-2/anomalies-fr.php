<?php

include('include/twig.php');
include('include/data-categorie-fr.php');
$twig = init_twig();

echo $twig->render('anomalies.twig', [
	'lang' => 'fr',
	'titre' => 'Anomalies',
	'categorie' => $anomalies,
	'style' => 'css/anomalies.css',
]);

?>