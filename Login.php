<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="verify.php" method="post"> 
<label> User Name:<br> </label>
<input type="text" Uname="username"><br><br> 
<label>Password:<br> </label>
<input type="password" password="password"><br><br> 
<input type="submit" name="submit" value="Login">
</form> 
</body>
</html>

<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $Uname = $_POST['username'];
        $password = $_POST['password'];
    }

$servername = "challenge10";
$username = "challenge10";
$password = "12345";
$dbname = "challenge10";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO contactform_entries (id, fname, lname, email) VALUES ('0', '$fname', '$lname', '$email')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);

?>