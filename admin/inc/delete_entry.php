<?php
include( "config.php" );

if(isset($_POST['deleteusers']) and is_numeric($_POST['deleteusers']))
{
  $id = $_POST['deleteusers'];
  $count=$bdd->prepare("DELETE FROM users WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../users.php');
};

if(isset($_POST['deletedevlog']) and is_numeric($_POST['deletedevlog']))
{
  $id = $_POST['deletedevlog'];
  $count=$bdd->prepare("DELETE FROM devlog WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../devlog.php');
};
?>