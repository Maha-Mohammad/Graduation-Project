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
$rootpath = '/home/maha/Documents/company';
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
<!DOCTYBE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>صفحة الشركة</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>
    <link href="css/profile.css" rel="stylesheet">
</head>

<body>
    <a id="show-sidebar" class="btn btn-sm " href="includes/logout.php"> <i class='fas fa-sign-in-alt'></i></a>
    <div class="container emp-profile">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="img/company.jpg" alt="" class="img-fluid rounded" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5 class="text-capitalize text-right mb-5">
                        <?php echo $user_name ." "."_"." ";
                        for($i=0;$i<count($path);$i++){
                            if ( strpos($path[$i],$user_name) !== false ){
                                $xml=simplexml_load_file($path[$i]) or die("Error: Cannot create object");      
                                 echo $xml->Company->address; 
                                break;
                            }
                         }
                        ?>
                    </h5>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#about" role="tab" aria-selected="true">حول</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#reg" role="tab" aria-selected="false">معلومات شخصية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#add_c" role="tab" aria-selected="false">الاعلانات</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    تعديل
                </button>
                <a class="btn  btn-primary" href="http:\\localhost:8080">الانتقال الى صفحة البحث</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-right">
                <div class="profile-work ">
                    <p>للتواصل:</p>
                    <span class="d-block contact">ايميل: <a href="" class="">
                            <?php echo $email; ?>
                        </a> </span>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="about" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <p>
                                    <?php
                                       for($i=0;$i<count($path);$i++){
                                                if ( strpos($path[$i],$user_name) !== false ){
                                                    $xml=simplexml_load_file($path[$i]) or die("Error: Cannot create object");      
                                                     echo $xml->Company->description; 
                                                    break;
                                                }
                                        }
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="reg" role="tabpanel">
                        <div class="row text-right">
                            <div class="col-md-2 ">
                                <p>الايميل:</p>
                            </div>
                            <div class="col-md-10">
                                <p>
                                    <?php echo $email; ?>
                                </p>
                            </div>
                        </div>
                        <div class="row text-right">
                            <div class="col-md-2 ">
                                <p>رقم الهاتف:</p>
                            </div>
                            <div class="col-md-10">
                                <p>
                                    <?php echo $user_phone; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="add_c" role="tabpanel">
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="container">
                                <div class="card bg-wight">
                                    <article class="card-body text-right" style="max-width: 400px;">
                                        <a type="button" class="btn btn-lg btn-primary  " href="../company.php">
                                            اضافة اعلان
                                        </a>
                                        <a id="delete" href="delete" type="button" class="btn btn-lg btn-primary  " data-toggle="modal" data-target="#myModal1">
                                            حذف اعلان
                                        </a>
                                    </article>
                                </div> <!-- card.// -->
                            </div>
                            <!--container end.//-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Edit Profile-->
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">تعديل البيانات</h4>
                    <button type="button" class="close" data-dismiss="modal" style="margin-right:40vh;color:red;">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <div class="card bg-light">
                            <article class="card-body mx-auto">
                                <p class="error text-center"> </p>
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" name="myform" onsubmit="return myfun()">
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class='fas fa-eye-slash '></i> </span>
                                        </div>
                                        <input class="form-control" placeholder="كلمة السر القديمة " type="password" name="user_pass1">
                                    </div> <!-- form-group end.// -->
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class='fas fa-eye-slash '></i></span>
                                        </div>
                                        <input class="form-control" placeholder="كلمة السر الجديدة" type="password" name="user_pass2">
                                    </div> <!-- form-group end.// -->
                                    <input type="submit" class="btn btn-primary btn-block mt-4" value="تعديل" name="up">
                                </form>
                            </article>
                        </div> <!-- card.// -->
                    </div>
                    <!--container end.//-->
                </div>
            </div>
        </div>
    </div>
    <!-- end modal-->
    <div class="modal" id="myModal1">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">حذف الاعلان</h4>
                    <button type="button" class="close" data-dismiss="modal" style="margin-right:40vh;color:red;">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <div class="card bg-light">
                            <article class="card-body mx-auto">
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" name="myform">
                                    <div class="form-group input-group">
                                        <input autocomplete="off" class="form-control" placeholder="اسم الاعلان " type="text" name="addName">
                                    </div> <!-- form-group end.// -->
                                    <input type="submit" class="btn btn-primary btn-block mt-4" value="حذف" name="delete" id="delete">
                                </form>
                            </article>
                        </div> <!-- card.// -->
                    </div>
                    <!--container end.//-->
                </div>
            </div>
        </div>
    </div>
    <script src="js/profile.js"></script>
</body>

</html>
<?php 
$pass1="";
$pass2="";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['up'])) {
  $pass1 =$_POST["user_pass1"];
  $pass2 =$_POST["user_pass2"]; 
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
<?php
$name="";
 if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete']) ) {
 $name = $_POST["addName"];   
	// Use unlink() function to delete a file  
			 for($i=0;$i<count($path);$i++){
               if ( strpos($path[$i],$user_name) != false ){
                   if ( strpos($path[$i],$name) != false ){
					      if (!unlink($path[$i])) {  
                              ?>
<script>
    $(document).ready(function() {
        swal({
            title: "Error",
            text: "يوجد خطا بعملية الحذف",
            type: "error",
            confirmButtonColor: "#cc2121",
            confirmButtonText: "اغلاق",
            cancelButtonText: "Close",
        })
    });
</script>
<?php
                          }
					else {  
						?>
<script>
    $(document).ready(function() {
        swal({
            title: "ٍSuccess",
            text: "تم الحذف بنجاح",
            type: "success",
            confirmButtonColor: "green",
            confirmButtonText: "اغلاق",
            cancelButtonText: "Close",
        })
    });
</script>
<?php	 
					}  
						break;
				}
			}
             }
		 }
     ?>