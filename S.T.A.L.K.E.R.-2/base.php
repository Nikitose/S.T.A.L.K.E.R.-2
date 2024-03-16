<?php

include('include/twig.php');
$twig = init_twig();

echo $twig->render('base.twig', [
	'titre' => 'S.T.A.L.K.E.R. 2'
]);

?>