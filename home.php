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
    <title>Quiz</title>
</head>
<body>
    Welkom <?php echo $_SESSION['username'] . " "; ?> Klik <a href="quiz.php"><button>hier</button></a> om met de quiz te beginnen!
</body>
</html>