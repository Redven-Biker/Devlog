<?php
// Calls for the config file
include( "inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO users (username, pass, date) VALUES(?, ?, ?)');
$req->execute(array($_POST['username'], $_POST['pass'], $_POST['date']));

// Redirect user back to the add criminal page
header('Location: users.php');

?>