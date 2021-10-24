<?php

    require './data.php';
    $id = $_GET['id'];
    $sql= "DELETE * FROM projects WHERE id= '$id'";
    $db -> query($sql);

    header("location:projects.php");

?>
