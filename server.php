<?php
include 'config.php';
include 'libs/libs.php';
if(isset($_GET['id'])){
     $db = connection();

     $sql = "SELECT * FROM user WHERE  `id` = '{$_GET['id']}' ";
     $result = mysqli_query($db, $sql);
     $data = [];
     ksort($data);
     while ($row = mysqli_fetch_assoc($result)) {
          $data[] = $row;
     }
     mysqli_close($db);
     header("Content-Type: application/json");
     echo json_encode([
          'data' => $data,
     ]);
}