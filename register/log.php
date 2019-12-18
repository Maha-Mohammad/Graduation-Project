<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>

    <title> تسجيل الدخول </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Almarai:400,700,800&display=swap&subset=arabic" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>
    
<style>
	body
{
	margin: 0;
	padding: 0;
	background-image: url('img/download.jpeg');
    height: 100%;
	background-size: cover;

	font-family:'Almarai', sans-serif;
    direction: rtl;
   
}
   
.login-box
{
	width: 320px;
	height: 420px;
	background-color: rgba(255, 255, 255, .25);
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
#header
{
text-align: center; 
margin: 20px;
color: #fff;
border-radius: 3px;
margin-bottom:25px;
font-weight: 700;
 
	
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
	margin-bottom: 22px;
	float: right;
	
}
.login-box input[type="text"] , input[type="password"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #4775d1;
	font-size: 20px;
	float: right;
	direction: rtl;
	background: #ffffffab;
    font-size:18
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
	background: #4775d1;

}
.login-box input[type="submit"]:hover
{
	cursor: pointer;
	background: #424546;
     color:#fff;

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
	color: black;
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
        
        font-size: 20px;
    }
    .fas{
       color: #4775d1;
        
    }
</style>

</head>

<body>
     <a id="show-sidebar" class="btn btn-sm " href="../index.php"> <i  class='fas fa-arrow-left'></i> </a>
<div class="container">
<div class="login-box">
	<img src="img/avatar.jpg" class="avatar">
	<div id="home-content-box-inner">
   
   

	<h2 id="header">تسجيل الدخول</h2>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<p class="text">البريد الالكتروني</p><br>
	<input type="text" name="email" placeholder="أدخل البريد الالكتروني" autocomplete="off">
	<p class="text">كلمة المرور</p><br>
	<input type="password" name="password" placeholder="أدخل كلمة المرور">
	<input type="submit" name="submit" value="تسجيل الدخول">
	

<div class="box-a">
	<a href="reg.php">أنشئ حساب</a>
</div>
	
</form>
    </div>	
</div>
</div>
</body>
</html>


<?php 

include "../register/includes/connect.php";
$email=$pass="";
$type="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["email"])){
  $email =$_POST["email"];}
  if(isset($_POST["password"])){
  $pass =$_POST["password"]; }
   

$sql = "SELECT * FROM users where user_email ='$email' and user_password='$pass'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$count= mysqli_num_rows($result);
if($count==1){
 
 

              $type=$row["user_status"];
              
              if ($type == "employee") {
				   $_SESSION["email"]=$email;
              echo "<script> window.open ('employee.php' , '_self') </script>";   
              }
              if ($type == "company") {
                   $_SESSION["email"]=$email;
               echo "<script> window.open ('profile.php' , '_self') </script>";
              }
             
}
else{
?>
<script>
    $(document).ready(function() {
        swal({
            title: "Error",
            text: "البيانات خاطئة",
            type: "error",
            confirmButtonColor: "#cc2121",
            confirmButtonText: "اغلاق",
            cancelButtonText: "Close",
        })
    });
</script>
<?php
}
}
?>
