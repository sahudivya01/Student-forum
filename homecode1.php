<html lang="en">
<head>
</head>


<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scholar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM entry where username='$_GET[username]' and password='$_GET[password]'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each 
    $row = $result->fetch_assoc();
    $_SESSION["username"] = $row["username"];
    $_SESSION["id"] = $row["id"];
    $_SESSION["email"] = $row["email"];
    $_SESSION["dob"] = $row["dob"];
    $_SESSION["designation"] = $row["designation"];
    $_SESSION["country"] = $row["country"];
    $_SESSION["state"] = $row["state"];
    $_SESSION["picpath"] = $row["picpath"];


    
    header("Location:http://localhost/student/scholaradda.php");

}
else
{

    header("Location:http://localhost/student/home.php?msg=Sorry your id or password is wrong");

}
$conn->close();
?>

</body>
</html>