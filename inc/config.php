<?php
$username = "root"; // username
$password = ""; // password of the database
$hostname = "localhost"; // host of the database
$namebase = "devlog"; // name of the database

try
 {
  $bdd = new PDO('mysql:host='.$hostname.';dbname='.$namebase.'', $username, $password);
 }
  catch (Exception $e)
 {
  die('Erreur : ' . $e->getMessage());
 }
 ?>