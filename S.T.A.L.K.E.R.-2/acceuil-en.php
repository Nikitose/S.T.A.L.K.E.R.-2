<?php

include('include/twig.php');
include('include/data-acceuil-en.php');
$twig = init_twig();

echo $twig->render('acceuil.twig', [
	'lang' => 'en',
	'titre' => 'S.T.A.L.K.E.R. 2',
	'style' => 'css/acceuil.css',
	'acceuil' => $acceuil,
]);

?>