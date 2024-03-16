<?php

include('include/twig.php');
include('include/data-categorie-fr.php');
$twig = init_twig();

echo $twig->render('mutants.twig', [
	'lang' => 'fr',
	'titre' => 'Mutants',
	'categorie' => $mutants,
	'style' => 'css/mutants.css',
]);

?>