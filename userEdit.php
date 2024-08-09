<?php
global $config;
include  'config.php';
include 'libs/libs.php';

?>

<?php if ($_SESSION['login'] === 'active') { ?>
     <?php
     if (isset($_POST['id']) && !empty($_POST['id'])) {
          $_SESSION['id'] = $_POST['id'];
     }
     if (isset($_POST['user_id_delete'])) {
          if (getItemsDelet('user', 'id', [$_SESSION['id']])) {
               reflesh(url_home, '');
          }
     }
     ?>
     <!DOCTYPE html>
     <html lang="en">

     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Mebel || Admin</title>

          <!-- awesome -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
          <!-- bootstrap -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          <!-- google font -->
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
          <!-- style -->
          <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>css/style.css">
          <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>css/mediya.css">
     </head>

     <body>
          <!-- loading -->
          <!-- <div class="loading">
          <div class="page">
               <div class="logo-wrapper">
                    <svg id="logo" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500"
                         style="enable-background:new 0 0 500 500;" xml:space="preserve">

                         <rect class="whitebg-alp" id="preload_bar" x="20" y="490" class="line_icon line_icon_thin"
                              width="460" height="460" />

                         <path id="dark_x5F_bg" class="blackbg" d="M0.5,0.5v499h499V0.5H0.5z M482.03,467.96c0,1.76-1.19,1.54-1.19,1.54s-457.1,0-461.69,0
                  c0,0-1.19,0.22-1.19-1.54c0-6.12-0.02-27.86-0.02-29.47c0-0.94,0.16-2.4,0.48-3c4.06-7.93,197.62-384,197.62-384h0.01
                  c6.27-12,19.18-21,33.88-21h0.16c14.69,0,27.6,9,33.86,21h0.02c0,0,193.56,376.08,197.62,384.01c0.32,0.6,0.48,1.95,0.48,2.89
                  C482.06,440.01,482.03,461.84,482.03,467.96z" />

                         <path id="logo" class="whitebg" d="M283.96,52h-0.02c-6.26-12-19.17-21-33.86-22h-0.16c-14.7,1-27.61,10-33.88,22h-0.01
                  c0,0-193.56,375.83-197.62,383.76c-0.31,0.6-0.48,1.86-0.48,2.8c0,1.61,0.02,23.55,0.02,29.67c0,1.76,1.19,1.77,1.19,1.77
                  c4.6,0,461.69,0,461.69,0s1.19-0.03,1.19-1.79c0-6.12,0.03-27.99,0.03-29.6c0-0.94-0.16-2.21-0.48-2.81
                  C477.52,427.88,283.96,52,283.96,52z M366.25,437.3l-56.55-109.52L250,442.86l0-0.01l0,0.01l-59.7-115.07l-56.55,109.36L53.47,437
                  l0,0h-0.01l132.8-257.71l0,0.08l0,0.03L250,298.74l63.73-119.3l132.8,257.87L366.25,437.3z" />

                    </svg>
               </div>
          </div>
     </div> -->


          <section class="container-fluid section active">

               <!-- bat_top -->

               <div class="row bat_top">
                    <div class="col-2 left_bat_top">
                         <div class="logo">
                              <a href="#">Admin <b style="color: orange;">.</b></a>
                         </div>
                    </div>
                    <div class="col-xl-10 right_bar_row">
                         <div class="bar_content_top">
                              <div class="bar_left">
                                   <div class="btn_bar_close">
                                        <i class="fa-solid fa-bars"></i>
                                   </div>
                                   <p class="date_title"></p>
                              </div>
                              <div class="bar_right">
                                   <div class="btn_ring">
                                        <i class="fa-regular fa-bell"></i>
                                        <span>0</span>
                                   </div>
                                   <div class="user">
                                        <div class="img">
                                             <img src="<?= $config['base']['url'] . 'web/' ?>img/User_icon_2.svg.png" alt="">
                                        </div>
                                        <div class="user_name">
                                             <p>Boburjon</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>

               <!-- body_content -->

               <div class="body_content user_edit">

                    <!-- right_content -->

                    <div class="right_content">

                         <!-- items_window 2 -->

                         <div class="items_window">
                              <?php foreach (GetAll('user', $_SESSION['id'], '') as $key => $user) : ?>
                                   <form action="" method="post" class="cilent-add">
                                        <div class="cilent-item cilent-item_img">
                                             <div class="cilent_img">
                                                  <img src="<?= $config['base']['url'] . 'web/' ?>img/User_icon_2.svg.png" alt="">
                                             </div>
                                        </div>
                                        <div class="cilent-item">
                                             <label for="">Ism :</label>
                                             <input value="<?= $user['ism'] ?>" name="ism" type="text" placeholder="Ism:">
                                        </div>
                                        <div class="cilent-item">
                                             <label for="">Familya :</label>
                                             <input value="<?= $user['fam'] ?>" name="fam" type="text" placeholder="Familya">
                                        </div>
                                        <div class="cilent-item">
                                             <label for="">Telefon raqami1</label>
                                             <input value="<?= $user['tel1'] ?>" name="tel1" type="text" placeholder="Telefon raqami1">
                                        </div>
                                        <div class="cilent-item">
                                             <label for="">Telefon raqami2</label>
                                             <input value="<?= $user['tel2'] ?>" name="tel2" type="text" placeholder="Telefon raqami2">
                                        </div>
                                        <div class="cilent-item">
                                             <label for="">Viloyat</label>
                                             <input value="<?= $user['viloyat'] ?>" name="viloyat" type="text" placeholder="Viloyat">
                                        </div>
                                        <div class="cilent-item">
                                             <label for="">Tuman</label>
                                             <input value="<?= $user['tuman'] ?>" name="tuman" type="text" placeholder="Tuman">
                                        </div>
                                        <div class="cilent-item">
                                             <label for="">Manzil</label>
                                             <input value="<?= $user['manzil'] ?>" name="manzil" type="text" placeholder="Manzil">
                                        </div>
                                        <div class="cilent-item">
                                             <label for="">Maxsulot nomi</label>
                                             <input value="<?= $user['maxsulotNomi'] ?>" name="m_nomi" type="text" placeholder="Maxsulot nomi">
                                        </div>
                                        <div class="cilent-item cilent-item-date">
                                             <label for="">
                                                  <span>Muddat</span>
                                                  <span>
                                                       <!-- .slideThree -->
                                                       <div class="slideThree">
                                                            <input type="checkbox" value="None" id="slideThree" name="check" />
                                                            <label for="slideThree"></label>
                                                       </div>
                                                       <!-- end .slideThree -->
                                                  </span>
                                             </label>
                                             <div class="cilent-item-date-input">
                                                  <input value="<?= $user['miqdorSum'] ?>" name="miqdor" class="input_chek" type="text" placeholder="Miqdori" readonly>
                                                  <input value="<?= $user['sanaQarz'] ?>" name="qarz_vaqt" class="input_chek" type="date" placeholder="Vaqti" readonly>
                                                  <input type="hidden" value="<?= $user['sana3oy'] ?>" name="sana3oy">
                                                  <input type="hidden" value="<?= $user['date'] ?>" name="date">
                                             </div>
                                        </div>
                                        <div class="btn_cilent">
                                             <button type="submit" name="cilentEdit" class="cilent_add_btn">Saqlash</button>
                                        </div>

                                   </form>
                              <?php endforeach; ?>

                         </div>

                    </div>
               </div>
          </section>



          <!-- script -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
          <script>
               const check = document.querySelector('#slideThree');
               const input_chek = document.querySelectorAll('.input_chek')

               check.addEventListener('click', (e) => {
                    if (check.checked == true) {
                         input_chek.forEach(element => {
                              element.removeAttribute('readonly')
                         });
                    } else {
                         input_chek.forEach(element => {
                              element.setAttribute("readonly", "readonly");
                         });

                    }
               });
               // bugingi sana
               function formatDate(date) {
                    const year = date.getFullYear();
                    const month = String(date.getMonth() + 1).padStart(2, '0');
                    const day = String(date.getDate()).padStart(2, '0');
                    return `${year}-${month}-${day}`;
               }

               const today = new Date();

               const date_title = document.querySelector('.date_title');

               date_title.innerHTML = formatDate(today);
          </script>
          <!-- bootstrap -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

     </body>

     </html>

     <?php

     // cilent malumotlarini yangilash
     if (isset($_POST['cilentEdit'])) {
          if (
               (isset($_POST['ism']) && !empty($_POST['ism'])) &&
               (isset($_POST['fam']) && !empty($_POST['fam'])) &&
               (isset($_POST['tel1']) && !empty($_POST['tel1'])) &&
               (isset($_POST['tel2']) && !empty($_POST['tel2'])) &&
               (isset($_POST['viloyat']) && !empty($_POST['viloyat'])) &&
               (isset($_POST['tuman']) && !empty($_POST['tuman'])) &&
               (isset($_POST['manzil']) && !empty($_POST['manzil'])) &&
               (isset($_POST['m_nomi']) && !empty($_POST['m_nomi']))
          ) {
               $aloqaInputGet = test_input1([
                    $_POST['ism'],
                    $_POST['fam'],
                    $_POST['tel1'],
                    $_POST['tel2'],
                    $_POST['viloyat'],
                    $_POST['tuman'],
                    $_POST['manzil'],
                    $_POST['m_nomi'],
                    $_POST['miqdor'],
                    $_POST['qarz_vaqt'],
                    $_POST['sana3oy'],
                    $_POST['date'],
               ]);
               $db = connection();

               $sql = $db->query("UPDATE user SET 
                    ism = '{$aloqaInputGet[0]}',
                    fam = '{$aloqaInputGet[1]}',
                    tel1 = '{$aloqaInputGet[2]}',
                    tel2 = '{$aloqaInputGet[3]}',
                    viloyat= '{$aloqaInputGet[4]}',
                    tuman = '{$aloqaInputGet[5]}',
                    manzil = '{$aloqaInputGet[6]}',
                    maxsulotNomi = '{$aloqaInputGet[7]}',
                    miqdorSum = '{$aloqaInputGet[8]}',
                    sanaQarz = '{$aloqaInputGet[9]}',
                    sana3oy = '{$aloqaInputGet[10]}',
                    date = '{$aloqaInputGet[11]}'
                    WHERE id= '{$_SESSION['id']}'");
               if ($sql) {
                    reflesh(url_home, '');
               } else {
                    reflesh(url_home, 'userEdit.php');
               }
          }
     }

     ?>

<?php
} else {
     reflesh(url, '');
}
?>