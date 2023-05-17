<!DOCTYPE html>
<html>
<head>
    <?php include_once("inc.db.php");
    ?>
	<title>Internetveiligheid voor ouderen</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<h1>Internetveiligheid voor ouderen</h1>
	</header>

	
	<footer>
		<p>&copy; 2023</p>
	</footer>

	<div id="login">
		<h3>Registreren</h3>
		<form action="register.php" method="post">
			
			<input type="text" id="username" name="username" placeholder="gebruikersnaam" required><br>
			
			<input type="password" id="password" name="password" placeholder="wachtwoord" required><br>
            
			<input type="email" id="email" name="email" placeholder="email" required><br>
			<input type="submit" value="Register">
		</form>
	</div>
    <?php
        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $sql = "INSERT INTO login (username, password, email) VALUES ('$username', '$password', '$email')";
            $result = $conn->query($sql);
            if($result->rowCount() > 0) {
                echo "Register successful";
                $_SESSION['username'] = $username;
                header("Location: index.php");
            } else {
                echo "Register failed";
            }
        }
        #echo $_SESSION['username'];
        ?>
</body>
</html>
