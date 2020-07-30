<?php
// Connexion à la BDD
// ERRMODE_EXCEPTION va nous permettre de capter les erreurs renvoyées par l'OBJET PDO
$pdo = new PDO('mysql:host=localhost;dbname=fb','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
?>