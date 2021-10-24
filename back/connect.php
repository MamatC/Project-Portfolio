<?php 

require_once 'data.php';

$login = $_POST["login"];
$mdp = $_POST["mdp"];

$sql = "SELECT * FROM `users` WHERE `username`= '$login'";
$requete = $db->query($sql);
$resultats = $requete->fetch();

if ($resultats == null || $resultats=='') {

}
else {
    if (password_verify($mdp, $resultats['password'])){
        echo 'mot de passe correct';
        session_start();
        $_SESSION["login"] = $login;
        header("location:projects.php");
    }
    else {
        header("location:index.php");
    }
}


?>
