<?php 	session_start();?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome.min.css">
   
   

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark" style="background:url(admin/images/bg-01.jpg); background-size:cover" >

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
               <!-- <div class="login-logo">
                    <a href="MainForm.php">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>-->
                
                
              
                <div class="login-form" >
                    <form method="post" action="loginmanage.php">
                   <div align="center" >
                 <!-- <h4><center><i class="fa fa-lock"></i>   login</center></h4>-->
                 <img src="admin/images/login.png" class="loginicon">
                    </div>
                    <label>your User Id</label>
                        <div class="form-group input-group">
                             <span class="input-group-addon  input-sm"><i class="fa fa-user"></i></span>

                            <input type="text" class="form-control" placeholder="Enter your User id. . ." name="enrol" id="enrol" required>
                        </div>
                        <label>Password</label>
                            <div class="form-group input-group">
                                 <span class="input-group-addon  input-sm"><i class="fa fa-lock"></i></span>

                                <input type="password" class="form-control" placeholder="Password. . ." name="pass" id="pass" required>
                                
                        </div>
                                <div class="checkbox">
                                    <label>
                                <input type="checkbox"> Remember Me
                            </label>
                                    <label class="pull-right">
                                <a href="forget.php">Forgotten Password?</a>
                            </label>

                                </div>
                                <button type="submit" id="login" name="login" class="btn btn-success btn-flat m-b-30 m-t-30 btn-sh">Sign in</button>
                                <!--<div class="social-login-content">
                                   <<div class="social-button">
                                        <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                        <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                                    </div>
                                </div>-->
                                <!--<div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="registerpage.php"> Sign Up Here</a></p>
                                </div>-->
                                
                               
                    </form>
                    
                </div>
            </div>
        </div>
        
    </div>
    
    


    <script src="admin/vendors/jquery/dist/jquery.min.js"></script>
    <script src="admin/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="admin/assets/js/main.js"></script>


</body>

</html>
