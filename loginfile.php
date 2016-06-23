
<?php
include "dbconfig.php";
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['Name']) || empty($_POST['Password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $phone and $password
$Name=$_POST['Name'];
$Password=$_POST['Password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
// To protect MySQL injection for Security purpose
$Name = stripslashes($Name);
$Password = stripslashes($Password);
$Name = mysql_real_escape_string($Name);
$Password = mysql_real_escape_string($Password);
// Selecting Database

// SQL query to fetch information of registerd users and finds user match.

$query = mysql_query("select * from users where Password='$Password' AND Name='$Name'");
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$Name; // Initializing Session
header("location: addsite.php"); // Redirecting To Other Page
} else {
$error = "Name or Password is invalid";
}
 // Closing Connection
}
}
?>