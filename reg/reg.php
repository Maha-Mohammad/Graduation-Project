<!DOCTYBE html>
    <html>

    <head>
        <meta charset="utf-8">
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
        <link rel="stylesheet" href="css/reg1.css">
    </head>

    <body>
        <div id="home">
            <div id="home-cover" class="bg-parallax img-fluid ">
                <div id="home-content-box">
                    <div id="home-content-box-inner">
                        <a id="show-sidebar" class="btn btn-sm " href="../index.php"> <i class="fas fa-arrow-left"></i> </a>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-8 col-lg-6 pb-5">
                                    <!--Form with header-->
                                    <form action="includes/getreg.php" method="POST" name="myform" onsubmit="return myfun()">
                                        <div class="card ">
                                            <div class="  text-center py-2 login1">
                                                <h3 style="font-size:40px">انشاء حساب</h3>
                                                <p class="error"> </p>
                                                   <?php  
                                                    if(isset($_GET['error']))  
                                                    {  

                                                    echo " <p class='error'>"."للاسف هذا الايميل مستخدم "."</p>";					 
                                                    }  
                                                    ?>
                                            </div>

                                            <div class="card-body p-3">
                                                <!--Body-->
                                                <div class="form-group mt-2">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa fa-user "></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" name="user_name" placeholder="اسم المستخدم" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class='fas fa-eye'></i>
                                                                </i></div>
                                                        </div>
                                                        <input type="password" class="form-control" name="pass1" placeholder="كلمة المرور">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class='fas fa-eye-slash '></i></div>
                                                        </div>
                                                        <input type="password" class="form-control" name="pass2" placeholder="تأكيد كلمة المرور">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa fa-envelope "></i></div>
                                                        </div>
                                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="البريد الالكتروني" autocomplete="off"> 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class='fas fa-phone '></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" name="user_phone" placeholder="رقم الهاتف" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="form-group text-secondary txt">
                                                    <div class="input-group mb-2 ml-5">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class='fas fa-venus ' style="font-size: 23px"></i></div>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" class="custom-control-input" id="customRadio1" value="employee" name="user_status">
                                                            <label class="custom-control-label" for="customRadio1">موظف</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" class="custom-control-input" id="customRadio2" name="user_status" value="company">
                                                            <label class="custom-control-label" for="customRadio2">شركة</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <input type="submit" value="انشاء" class="btn rounded-9 py-2" name="reg">
                                                </div>
                                            </div>
                                    </form>
                                    <!--Form with header-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/reg1.js"></script>
    </body>

    </html>