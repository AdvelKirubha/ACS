<?php
session_start();// Starting Session
//error_reporting('0');
$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select * from users where Name='$user_check'");
$data = mysql_fetch_assoc($ses_sql);
$login_session =$data['Name'];
if(!isset($data['Name'])){
mysql_close($connection);
header('Location: index.php'); 
}
?>