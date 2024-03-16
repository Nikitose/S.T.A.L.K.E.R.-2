<?php

include('include/twig.php');
include('include/data-categorie-en.php');
$twig = init_twig();

echo $twig->render('mutants.twig', [
	'lang' => 'en',
	'titre' => 'Mutants',
	'categorie' => $mutants,
	'style' => 'css/mutants.css',
]);

?>