<?php

include "../utils/db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $title= $_POST['title'];
    $content= $_POST['content'];
    
}else{
    header('location: index.php');
    
}

createPage($title, $content, $dbConnection);

header('location: index.php');

