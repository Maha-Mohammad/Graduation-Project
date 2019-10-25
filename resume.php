<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>السيرة الذاتية </title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="style.css" type="text/css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">



</head>


<body>

<h1 class="title animated slideInDown delay-.5s">انشاء سيرة ذاتية </h1>

<div class="container">

<span class="enter animated bounceInLeft delay-.1s">الرجاء إدخال المعلومات المطلوبة في الحقول أدناه <i class='far fa-grin-beam' style='font-size:24px;'></i> </span><br><br><br>



<form action="resume.php" method="post" class="form-horizontal" >

	

	<h2 class="names">المعلومات الشخصية : </h2><br><br><br><br><br>

	<div class="form-group">

		   <label for="myName  " class="lab col-sm-1 control-label animated zoomIn delay-.3s ">الاسم </label>

		   <div class="col-sm-11">

		     <input type="text" class="form-control input-lg "  name="namee" id="myName" required placeholder="الاسم الثلاثي أو الرباعي " autocomplete="off" >

		   </div>     

	</div>



	<div class="form-group">

		   <label for="add" class="lab col-sm-1 control-label animated zoomIn delay-.3s">العنوان </label>

		   <div class="col-sm-11">

      <input type="text" class="form-control input-lg" name="address" id="add" required autocomplete="off"  >

           </div>

	</div>



	<div class="form-group">

		   <label for="phone" class="lab col-sm-1 control-label animated zoomIn delay-.3s ">رقم الجوال  </label>

		   <div class="col-sm-11">

      <input type="text" class="form-control input-lg " name="phone" id="phone" required autocomplete="off" >

           </div>

	</div>



	<div class="form-group">

		   <label for="email" class="lab col-sm-1 control-label animated zoomIn delay-.3s " >البريد الالكتروني   </label>

		   <div class="col-sm-11">

      <input type="email" class="form-control input-lg" name="email" id="email" required autocomplete="off" >

           </div>

	</div>



	<div class="form-group">

		   <label for="bDate" class="lab col-sm-1 control-label animated zoomIn delay-.3s">تاريخ الميلاد  </label>

		   <div class="col-sm-11">

      <input type="date" class="form-control input-lg" name="bDate" id="bDate">

           </div>

	</div>



	<div class="form-group">

		   <label for="links" class="lab col-sm-1 control-label animated zoomIn delay-.3s">مواقع التواصل الاجتماعي  </label>


<div class="col-sm-11">

 <textarea class="form-control input-lg" cols="40" rows="2" name="link"  placeholder="رابط أو اسم الصفحة"></textarea>

</div>

	</div>

	<br><br>

  <h2 class="names animated zoomIn delay-.3s">المؤهلات الأكاديمية :  </h2><br><br><br><br>
  <!--
	 <div class="form-group"> 

       <textarea class="form-control input-lg" cols="40" rows="4" name="qualification" required placeholder="الدرجة التي حصلت عليها , اسم الجامعة أو الكلية , سنوات الدراسة "></textarea>

     </div>  

-->
    <div class="form-group">

		   <label for="phD" class="lab col-sm-1 control-label animated zoomIn delay-.3s ">درجة الدكتوراة  </label>

		   <div class="col-sm-11">

      <input type="text" class="form-control input-lg " name="phD" id="phD"  autocomplete="off" >

           </div>

	</div>
    
     <div class="form-group">

		   <label for="MSc" class="lab col-sm-1 control-label animated zoomIn delay-.3s "> درجة الماجستير </label>

		   <div class="col-sm-11">

      <input type="text" class="form-control input-lg " name="MSc" id="MSc"  autocomplete="off" >

           </div>

	</div>
    
     <div class="form-group">

		   <label for="BSC" class="lab col-sm-1 control-label animated zoomIn delay-.3s ">  درجة البكالوريوس</label>

		   <div class="col-sm-11">

      <input type="text" class="form-control input-lg " name="BSc" id="BSc" autocomplete="off" >

           </div>

	</div>
    
    



      <h2 class="names animated zoomIn delay-.3s"> الخبرات والدورات  :  </h2><br><br><br><br>

	 <div class="form-group"> 

       <textarea class="form-control input-lg" cols="40" rows="6" name="experts" placeholder = " اسم الشركة أو المؤسسة وعدد سنوات الخبرة , الدورات التي أخذتها (ان يوجد)."></textarea>

     </div> 





      <h2 class="names animated zoomIn delay-.3s">المهارات :   </h2><br><br><br><br>

	 <div class="form-group"> 

       <textarea class="form-control input-lg" cols="40" rows="4" name="skills" placeholder="البرامج أو اللغات التي تتقنها مثلا "></textarea>

     </div>

     <br>

     <input type="submit" name="submit" class="button btn btn-primary" >


</form>

</div>

</body>

</html>

<?php
$name = isset($_POST['namee']) ? $_POST['namee'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$birthDate = isset($_POST['bDate']) ? $_POST['bDate'] : '';
$link =  isset($_POST['link']) ? $_POST['link'] : '';
$doc =  isset($_POST['phD']) ? $_POST['phD'] : '';
$mas =  isset($_POST['MSc']) ? $_POST['MSc'] : '';
$bcha =  isset($_POST['BSc']) ? $_POST['BSc'] : '';
//$edu = isset($_POST['qualification']) ? $_POST['qualification'] : '';
$expert = isset($_POST['experts']) ? $_POST['experts'] : '';
$skill = isset($_POST['skills']) ? $_POST['skills'] : '';

if (isset($_POST['submit'])) {
$xml = new DomDocument("1.0","utf-8");
$xml->formatOutput = true;
$xml->preserveWhiteSpace = false;
$employee = $xml->createElement("employee");
$xml->appendChild($employee);
$personal = $xml->createElement("personalInformation");
$employee->appendChild($personal);

$empName = $xml->createElement("name" , $name);
$personal->appendChild($empName);

$empAddress = $xml->createElement("address" , $address);
$personal->appendChild($empAddress);

$empPhone = $xml->createElement("phone" , $phone);
$personal->appendChild($empPhone);

$empEmail = $xml->createElement("email" , $email);
$personal->appendChild($empEmail);

$empDate = $xml->createElement("birthDate" , $birthDate);
$personal->appendChild($empDate);

$links = $xml->createElement("links" , $link);
$personal->appendChild($links);

$educa = $xml->createElement("Education");
$employee->appendChild($educa);
//$education = $xml->createElement("Education" , htmlspecialchars($edu));
//$xml->appendChild($education);
$phd = $xml->createElement("phD" , $doc);
$educa->appendChild($phd);

$master = $xml->createElement("MSc" , $mas);
$educa->appendChild($master);
    
$bch = $xml->createElement("BSc" , $bcha);
$educa->appendChild($bch);
    
$experience = $xml->createElement("Experience" , htmlspecialchars($expert));
$employee->appendChild($experience);

$skills = $xml->createElement("Skills" , htmlspecialchars($skill));
$employee->appendChild($skills);

//echo "<xmp>". $xml->saveXML() . "</xmp>";
$xml->save("/home/maha/Documents/CV/السيرة الذاتية$phone.xml");

}
?>
