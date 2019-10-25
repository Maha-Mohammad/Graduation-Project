<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<title> تسجيل الدخول </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style type="text/css">
	
	body
{
	margin: 0;
	padding: 0;
	background: url(images/log1.jpg);
	background-size: cover;
	background-position: center;
	font-family: sans-serif;
    background-color:#4775d1;

}
   
.login-box
{
	width: 320px;
	height: 420px;
	background: rgba(0, 0, 0, 0.5);
	color: #fff;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50% ,-50%);
	box-sizing: border-box;
	padding: 55px 30px;
    

}
.avatar
{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: calc(50% - 50px);

}

h1
{
text-align: center; 
margin: 20px;
color: white;
border-radius: 3px;
 

	
}
.login-box p
{
	margin: 0;
	padding: 0;
	font-weight: bold;
	float: right;


}
.login-box input
{
	width: 100%;
	margin-bottom: 20px;
	float: right;
	
}
.login-box input[type="text"] , input[type="password"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 24px;
	float: right;
	direction: rtl;
}
form{

	direction: rtl;
}
.login-box input[type="submit"]
{
	border: none;
	outline: none;
	height: 40px;
	background: #1c8adb;
	color: #fff;
	font-size: 18px;
	border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
	cursor: pointer;
	background: #1c8adb;
	color: #000;
}
.login-box a
{
	text-decoration: none;
	font-size: 14px;
	color: #fff;
	float: right;
}

.box-a a
{
	text-decoration: underline;
	font-size: 20px;
	color: #fff;
	float: right;
}
    .box-a a:hover{
        color: #1c8adb;
    }
#show-sidebar {
  position: fixed;
  left: 0;
  top: 10px;
  border-radius: 0 4px 4px 0px;
  width: 40px;
  font-size: 18px;
  padding: 3px;
  margin: 0;
  background: white;
  height:30px;
}
    #home-content-box-inner {
    display: table-cell;
    vertical-align: middle;
       

}
    .text{
        
        font-size: 22px;
    }

</style>

</head>

<body>
     <a id="show-sidebar" class="btn btn-sm " href="index.php"> <i  class='fas fa-arrow-left'></i> </a>
<div class="container">
<div class="login-box">
	<img src="images/avatar.jpg" class="avatar">
	<div id="home-content-box-inner">
   
   

	<h1>تسجيل الدخول</h1>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<p class="text">اسم المستخدم</p>
	<input type="text" name="username" placeholder="أدخل اسم المستخدم" autocomplete="off">
	<p class="text">كلمة المرور</p>
	<input type="password" name="password" placeholder="أدخل كلمة المرور">
	<input type="submit" name="submit" value="تسجيل الدخول">
	

<div class="box-a">
	<a href="reg/reg.php">أنشئ حساب</a>
</div>
	
</form>
    </div>	
</div>
</div>
</body>
</html>

<?php 

include"reg/includes/connect.php";
$user=$pass="";
$type="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($_POST["username"])){
  $user =$_POST["username"];}
  if(isset($_POST["password"])){
  $pass =$_POST["password"]; }

$sql = "SELECT user_password FROM users where user_name ='$user'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if($row['user_password']==$pass){
  $_SESSION["username"]=$user;
    //$_SESSION["id"]=$id;


  $sql2 = "SELECT user_status FROM users where user_name ='$user'";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();
 

              $type=$row2["user_status"];
              
              if ($type == "employee") {
              echo "<script> window.open ('resume.php' , '_self') </script>";   
              }
              if ($type == "company") {
              echo "<script> window.open ('company.php' , '_self') </script>";
              }
             
}
else{
?>
<script type="text/javascript">
 alert(" اسم المستخدم أو كلمة المرور غير صحيحة  ");
</script>

<?php
header("Location:log.php");
    exit();

}
}
?>