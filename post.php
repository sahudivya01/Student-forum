<html>
<head>
	</head>
	<body>
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
date_default_timezone_set('Asia/Kolkata');
$d=date("Y/m/d");
$t=date("h:i:sa");
$sql = "INSERT INTO postrecord (post,username,pdate,ptime)
VALUES ('$_GET[post]','$_SESSION[username]', '$d', '$t')";//result = $conn->query($sql);

if ($conn->query($sql) === TRUE){
    // output data of each row
    header("Location:http://localhost/student/scholaradda.php");

}
else
{

	echo "Error: " . $sql . "<br>" . $conn->error;


}
$conn->close();
?>
	</body>
</html>

























