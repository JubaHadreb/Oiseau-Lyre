<?php

$hote = '127.0.0.1';
$base = 'oiseau_lyre';
$utilisateur = 'root';
$passe = '';

/*$hote = 'oiseaulyzcadmin.mysql.db';
$base = 'oiseaulyzcadmin';
$utilisateur = 'oiseaulyzcadmin';
$passe = 'NeoGenesis01';*/

$connexion = new PDO('mysql:host='.$hote.';dbname='.$base, $utilisateur, $passe);

$connexion->exec('set names utf8');

?>