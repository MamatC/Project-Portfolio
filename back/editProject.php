<?php

    require './data.php';
    session_start();
    if ($_SESSION["login"]=='' ||$_SESSION["login"]==null) {
        header('location:index.php');
    }

    $id = $_GET['id'];//stock l'id reçu via la requete (url: ?id=12) dans une variable
    $sql= "SELECT*FROM projects WHERE id='$id'";// 
    $requete = $db->query($sql); //query requete sans qu'on lui fournisse de données
    $resultats =$requete->fetchAll(); //tableau associatif contenant tous les résultats trouvés
    
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            img{
                width: 20%;
            }
        </style>
        <title>Editer projet</title>
    </head>
    <body>
            
        <?php foreach($resultats as $projet): ?>
        <form action="<?php echo './saveEditProject.php?id='.$projet['id']; ?>" method="post" enctype="multipart/form-data">
            
            <p><label for="title">Titre</label></p>
            <input type="text" name="title" value="<?php  echo $projet['title']; ?>">
            
            <p><label for="description">Description</label></p>
            <textarea id="description" name="description"rows="5" cols="33"><?php  echo $projet['description']; ?></textarea>
            
            <p><label for="picture">Image</label></p>
            <img src="../assets/uploads/<?php  echo $projet['picture']; ?>" alt="image projet" >
            <p><input type="file" name="picture"></p>
            
            <label for="date_realisation">Date de réalisation</label>
            <p><input type="text" name="date_realisation" value="<?php  echo $projet['date_realisation']; ?>"></p>
            
            <p><label for="tech_used">Technologies utilisées</label></p>
                <?php  $tech_used = explode(' ', $projet['tech_used']);?>
                <input type="checkbox" name="tech_used[]" value="html" <?php echo (in_array('html', $tech_used)) ? 'checked' : ''; ?>>HTML <!--IF TERNAIRE //  si le mot HTML se trouve dans le tableau $tech_used, j'affiche l'attribut checked sinon j'affiche rien-->
                <input type="checkbox" name="tech_used[]" value="css" <?php echo (in_array('css', $tech_used)) ? 'checked' : ''; ?>>CSS
                <input type="checkbox" name="tech_used[]" value="js" <?php echo (in_array('js', $tech_used)) ? 'checked' : ''; ?>>JS
                <input type="checkbox" name="tech_used[]" value="wordpress" <?php echo (in_array('wordpress', $tech_used)) ? 'checked' : ''; ?>>WORDPRESS
                <input type="checkbox" name="tech_used[]" value="php" <?php echo (in_array('php', $tech_used)) ? 'checked' : ''; ?>>PHP
                <input type="checkbox" name="tech_used[]" value="xd" <?php echo (in_array('xd', $tech_used)) ? 'checked' : ''; ?>>XD
                                
            <p><label for="link_web">Liens Web</label></p>
            <p><input type="text" name="link_web" value="<?php  echo $projet['link_web']; ?>"></p>

            <label for="link_git">Liens GitHub</label>
            <p><input type="text" name="link_git" value="<?php  echo $projet['link_git']; ?>"></p>
            
            <p><input type="submit" name="submit" value="Envoyer"></p>
            <p><a href="<?php echo './saveEditProject.php?id='.$projet["id"].''?>";>Editer</a></p>
        </form>
        <?php endforeach; ?>

    </body>
</html>
