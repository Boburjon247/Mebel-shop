<?php
global $config;
include  'config.php';
include 'libs/libs.php';
?>
<?php

if (GetAllustun('admin', 'login', $_GET['login'], 'parol', $_GET['password'])) {
     $_SESSION['login'] = 'active';
     echo json_encode([
          'status' => 200,
          'message' => "http://localhost/bekend/Mebel-shop/home.php"
     ]);
} else {
     echo json_encode([
          'status' => 404,
          'message' => "Login yoki parol xato qaytadan urunib ko'ring..."
     ]);
}

// if (isset($_POST['loginBtn'])) {
//      if (
//           (isset($_POST['user']) && !empty($_POST['user'])) &&
//           (isset($_POST['parol']) && !empty($_POST['parol']))
//      ) {
//           $login = $_POST['user'];
//           $password = $_POST['parol'];

//           if (getHasId('admin', ['login', 'parol'], [$login, $password], "AND id=1")) {
//                reflesh(url_home,'');
//           }
//           else{
//                reflesh(url,'');
//           }
//      }
// }
?>