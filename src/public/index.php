<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Import Bootstrap 5.1.3 CSS and JS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->

    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="assets/js/main.js"></script>

</head>

<body>

    <?php
    echo "<h1>Hello, we are starting to work with Databases and PHP PDO!</h1>";

   echo '<a href="edit-page.php">Create</a>';

    // phpinfo();

    // echo get_include_path();
    include dirname(__DIR__) . '/utils/db.php';
 /*    createPage("Page Title", "A super awesome Page", $dbConnection); */

    $page = array(
        "id"=> 0,
        "title"=> "Startseite",
        "content"=>"Hello World",
    );

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        if (isset($_GET['page'])) {
             $pageid= $_GET['page'];
             getPageByID($pageid, $dbConnection)
        }
    }

    ?>
</body>

</html>