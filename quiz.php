<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("inc.db.php"); ?>
    <!-- If Session user is not set redirect to login page -->
    <?php
        if(!isset($_SESSION['username'])) {
            header("Location: index.php");
        }
        ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
Welkom bij de Quiz!
</body>
</html>