<?php
    require '../back/data.php';
    session_start();
    if ($_SESSION["login"]=='' ||$_SESSION["login"]==null) {
        header('location:index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Projet</title>
</head>
<body>
    <form action="insertProject.php" method="post" enctype="multipart/form-data">
        
        <p><label for="title">Titre</label></p>
        <input type="text" name="title">
        
        <p><label for="description">Description</label></p>
        <textarea id="description" name="description"rows="5" cols="33"></textarea>
        
        <p><label for="picture">Image</label></p>
        <p><input type="file" name="picture"></p>
        
        <label for="date_realisation">Date de réalisation</label>
        <p><input type="text" name="date_realisation"></p>
        
        <p><label for="tech_used">Technologies utilisées</label></p>
            <input type="checkbox" name="tech_used[]" value="html">HTML
            <input type="checkbox" name="tech_used[]" value="css">CSS
            <input type="checkbox" name="tech_used[]" value="js">JS
            <input type="checkbox" name="tech_used[]" value="wordpress">WORDPRESS
            <input type="checkbox" name="tech_used[]" value="php">PHP
            <input type="checkbox" name="tech_used[]" value="xd">XD
            
        <p><label for="link_web">Liens Web</label></p>
        <p><input type="text" name="link_web"></p>

        <label for="link_git">Liens GitHub</label>
        <p><input type="text" name="link_git"></p>
        
        <p><input type="submit" name="submit" value="Ajouter"></p>
    </form>
</body>
</html>