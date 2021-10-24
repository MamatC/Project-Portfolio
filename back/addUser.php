<?php

require_once 'data.php';

$login = $_POST["login"];
$mdp = $_POST["mdp"];
$mdp = password_hash($mdp, PASSWORD_ARGON2I);

$sql = "INSERT INTO `users`(`username`, `password`) VALUES (:login, :mdp)";
$requete = $db->prepare($sql);
$requete->bindValue(":login", $login, PDO::PARAM_STR);
$requete->bindValue(":mdp", $mdp, PDO::PARAM_STR);
$requete->execute();
// header("location:connect.php");

?>