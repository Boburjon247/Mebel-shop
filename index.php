<?php
global $config;
include 'libs/libs.php';
include  'config.php';


$_SESSION['login'] = ' ';
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
     <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>css/style.css">
     <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>css/mediya.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>

<body>
     <div class="grid-bg ba-grid anim">
          <div class="inner">
               <div class="content content_reg">
                    <p class="lable_title">Login to Your Account</p>
                    <span class="lable_title2">Enter your username & password to login</span>
                    <form action="<?= url_login ?>" method="get" class="login_1 Tab_C">
                         <div class="form-group">
                              <input name="user" type="text" id="login" class="username" required="required">
                              <span for="username" class="text_uesr">Username</span>
                              <i class=" fa-regular fa-user user_regist"></i>
                         </div>
                         <div class="form-group">
                              <input name="parol" type="password" class="form-control password_login_reg" id="password" required="required">
                              <span for="password">Password</span>
                              <i class="fa-solid fa-lock pas_regist"></i>
                              <p class="eyes">
                                   <i class="eyes_regest fa-regular fa-eye-slash"></i>
                              </p>
                         </div>
                         <div class="regis_btn">
                              <button type="submit" name="loginBtn" id="btn_click_login" class="btn registration-btn">
                                   <span>Login</span>
                              </button>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</body>

<script src="<?= $config['base']['url'] . 'web/' ?>js/Jquery/jquery-3.6.4.min.js"></script>
<script src="<?= $config['base']['url'] . 'web/' ?>js/login.js"></script>


</html>