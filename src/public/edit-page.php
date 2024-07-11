<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit-page</title>
</head>
<body>

<form method="POST" action="create-page.php">
<label for="title">Title</label><br>
<input type="text" name="title"><br>
<label for="content">Content</label><br>
<input type="text" name="content"><br>
<button type="submit">Create</button>

</form>
<?php include '../utils/db.php'; ?>
<?php prettyPrint($_POST); ?>
    
</body>
</html>