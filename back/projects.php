<?php

//connexion à la BDD
require_once 'data.php';
session_start();
if ($_SESSION["login"]=='' ||$_SESSION["login"]==null) {
    header('location:index.php');
}

// session_destroy();
//recuperer tous mes projets en BDD
$sql = 'SELECT * FROM projects';
$requete = $db->query($sql); //query requete sans qu'on lui fournisse de données
$resultats =$requete->fetchAll(); //tableau associatif contenant tous les résultats trouvés

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/projects.css">
    
    <title>Document</title>
</head>
<body>
    <table class="#">
            <tr>
                <th>ID</th>
                <th id="col_titre">Titre</th>
                <th>Image</th>
                <th id="col_date">Date de réalisation</th>
                <th id="col_tech">Technologies utilisées</th>
                <th>Description</th>
                <th >Lien Web</th>
                <th>Lien Git</th>
                <th>Actions</th>
            
                <?php foreach($resultats as $projet): ?>
                        <tr>
                            <td><?php echo $projet['id']; ?></td>
                           
                            <td><?php  echo $projet['title']; ?></td>

                            <td><img src="../assets/uploads/<?php echo $projet['picture']; ?>" alt="photo projet"></td>
                            <td><?php  echo $projet['date_realisation']; ?></td>
                            
                            <td class="#">
                                <?php  $tech_used = explode(' ', $projet['tech_used']);?>
                                <?php  foreach($tech_used as $item){
                                echo  '<img class="logoTaille" src="../assets/images/logos/'.$item.'.png" alt="logo technologies utilisées">';
                                }
                                ?>
                            </td>

                                
                            <td><?php  echo $projet['description']; ?></td>

                                
                            <td class="col_link"><?php echo $projet['link_web']?></td>
                                
                            <td class="col_link"><?php echo $projet['link_git']?></td>

                            <td>
                                <a href="<?php echo './editProject.php?id='.$projet["id"].''?>";>Editer</a>/
                                <a href="<?php echo './deleteProject.php?id='.$projet["id"].''?>" onclick="return(confirm('Confimer la suppression'))";>Supprimer</a>
                            </td>
                            
                        </tr>

       
                <?php endforeach; ?>
            </tr>
    </table>
    <a href="./addProject.php">Ajouter un projet</a>
</body>
</html>