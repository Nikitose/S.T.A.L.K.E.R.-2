<?php

include('include/twig.php');
include('include/data-categorie-en.php');
$twig = init_twig();

echo $twig->render('anomalies.twig', [
	'lang' => 'en',
	'titre' => 'Anomalies',
	'categorie' => $anomalies,
	'style' => 'css/anomalies.css',
]);

?>