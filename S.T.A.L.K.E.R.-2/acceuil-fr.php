<?php

include('include/twig.php');
include('include/data-acceuil-fr.php');
$twig = init_twig();

echo $twig->render('acceuil.twig', [
	'lang' => 'fr',
	'titre' => 'S.T.A.L.K.E.R. 2',
	'style' => 'css/acceuil.css',
	'acceuil' => $acceuil,
]);

?>