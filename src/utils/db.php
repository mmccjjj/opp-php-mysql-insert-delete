<?php
echo "<p>hellooooo from db.php!</p>";

$db_host = getenv("DB_HOST");
$db_name = getenv("DB_NAME");
$db_user = getenv("DB_USER");
$db_pass = getenv("DB_PASSWORD");


try {
    $dbConnection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo $e->getMessage();
}

function createPage($title, $content, $conn){
   try {
    $sql= "INSERT INTO pages (title, content) VALUES (:title, :content)";
    $statement= $conn->prepare($sql);
    $statement->bindParam(':title', $title);
    $statement->bindParam(':content', $content);
    $statement->execute();
   }
   catch(PDOException $e) {
        echo "Fehler beim Einfügen der Seite: " . $e->getMessage();
        }
}

function prettyPrint($a){
    echo '<pre>';
    print_r($a);
    echo '</pre>';
}


function getPageByID($id, $conn){
    try{
        $sql= "SELECT * FROM pages WHERE id= :id";
        $statement= $conn->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        $data= $statement->fetch(PDO::FETCH_ASSOC);
        return $data;
    }catch (PDOException $e) {
        echo "Fehler beim Holen der Seite: " . $e->getMessage();
    }
}

function getAllPageLinks($conn){
    try{
        $sql= "SELECT * FROM pages";
        $statement= $conn->prepare($sql);
        $data= $statement->fetch(PDO::FETCH_ASSOC);
        return $data;
    }catch (PDOException $e) {
        echo "Fehler beim Holen der Seite: " . $e->getMessage();
    }
}