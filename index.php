<?php
global $config;
include 'libs/libs.php';
include  'config.php';
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
                    <form action="" method="post" class="login_1 Tab_C">
                         <div class="form-group">
                              <input name="user" type="text" class="username" required="required">
                              <span for="username" class="text_uesr"">Username</span>
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
                         <div class="form-group form-group3">
                              <label for="checkbox">
                                   <input type="checkbox" id="checkbox" class="checkbox_regist">
                                   <p>Remember me</p>
                              </label>
                         </div>
                         <div class="regis_btn">
                              <button type="submit" name="loginBtn" class="btn registration-btn">
                                   <span>Login</span>
                              </button>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</body>

<script src="<?= $config['base']['url'] . 'web/' ?>js/login.js"></script>

</html>


<?php
if (isset($_POST['loginBtn'])) {
     if (
          (isset($_POST['user']) && !empty($_POST['user'])) &&
          (isset($_POST['parol']) && !empty($_POST['parol']))
     ) {
          $login = $_POST['user'];
          $password = $_POST['parol'];

          if (getHasId('admin', ['login', 'parol'], [$login, $password], "AND id=1")) {
               // $_SESSION['login'] = 'system';
               reflesh(url_home,'');
          }
     }
}

?>