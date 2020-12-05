<?php
// Calls for the config file
include( "inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO devlog (title, description, version) VALUES(?, ?, ?)');
$req->execute(array($_POST['title'], $_POST['description'], $_POST['version']));

// Redirect user back to the add criminal page
header('Location: devlog.php');

?>