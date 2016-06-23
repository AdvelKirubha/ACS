
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="" name="description">
    <meta content="" name="author">
    <title>Acs-Dashboard</title><!--Page loading plugin Start -->
    <link href="assets/css/plugins/pace.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/plugins/easyTree.css" rel="stylesheet">
    <!-- Plugin Css End -->
    <!-- Custom styles Style -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Custom styles Style End-->
    <!-- Responsive Style For-->
    <link href="assets/css/responsive.css" rel="stylesheet">
    <style>
    #body{
       /*  background-image: url("assets/background.png");*/
       background: url(assets/background.png) no-repeat fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
    }
   
    .ii{    position: absolute;
    margin-left: 102px;
    margin-top: -26px;
    }
    td{    padding: 2px;}
    .red{
            position: absolute;
    margin-left: 460px;
    margin-top: -38px;
    color: red;
    font-size: 20px;
    }
    .bor{
            border-right: 1px solid #0E0E0E;
    }
    .mov1{
            margin-top: 181px;
    margin-left: 105px;
    }
    </style>
</head>
<?php
include('dbconfig_index.php');

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
 header("location: dashboard.php"); // Redirecting To Other Page
} else {
$error = "Name or Password is invalid";
}
 // Closing Connection
}
}
?>
<body class="" id="body">
<div class="container">
<div class="row">
<div class="col-md-6">
</div>
<form class="" action="" method="post">
<div class="col-md-6">
<table class="mov1">
<tr><td></td><td><h1 style="font-size: 70px;
    
    color: #ED652F;">ACS</h1></td></tr>
<tr>
<td>Username</td> 
<td><input type="text" name="Name" id="Name" ></td>   
</tr>
<tr>
<td>Password</td> 
<td><input type="password" name="Password" id="Password"><br><span style="color:red;"><?php echo $error; ?></td>    
</tr>
<tr>
<td><input type="checkbox" style="margin-left: 46px;" ></td> 
<td>Remember by Username</td>    
</tr>
<tr>
<td></td> 
<td>Forget Password?</td>    
</tr>
</table>
<input type="submit" value="login" style="margin-left: 164px;" name="submit" id="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="clear" onClick="Clear();">


</div>
</form>
</div>
</div>

    <script src="assets/js/color.js" type="text/javascript">
    </script> 
    <script src="assets/js/lib/jquery-1.11.min.js" type="text/javascript">
    </script> 
    <script src="assets/js/bootstrap.min.js" type="text/javascript">
    </script> 
    <script src="assets/js/multipleAccordion.js" type="text/javascript">
    </script> <!--easing Library Script Start -->
    <script src="assets/js/lib/jquery.easing.js">
    </script> <!--easing Library Script End -->
     <!--Nano Scroll Script Start -->
    <script src="assets/js/jquery.nanoscroller.min.js">
    </script> <!--Nano Scroll Script End -->
     <!--switchery Script Start -->
    <script src="assets/js/switchery.min.js">
    </script> <!--switchery Script End -->
     <!--bootstrap switch Button Script Start-->
    <script src="assets/js/bootstrap-switch.js">
    </script> <!--bootstrap switch Button Script End-->
     <!--easypie Library Script Start -->
    <script src="assets/js/jquery.easypiechart.min.js">
    </script> <!--easypie Library Script Start -->
     <!--bootstrap-progressbar Library script Start-->
    <script src="assets/js/bootstrap-progressbar.min.js">
    </script> <!--bootstrap-progressbar Library script End-->
     
    <script src="assets/js/pages/layout.js" type="text/javascript">
    </script> <!--Layout Script End -->
     <!--EasyTree View Library script start-->
    <script src="assets/js/easyTree.js">
    </script> <!--EasyTree View Library script start-->
     
    <script src="assets/js/pages/demo.treeView.js" type="text/javascript">
    </script>

    <script>
    $(document).ready(function(){
    });
    </script>
   <script type="text/javascript">
   function Clear()
    {    
       document.getElementById("Name").value= "";
       document.getElementById("Password").value= "";
    }
   </script>
</body>
</html>