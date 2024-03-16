<?php

include('include/twig.php');
include('include/data-propos-fr.php');
$twig = init_twig();

echo $twig->render('a-propos.twig', [
	'lang' => 'fr',
	'titre' => 'à-propos',
	'style' => 'css/a-propos.css',
	'propos' => $a_propos,
]);

?>