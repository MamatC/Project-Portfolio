<?php

    require '../back/data.php';
    // var_dump($_POST);
    // var_dump($_FILES);

    
    if(isset($_POST['submit'])){
        date_default_timezone_set('Europe/Paris');
        $DateAndTime = date('Y-m-d H:i:s');
        $created_at = $DateAndTime;
        $title = $_POST['title'];
        $description = addslashes($_POST['description']);
        $picture = $_FILES['picture'];
        $date_realisation = $_POST['date_realisation'];
        $tech_used = $_POST['tech_used'];
        $tech_used = implode(' ',$tech_used);
        $link_web = $_POST['link_web'];
        $link_git = $_POST['link_git'];
        
        addProject ($title, $description, $picture, $created_at, $date_realisation, $tech_used, $link_web, $link_git);
    }

    
    function addProject ($title, $description, $picture, $created_at, $date_realisation, $tech_used, $link_web, $link_git){
        global $db;
        
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

                
                $req = $db->prepare("INSERT INTO projects (title, description, picture, created_at, date_realisation, tech_used, link_web, link_git) VALUES ('$title', '$description', '$file', '$created_at', '$date_realisation', '$tech_used', '$link_web', '$link_git')");
                $req->execute();

                header("location:projects.php");
                // echo "Image enregistrée";
            }           
            else{
                echo "Une erreur est survenue";
            }
        }
    }

?>
