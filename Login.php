<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("inc.db.php"); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Create login form --> 
    <form action="index.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="">
        <label for="password">Password</label>
        <input type="password" name="password" id="">
        <input type="submit" value="Login">
    </form>
    <!-- Check if log in is correct --> 
    <?php
        if(isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
            $result = $conn->query($sql);
            if($result->rowCount() > 0) {
                echo "Login successful";
                $_SESSION['username'] = $username;
<<<<<<< Updated upstream
                header("Location: menu.html");
=======
                header("Location: home.php");
>>>>>>> Stashed changes
            } else {
                echo "Login failed";
            }
        }
        #echo $_SESSION['username'];
        ?>
</body>
</html>