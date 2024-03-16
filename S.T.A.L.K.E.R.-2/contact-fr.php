<?php

include('include/twig.php');
include('include/data-contact-fr.php');
$twig = init_twig();

echo $twig->render('contact.twig', [
	'lang' => 'fr',
	'style' => 'css/contact.css',
	'contact' => $contact,
]);

?>