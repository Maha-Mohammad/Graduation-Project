<!--- pathe of xml file -->
<?php

include 'includes/connect.php';
session_start();
if(isset($_SESSION['email'])){
$email=$_SESSION['email'];
$sql = "SELECT * FROM users where user_email ='$email'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$user_name= $row['user_name'];
$user_phone= $row['user_phone'];
$user_email=$row['user_email'];


    
$rootpath = '/home/maha/Documents/CV/';
$fileinfos = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootpath)
);
$path=array();
foreach($fileinfos as $pathname => $fileinfo) {
    if (!$fileinfo->isFile()) continue;
    array_push($path,$pathname);
   
   
}
}
 else  
 {  
      header("location:log.php");  
 }

?>





<html>

<head>
<title>
employee profile
</title>
<link rel="stylesheet" type="text/css" href="employee.css">.
<meta charset="UTF-8">
<meta name="description" content="this is employee profile that show ll information about employee">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body >

<div class="topNavigationBar">
  <a  href="../index.php"> الرئيسية <i class="fa fa-home"></i> </a>
  <a  href="http:\\localhost:8080" > بحث <i class="fa fa-search"></i> </a>
  <a href="#settings" onclick= "document.getElementById('id01').style.display='block'">اعدادات </a>
  <a href="../resume.php"> cv اضافة</a>
  <a id="deletecv" href="#deletecv"> cv حذف  <i class="fa fa-trash"></i> </a>
  <a href="includes/logout.php"> تسجيل الخروج </a>
  
  <script>
	$(document).ready(function(){
		$('#deletecv').click(function(){
			var clickBtnValue = $(this).val();
			var ajaxurl = 'employee.php',
			data =  {'action': 'DCV'};
			$.post(ajaxurl, data, function (response) {
				// Response div goes here.
				alert("CV deleted successfully");
				$('#education').html("");
				$('#experience').html("");
				$('#skills').html("");
			});
		});
	});
  </script>
  
  <?php
	// Use unlink() function to delete a file  
	 if (isset($_POST['action'])) {
		  if ($_POST['action'] = "DCV") {
			for($i=0;$i<count($path);$i++){
				if ( strpos($path[$i],$user_phone) !== false ){
					if (!unlink($path[$i])) {  
						//echo ("$file_pointer cannot be deleted due to an error");  
					}  
					else {  
						//echo ("$file_pointer has been deleted");  
					}  
						break;
				}
			}
		 }
	}
  ?>
</div>



<div id="id01" class="modal">
  
  <form class="modal-content animate" method="POST"  action="<?php echo $_SERVER['PHP_SELF'];?>" name="myform" onsubmit="return myfun()">
    <div class="imgcontainer">
	 <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/avatar.jpg" alt="Avatar" class="avatar">
    </div>

     

    <div class="container">
      <label for="psw1" ><b > old password </b></label>
      <input type="password" placeholder="Enter Password" name="psw1" required>
      

      <label  for="psw"><b> new password </b></label>
      <input type="password" placeholder="Enter  new Password" name="psw" required>
     
   
      <button type="submit1" style="
      background-color: #0000ff;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;">Update</button>
      
  
 <div class="container" style="background-color:#f1f1f1  width:80%" >
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">cancel</button>
       </div> 
	    

    </div>
  </form>
</div>

<?php 
$pass1="";
$pass2="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $pass1 =$_POST["psw1"];
  $pass2 =$_POST["psw"]; 
 $sql1 = "SELECT * FROM users where user_email ='$email' and user_password ='$pass1' ";
 $result1 = $conn->query($sql1);

 $count= mysqli_num_rows($result1);
    
  if ($count == 1){
       $sql2 = "UPDATE users SET user_password='$pass2'  WHERE user_email='$email'";
      $conn->query($sql2);
    
      
  }
    else{
       
?>
    <script>
    $(document).ready(function() {
    swal({
      title: "Error",
      text: "كلمة المرور خاطئة",
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




<script>

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>


<section>
  <nav>
    <p  name =name style="font-size:20px  ;color:blue; text-align:center ;padding-buttom:5px;" ><i class="fa fa-fw fa-user"></i><?php echo$user_name.'<br>';?></p>
  <!--- for profile image -->

  
</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div id="profile-container">
   
	<?php
		print ("<img id='profileImage' src='uploads/$user_phone.jpg' />");
	?>
</div>
<br><br>
<form action="upload.php" method="post" enctype="multipart/form-data">
 
    <input style="font-size:18px;color:#0000ff;" type="file" name="fileToUpload" id="fileToUpload"><br>
	<?php
		print ("<input type = 'hidden' name='userPhone' value ='$user_phone' id='userPhone'>");
	?>
    <input style="font-size:18px;color:#0000ff;" type="submit" value="Upload Image" name="submit">
</form>
  </nav>
  	
  <article>
<div class ="information" >
<!--name-->
<?php
  for($i=0;$i<count($path);$i++){
                                                if ( strpos($path[$i],$user_phone) !== false ){
                                                    $xml=simplexml_load_file($path[$i]) or die("Error: Cannot create object");													
  echo  $xml->personalInformation->name  ; break;}}?> <p style="background-color:#ccd9ff;  text-color:blue;text-align:right ; font-size:20px; display:inline;"><i class="fa fa-fw fa-user"></i></br> </p>
  
  <!--phone number-->
<?php echo $user_phone;?><p style="background-color:#ccd9ff;  text-align:right ; font-size:20px; display:inline;"><i class="fa fa-fw fa-phone"></i></br> </p>

<!--address -->
<?php
  for($i=0;$i<count($path);$i++){
                                                if ( strpos($path[$i],$user_phone) !== false ){
                                                    $xml=simplexml_load_file($path[$i]) or die("Error: Cannot create object");													
  echo  $xml->personalInformation->address  ; break;}}
										?><p style="background-color:#ccd9ff;text-align:right ; font-size:20px; display:inline;"><i class="fa fa-fw fa-home"></i></br> </p>

<!--birthday-->
<?php
  for($i=0;$i<count($path);$i++){
                                                if ( strpos($path[$i],$user_phone) !== false ){
                                                    $xml=simplexml_load_file($path[$i]) or die("Error: Cannot create object");													
  echo  $xml->personalInformation->birthDate  ; break;}}
										?><p style="background-color:#ccd9ff;text-align:right ; font-size:20px; display:inline;"><i class="fa fa-fw 		far fa-calendar"></i></br> </p>


<!--email-->
<?php echo $user_email;?><p style="background-color:#ccd9ff;  text-align:right ; font-size:20px; display:inline;"><i class="fa fa-fw fas fa-envelope"></i></br> </p>
<!--facebook-->
	<a href	=<?php
  for($i=0;$i<count($path);$i++){
                                                if ( strpos($path[$i],$user_phone) !== false ){
                                                    $xml=simplexml_load_file($path[$i]) or die("Error: Cannot create object");													
  echo  $xml->personalInformation->links  ; break;}}
										?>>Facebook<p style="background-color:#ccd9ff;text-align:right ; font-size:20px; display:inline;"><i class="fa fa-fw 			fas fa-globe"></i></br> </p></a>
</div>
<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'education')" href="#about" role="tab" select="true ">المؤهلات العلمية</button>
  <button class="tablinks" onclick="openTab(event, 'experience')"  href="#about" role="tab" aria-selected="false">الخبرات</button>
  <button class="tablinks" onclick="openTab(event, 'skills')"  href="#about" role="tab" aria-selected="false ">المهارات</button>
</div>

<div id="education" class="tabcontent" style=display:block>
  
   <p>
                                  <?php
                                       for($i=0;$i<count($path);$i++){
                                                if ( strpos($path[$i],$user_phone) !== false ){
                                                    $xml=simplexml_load_file($path[$i]) or die("Error: Cannot create object");													
                                                     echo $xml->Education->phD . '<br>';
													 echo $xml->Education->MSc . '<br>';
													 echo $xml->Education->BSc . '<br>';
                                                    break;

                                                }
                                        }
                                    ?>

                                    
                                </p>
</div>

<div id="experience" class="tabcontent">
 <p>
                                  <?php
                                       for($i=0;$i<count($path);$i++){
                                                if ( strpos($path[$i],$user_phone) !== false ){
                                                    $xml=simplexml_load_file($path[$i]) or die("Error: Cannot create object");      
                                                     echo $xml->Experience; 
                                                    break;

                                                }
                                        }
                                    ?>

                                    
                                </p>
</div>

<div id="skills" class="tabcontent">
<p>
                                  <?php
                                       for($i=0;$i<count($path);$i++){
                                                if ( strpos($path[$i],$user_phone) !== false ){
                                                    $xml=simplexml_load_file($path[$i]) or die("Error: Cannot create object");      
                                                     echo $xml->Skills; 
                                                    break;

                                                }
                                        }
                                    ?>

                                    
                                </p>
</div>
<!--- for tabs -->
<script>
function openTab(evt, TabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(TabName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
  </article>
</section>
<div style="background-color:#ccc;">
<br><br><br>
</div>

<footer>
  <p>وظيفتك عنا </p>
</footer>



</body>






</html>