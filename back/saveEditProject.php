<?php

require '../back/data.php';

$id = $_GET["id"];
$title = $_POST['title'];
$description = addslashes($_POST['description']);
$picture = $_FILES['picture'];
$date_realisation = $_POST['date_realisation'];
$tech_used = $_POST['tech_used'];
$tech_used = implode(' ',$tech_used);
$link_web = $_POST['link_web'];
$link_git = $_POST['link_git'];

$file = "";

if(isset($_FILES)){
    $tmpName = $picture['tmp_name'];
    $name = $picture['name'];
    $size = $picture['size'];
    $error = $picture['error'];

    $tabExtension = explode('.', $name);
    $extension = strtolower(end($tabExtension));

    $extensions = ['jpg', 'png', 'jpeg', 'gif','webp'];
    $maxSize = 400000;

    if(in_array($extension, $extensions) && $size <= $maxSize && $error == 0){

        $uniqueName = uniqid('', true);
        //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
        $file = $uniqueName.".".$extension;
        //$file = 5f586bf96dcd38.73540086.jpg
        
        move_uploaded_file($tmpName, '../assets/uploads/'.$file);

    }
}

if ($file == '' || $file== null) { //si il n'y a rien dans l'input
    $sql ="SELECT * FROM `projects` WHERE id = '$id'";//alors on récupère le projet avec l'id
    $requete = $db->query($sql); // Nous exécutons la requête SQL et stockons le résultat (un objet PDOStatement) dans la variable $requete
    $resultats = $requete->fetch();//on stocke dans la variable resultats  la ligne du projet
    $file = $resultats["picture"];//on selectionne l'image dans la ligne que l'on stocke dans $file pour qu'elle soit affichée
}

$sql ='UPDATE projects SET title=:title, description=:description, picture=:picture, date_realisation=:daterealisation, tech_used=:techused, link_web=:linkweb, link_git=:linkgit WHERE id=:id';
$requete = $db->prepare($sql);
$requete->bindValue(':id', $id, PDO::PARAM_INT);
$requete->bindValue(':title', $title, PDO::PARAM_STR);
$requete->bindValue(':description', $description, PDO::PARAM_STR);
$requete->bindValue(':picture', $file, PDO::PARAM_STR);
$requete->bindValue(':daterealisation', $date_realisation, PDO::PARAM_STR);
$requete->bindValue(':techused', $tech_used, PDO::PARAM_STR);
$requete->bindValue(':linkweb', $link_web, PDO::PARAM_STR);
$requete->bindValue(':linkgit', $link_git, PDO::PARAM_STR);
$requete->execute();


header('location:projects.php'); //redirection sur la page projects.php une fois le requete effectuée

?>