<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>معلومات الشركات </title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="style.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <style type="text/css">
  	<style type="text/css">
  	.container{
  		width: 100%;
        margin-left: 100px}
    
      .title{
          
          
          max-width: 200px;
          margin-left: 600px;
      }
      .lab{
          color:#00004d;
      }
      
    </style>

  	
  </style>
</head>
<body>

<h1 class="title animated pulse delay-.3s">إعلان الوظيفة   </h1>

<div class="container">
	<span class="enter animated rubberBand delay-.5s">إن كنت تريد اعلان وظيفة عبر موقعنا , قم/ي بإدخال المعلومات المطلوبة <i class='far fa-smile' style='font-size:24px;'></i> </span>
<br><br><br><br><br>

	<form class="form-horizontal" action="company.php" method="post">
        
       <div class="form-group">
		   <label for="comName" class="lab col-sm-2 control-label animated zoomIn delay-.3s ">اسم الشركة  </label>
		   <div class="col-sm-10">
		     <input type="text" class="form-control input-lg "  name="comName" id="comName" required autocomplete="off" >
		   </div> 
		</div>    

		 <div class="form-group">
		   <label for="address" class="lab col-sm-2 control-label animated zoomIn delay-.3s ">عنوان الشركة  </label>
		   <div class="col-sm-10">
		     <input type="text" class="form-control input-lg "  name="comAddress" id="address" required autocomplete="off" >
		   </div>     
	    </div>

	    <div class="form-group">
		   <label for="email" class="lab col-sm-2 control-label animated zoomIn delay-.3s ">ايميل الشركة   </label>
		   <div class="col-sm-10">
		     <input type="text" class="form-control input-lg "  name="email" id="email" required autocomplete="off" >
		   </div>     
	    </div>
    
	<div class="form-group"> 
		<label for="desc" class="lab col-sm-2 control-label animated zoomIn delay-.3s">  وصف الشركة </label>
		 <div class="col-sm-10">
           <textarea class="form-control input-lg" cols="40" rows="3" name="desc" id="desc"></textarea>
        </div>
    </div>
        <hr><br>
        <div class="form-group">
		   <label for="name" class="lab col-sm-2 control-label animated zoomIn delay-.3s ">اسم الوظيفة  </label>
		   <div class="col-sm-10">
		     <input type="text" class="form-control input-lg "  name="jobName" id="name" required autocomplete="off" >
		   </div>     
	    </div>
        <div class="form-group"> 
		<label for="description" class="lab col-sm-2 control-label animated zoomIn delay-.3s">  وصف عن الوظيفة  </label>
		 <div class="col-sm-10">
           <textarea class="form-control input-lg" cols="40" rows="3" name="jobDesc" id="decription"></textarea>
        </div>
    </div>
        <div class="form-group">
		   <label for="type" class="lab col-sm-2 control-label animated zoomIn delay-.3s ">نوع التوظيف   </label>
		   <div class="col-sm-10">
		     <input type="text" class="form-control input-lg "  name="type" id="type"  autocomplete="off" >
		   </div> 
		</div> 
        
        <div class="form-group">
		   <label for="hours" class="lab col-sm-2 control-label animated zoomIn delay-.3s ">ساعات العمل   </label>
		   <div class="col-sm-10">
		     <input type="text" class="form-control input-lg "  name="hours" id="hours" autocomplete="off" >
		   </div> 
		</div> 
        <hr><br>
        <div class="form-group">
		   <label for="level" class="lab col-sm-2 control-label animated zoomIn delay-.3s ">مستوى التعليم  </label>
		   <div class="col-sm-10">
		     <input type="text" class="form-control input-lg "  name="level" id="level"  autocomplete="off" >
		   </div> 
		</div> 
        
        <div class="form-group">
		   <label for="exper" class="lab col-sm-2 control-label animated zoomIn delay-.3s ">عدد سنوات الخبرة </label>
		   <div class="col-sm-10">
		     <input type="text" class="form-control input-lg "  name="exper" id="exper" autocomplete="off" >
		   </div> 
		</div> 
        <br>
        <div class="form-group"> 
		<label for="skill" class="lab col-sm-2 control-label animated zoomIn delay-.3s">  المهارات </label>
		 <div class="col-sm-10">
           <textarea class="form-control input-lg" cols="40" rows="3" name="skill" id="skill"></textarea>
        </div>
    </div>

    <br><br>
   <input type="submit" name="submit" class="button btn btn-primary" >
	</form>
<br><br> 

	</div>
	

</body>
</html>
<?php
$comName = isset($_POST['comName']) ? $_POST['comName'] : '';
$comAddress = isset($_POST['comAddress']) ? $_POST['comAddress'] : '';
$comEmail = isset($_POST['email']) ? $_POST['email'] : '';
$comDescription = isset($_POST['desc']) ? $_POST['desc'] : '';

$jobName = isset($_POST['jobName']) ? $_POST['jobName'] : '';
$jobDesc = isset($_POST['jobDesc']) ? $_POST['jobDesc'] : '';
$type = isset($_POST['type']) ? $_POST['type'] : '';
$hours = isset($_POST['hours']) ? $_POST['hours'] : '';

$level = isset($_POST['level']) ? $_POST['level'] : '';
$exper = isset($_POST['exper']) ? $_POST['exper'] : '';
$skill = isset($_POST['skill']) ? $_POST['skill'] : '';
    
if (isset($_POST['submit'])) {
   
$xml = new DomDocument("1.0","utf-8");
$xml->formatOutput = true;
$xml->preserveWhiteSpace = true;
$advertisement = $xml->createElement("Advertisement");
$xml->appendChild($advertisement);

$company = $xml->createElement("Company");
$advertisement->appendChild($company);

$job = $xml->createElement("Job");
$advertisement->appendChild($job);

$employee = $xml->createElement("Employee");
$advertisement->appendChild($employee);
//company       
$companyName = $xml->createElement("name" , $comName);
$company->appendChild($companyName);
    
$companyAddress = $xml->createElement("address" , $comAddress);
$company->appendChild($companyAddress);
    
$companyEmail = $xml->createElement("email" , $comEmail);
$company->appendChild($companyEmail);
    
$companyDesc = $xml->createElement("description" , $comDescription);
$company->appendChild($companyDesc);
 //job   
$jobN = $xml->createElement("name" , $jobName);
$job->appendChild($jobN);
    
$jobD = $xml->createElement("description" , $jobDesc);
$job->appendChild($jobD);
    
$jobType = $xml->createElement("type" , $type);
$job->appendChild($jobType);
    
$jobH = $xml->createElement("hours" , $hours);
$job->appendChild($jobH);
//employee
$lev = $xml->createElement("education" , $level);
$employee->appendChild($lev);

$number = $xml->createElement("experience" , $exper);
$employee->appendChild($number);
    
$skills = $xml->createElement("skill" , $skill);
$employee->appendChild($skills);

//echo "<xmp>". $xml->saveXML() . "</xmp>";

$xml->save("/home/maha/Documents/company/$comName$jobName.xml");

 

}


?>
