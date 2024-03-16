<?php

include('include/twig.php');
include('include/data-contact-en.php');
$twig = init_twig();

echo $twig->render('contact.twig', [
	'lang' => 'en',
	'style' => 'css/contact.css',
	'contact' => $contact,
]);

?>