<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>الصفحة الرئيسية </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            * {
              box-sizing: border-box;
                margin: 0;
                padding: 0;
                background-color: #f5f5f0;
            }
            .container-fluid{
                width: 100%;
            }
            .bar{
                list-style-type: none;
                margin: 0;
                padding: 0;          
                margin-top: 8px;
                width: 100%;                 
                height: 100%;
                overflow: hidden;
            }
            li {
             float: left;
             }
           .link{
                text-decoration: none;
                color: #00004d;
                display: block;
                text-align: center;
                float: left;
                direction: rtl;
                font-size: 22px;
                padding: 25px;
                padding-left:  25px;
               
            }
            #photo{
                width: 100%;
            }
            #photo:hover{
                opacity: 0.7;
            }
            .link:hover{
                cursor: pointer;
                color:#4775d1;
                text-decoration: none;
                float: left;
            }
            .title{
                float: right;
                font-size:50px;
                color:#4775d1;
                margin-top:10px;
               padding-right: 30px;
               
            }
            .icon{
                font-size:18px;
                color:#00004d;
                padding-left:10px;
                
            }
            .icon:hover{
              color:#4775d1;  
            }
            .social{
                color:  #00004d;
                padding-right: 20px;
                float: right;
                font-size: 25px;
                text-align: center
            }
            .list{
                text-align: center;
                margin-right: 450px;
                display: inline;
                overflow: visible;
                padding-top: 40px;
            }
            .saved{
               color: #4775d1;
                font-size: 20px;
                text-align: center;
                padding-top: 40px;
                display: block;
                position: static;
                overflow: visible;
            }
            .text{
                float: right;
                direction: rtl;
                font-size: 20px;
                color: white;
                display: block;
                text-align: right;
                background-color:  #00004d;
                border: 1px solid #4775d1;
                border-radius: 5px;
                padding: 10px;
                position: relative;
                overflow: auto;
                padding: 15px;
                
            }
            .box{
                position: absolute;
                top: 0;
                left: 0;
                height: 20px;
                line-height: 20px;
                color: white;
                width: 20px;
                background-color: #00004d;
                
            }
            .box:hover{
                cursor: pointer;
                color:  #4775d1;
            }
            .para{
               
                height: auto;
            }
            .fa {
                padding: 20px;
                font-size: 20px;
                width: 60px;
                text-align: center;
                text-decoration: none;
                margin: 1px 2px;
                border-radius: 50%;
            }

           .fa:hover {
               opacity: 0.9;
            }

           .fa-facebook {
               background: #3B5998;
               color: white;
            }
            .fa-linkedin {
               background: #007bb5;
               color: white;
            }

            .fa-youtube {
              background: #bb0000;
              color: white;
            }

            .fa-instagram {
              background: #125688;
              color: white;
            }
            .fa-snapchat-ghost {
             background: #fffc00;
             color: white;
             text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
            }
            .menu{
                list-style-type: none;
                float: left;
                margin-left: 480px;
                margin-top:80px;
                margin-bottom:80px;
                
            }
            .fa-google {
               background: #dd4b39;
               color: white;
            }
           
            .footer {
            background-color: lightgray;
            padding: 10px;
            text-align: center;
            height: 35px;
            position: fixed;
            
            left: 0;
            bottom: 0;
            width: 100%;
           
            }
            .footer p{
            background-color: lightgray;
            color: #4775d1;
            font-size: 16px;
            }
            
        </style>
        <script>
        $(document).ready(function(){
        $(".text").hide();
        $(".link1").click(function(){
        $(".text1").fadeIn(1000);
        });
        $(".link2").click(function(){
        $(".text2").fadeIn(1000);;
        });
        $(".box1").click(function(){
        $(".text1").fadeOut(1000);;
        }); 
        $(".box2").click(function(){
        $(".text2").fadeOut(1000);;
        });
           
        });
        </script>
    </head>
   
    <body>
        <div class="container-fluid">
    <header>
        <nav>
            <!-- the menu -->
          <ul class="bar">
              <li class="title">وظيفتك <sub>عنا</sub> </li>
              <li><a href="register/log.php"  class="link">تسجيل الدخول <i class='fas fa-user-circle icon'></i></a></li>
               <li><a href="#foot" class="link">تواصل معنا</a></li>  
              <li><a href="#users"  class="link link2">المستخدمون</a></li>
             <li><a href="#about" class="link link1">عن الموقع</a> </li>        
          </ul>
        </nav>
      
    </header>
    <img style = "height:420px;"id="photo" src="images/search1.jpg" class="img-thumbnail"/>
         <br><br> 
            <!-- the description text -->
        <div class="para">    
        <div id="about"></div>    
          <div class="text text1"><span class="box box1">x</span>   هذا الموقع مبني على علم استرجاع المعلومات وهو أحد العلوم الفرعية في نظام المعلومات ووظيفته الأساسية هي تخزين المعلومات واسترجاعها عن طريق البحث . حيث أن هذا الموقع للبحث عن الوظائف والموظفين باللغة العربية وكذلك عرض المعلومات والتواصل. </div>  
         <br><br><br><br><br>
            <div id="users"></div>
         <div class="text text2"><span class="box box2">x</span> لهذا الموقع نوعان أساسيان من المستخدمين  : <br>  الأول : الشركات(أو أي مؤسسة أو منظمة أو جامعة) لديها شاغر وظيفي وتبحث عن موظف حيث أنها ستقوم من خلال موقعنا بالبحث باللغة العربية عن موظف وذلك عن طريق ادخال المواصفات المطلوبة للموظف والمؤهلات الأكاديمية والمهارات والخبرات في حقل ادخال وسيرجع سير ذاتية مطابقة أو قريبة لهذه المواصفات . بداية يجب أن تملك هذه الشركة حساب وذلك عن طريق صفحة "انشاء حساب"  , ثم ستتمكن من البحث , اضافة الى ذلك ستضيف اعلان عن الحاجة الى موظف وعند ملئ الشاغر الوظيفي ستستطيع حذفه . وأيضا تغيير كلمة المرور الخاصة بها وعند الدخول الى الموقع سيعرض معلوماتها الخاصة وكذلك اعلاناتها <br><br>
        الثاني :  الموظفين (من يبحث عن وظيفة ولديه شهادة جامعية) حيث أنه سيقوم بعمل حساب عن طريق صفحة "انشاء حساب " كذلك وسيتمكن من البحث عن وظيفة عن طريق ادخال معلوماته ومؤهلاته في حقل ادخال وسيرجع اعلانات مطابقة أو قريبة من هذه المواصفات ومن ثم التقدم لهذه الوظيفة.اضافة الى ذلك عند تسجيل الدخول سيستعرض معلوماته الشخصية والأكاديمية والتي قام بادخالها من خلال صفحة السيرة الذاتية ويمكنه تعديلها او حذفها . وتغيير كلمة المرور والتواصل.       

            </div>

        </div>
        
         <br><br>   
           
            <!-- Footer -->
            <div id="foot"></div>
          
<footer class="page-footer font-small special-color-dark pt-2 mt-5">
<ul class="menu">
    
    <li ><a href="#" class="fa fa-facebook list"></a></li>
    <li ><a href="#" class="fa fa-linkedin list"></a></li>
    <li ><a href="#" class="fa fa-youtube list"></a></li>
    <li ><a href="#" class="fa fa-instagram list"></a></li>
    <li ><a href="#" class="fa fa-snapchat-ghost list"></a></li>
    <li><a href="#" class="fa fa-google list"></a></li> 
     </ul>
        <!--
    <br><br><br><br>
  <div class="footer-copyright text-center py-3 saved">© حقوق الطبع محفوظة 
    
  </div>-->
    </footer>
  <!-- Copyright -->  
    <br><br><br>
   <div class="footer">
    <p>وظيفتك عنا </p>
    </div> 
  



    </div>
  
    </body>
</html>

