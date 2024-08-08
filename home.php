<?php
global $config;
include  'config.php';
include 'libs/libs.php';
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

          <div class="body_content">

               <!-- left_content -->

               <div class="left_content">
                    <ul>
                         <li>
                              <p class="btn_tap">
                                   <span>
                                        <i class="fa-solid fa-house"></i>
                                   </span>
                                   <span>Bosh Sahifa</span>
                              </p>
                         </li>
                         <li>
                              <p class="btn_tap">
                                   <span>
                                        <i class="fa-solid fa-user-plus"></i>
                                   </span>
                                   <span>Kilent Qo'shish</span>
                              </p>
                         </li>
                         <li>
                              <p class="btn_tap">
                                   <span>
                                        <i class="fa-solid fa-user-clock"></i>
                                   </span>
                                   <span>Kilentlar bilan ishlash</span>
                              </p>
                         </li>
                         <li>
                              <p class="btn_tap">
                                   <span>
                                        <i class="fa-solid fa-user-pen"></i>
                                   </span>
                                   <span>Tahrirlash</span>
                              </p>
                         </li>
                         <li>
                              <p class="btn_tap">
                                   <span>
                                        <i class="fa-solid fa-address-card"></i>
                                   </span>
                                   <span>Profil</span>
                              </p>
                         </li>
                    </ul>
               </div>

               <!-- right_content -->

               <div class="right_content">

                    <!-- items_window 1 -->
                    <!-- bosh sahifa -->
                    <div class="items_window">
                         <!-- card_bar -->
                         <div class="card_bar">
                              <div class="card_items">
                                   <div class="card_content">
                                        <span class="user_icon_blok"><i class="fa-solid fa-users"></i></span>
                                        <span class="user_text_blok">Ummumiy kilent</span>
                                        <p class="number_kilent">
                                             <?php
                                             $userArray = GetAll('user', 'false', 'asc');
                                             $userArrayLength = count($userArray);
                                             echo $userArrayLength;
                                             ?>
                                        </p>
                                   </div>
                              </div>
                              <div class="card_items">
                                   <div class="card_content">
                                        <span class="user_icon_blok"><i class="fa-solid fa-users-gear"></i></span>
                                        <span class="user_text_blok">Xizmat ko'rsatish kerak</span>
                                        <p class="number_kilent">999</p>
                                   </div>
                              </div>
                              <div class="card_items">
                                   <div class="card_content">
                                        <span class="user_icon_blok"><i class="fa-solid fa-user-clock"></i></span>
                                        <span class="user_text_blok">Qarzdor kilent</span>
                                        <p class="number_kilent">999</p>
                                   </div>
                              </div>
                              <div class="card_items">
                                   <div class="card_content">
                                        <span class="user_icon_blok"><i class="fa-solid fa-person-circle-exclamation"></i></span>
                                        <span class="user_text_blok">Qarz mudati tugaagan kilent</span>
                                        <p class="number_kilent">999</p>
                                   </div>
                              </div>
                         </div>

                         <!-- chart_bar -->

                         <div class="chart_bar">
                              <div class="chart">
                                   <canvas id="myChart"></canvas>
                              </div>
                              <div class="text_value">
                                   <ul>
                                        <li>
                                             <div class="chart_items">
                                                  <div class="img">
                                                       <img src="<?= $config['base']['url'] . 'web/' ?>img/united-states.png" alt="">
                                                  </div>
                                                  <p>1 USD</p>
                                             </div>
                                             <span>⇔</span>
                                             <div class="chart_items">
                                                  <div class="img">
                                                       <img src="<?= $config['base']['url'] . 'web/' ?>img/flag.png" alt="">
                                                  </div>
                                                  <p class="usd_val"></p>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="chart_items">
                                                  <div class="img">
                                                       <img src="<?= $config['base']['url'] . 'web/' ?>img/russia.png" alt="">
                                                  </div>
                                                  <p>1 RUB</p>
                                             </div>
                                             <span>⇔</span>
                                             <div class="chart_items">
                                                  <div class="img">
                                                       <img src="<?= $config['base']['url'] . 'web/' ?>img/flag.png" alt="">
                                                  </div>
                                                  <p class="rub_val"></p>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="chart_items">
                                                  <div class="img">
                                                       <img src="<?= $config['base']['url'] . 'web/' ?>img/united-kingdom.png" alt="">
                                                  </div>
                                                  <p>1 GBP</p>
                                             </div>
                                             <span>⇔</span>
                                             <div class="chart_items">
                                                  <div class="img">
                                                       <img src="<?= $config['base']['url'] . 'web/' ?>img/flag.png" alt="">
                                                  </div>
                                                  <p class="gbp_val"></p>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="chart_items">
                                                  <div class="img">
                                                       <img src="<?= $config['base']['url'] . 'web/' ?>img/european-union.png" alt="">
                                                  </div>
                                                  <p>1 EUR</p>
                                             </div>
                                             <span>⇔</span>
                                             <div class="chart_items">
                                                  <div class="img">
                                                       <img src="<?= $config['base']['url'] . 'web/' ?>img/flag.png" alt="">
                                                  </div>
                                                  <p class="eur_val"></p>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="chart_items">
                                                  <div class="img">
                                                       <img src="<?= $config['base']['url'] . 'web/' ?>img/united-arab-emirates.png" alt="">
                                                  </div>
                                                  <p>1 AED</p>
                                             </div>
                                             <span>⇔</span>
                                             <div class="chart_items">
                                                  <div class="img">
                                                       <img src="<?= $config['base']['url'] . 'web/' ?>img/flag.png" alt="">
                                                  </div>
                                                  <p class="aed_val"></p>
                                             </div>
                                        </li>
                                   </ul>
                              </div>
                         </div>

                    </div>

                    <!-- items_window 2 -->
                    <!-- Kilent Qo'shish -->
                    <div class="items_window">
                         <form action="" method="post" class="cilent-add">
                              <div class="cilent-item cilent-item_img">
                                   <div class="cilent_img">
                                        <img src="<?= $config['base']['url'] . 'web/' ?>img/User_icon_2.svg.png" alt="">
                                   </div>
                              </div>
                              <div class="cilent-item">
                                   <label for="">Ism :</label>
                                   <input name="ism" type="text" placeholder="Ism:">
                              </div>
                              <div class="cilent-item">
                                   <label for="">Familya :</label>
                                   <input name="fam" type="text" placeholder="Familya">
                              </div>
                              <div class="cilent-item">
                                   <label for="">Telefon raqami1</label>
                                   <input name="tel1" type="text" placeholder="Telefon raqami1">
                              </div>
                              <div class="cilent-item">
                                   <label for="">Telefon raqami2</label>
                                   <input name="tel2" type="text" placeholder="Telefon raqami2">
                              </div>
                              <div class="cilent-item">
                                   <label for="">Viloyat</label>
                                   <input name="viloyat" type="text" placeholder="Viloyat">
                              </div>
                              <div class="cilent-item">
                                   <label for="">Tuman</label>
                                   <input name="tuman" type="text" placeholder="Tuman">
                              </div>
                              <div class="cilent-item">
                                   <label for="">Manzil</label>
                                   <input name="manzil" type="text" placeholder="Manzil">
                              </div>
                              <div class="cilent-item">
                                   <label for="">Maxsulot nomi</label>
                                   <input name="m_nomi" type="text" placeholder="Maxsulot nomi">
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
                                        <input name="miqdor" class="input_chek" type="text" placeholder="Miqdori" readonly>
                                        <input name="qarz_vaqt" class="input_chek" type="date" placeholder="Vaqti" readonly>
                                   </div>
                              </div>
                              <div class="btn_cilent">
                                   <button type="submit" name="cilentAdd" class="cilent_add_btn">Saqlash</button>
                              </div>

                         </form>
                    </div>

                    <!-- items_window 3 -->
                    <!-- Kilentlar bilan ishlash -->
                    <div class="items_window">
                         <ul class="cilent_about nav nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item" role="presentation">
                                   <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                        <span class="title_cilent_about_icon"><i class="fa-solid fa-users"></i></span>
                                        <span class="title_cilent_about">Ummumiy kilent</span>
                                   </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                   <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <span class="title_cilent_about_icon"><i class="fa-solid fa-users-gear"></i></span>
                                        <span class="title_cilent_about">Xizmat ko'rsatish kerak</span>
                                   </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                   <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                        <span class="title_cilent_about_icon"><i class="fa-solid fa-user-clock"></i></span>
                                        <span class="title_cilent_about">Qarzdor kilent</span>
                                   </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                   <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact2" type="button" role="tab" aria-controls="contact2" aria-selected="false">
                                        <span class="title_cilent_about_icon"> <i class="fa-solid fa-person-circle-exclamation"></i></span>
                                        <span class="title_cilent_about">Qarz mudati tugaagan kilent</span>
                                   </button>
                              </li>
                         </ul>
                         <div class="tab-content" id="myTabContent">
                              <div class="tab-pane cilent_type fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                   <div class="search_title">
                                        <label for="">Ummumiy kilent</label>
                                        <input type="search" id="user_search1" placeholder="Qidiruv">
                                   </div>
                                   <p id="text"></p>
                                   <ul class="users_items_name">
                                        <?php foreach (GetAll('user', 'false', 'asc') as $key => $user) : ?>
                                             <?php
                                             $date1 = new DateTime($user['sana3oy']);
                                             $date2 = new DateTime(date('Y-m-d'));
                                             $interval = $date1->diff($date2);


                                             if ($date1 <= $date2) {
                                                  $days_m =  $interval->days . " kun o'tib ketdi";
                                             } else {
                                                  $days_m =  $interval->days . " kun qoldi";
                                             }

                                             ?>
                                             <li>
                                                  <form action="<?= $config['base']['url'] . 'server.php' ?>" method="get">
                                                       <input type="hidden" required class="user_id" value="<?= $user['id'] ?>">
                                                       <button class="user_id_about_a btn_user_about" type="submit" value="ok" name="user_about">
                                                            <div class="d-flex align-items-center gap-2">
                                                                 <div class="img">
                                                                      <img src="<?= $config['base']['url'] . 'web/' ?>img/user_2.png" alt="">
                                                                 </div>
                                                                 <div class="user_name_cilent">
                                                                      <p class="user_name_title"><?= $user['fam'] . ' ' . $user['ism'] ?></p>
                                                                      <p><?= $user['maxsulotNomi'] ?></p>
                                                                 </div>
                                                            </div>
                                                            <div class="user_date">
                                                                 <p><?= $user['date'] ?></p>
                                                                 <p><?= $days_m ?></p>
                                                            </div>
                                                       </button>
                                                  </form>
                                             </li>
                                        <?php endforeach; ?>
                                   </ul>
                              </div>
                              <div class="tab-pane fade cilent_type" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                   <div class="search_title">
                                        <label for="">Xizmat ko'rsatish kerak</label>
                                        <input type="search" id="user_search2" placeholder="Qidiruv">
                                   </div>
                                   <ul class="users_items_name users_items_name2">
                                        <?php if ($date1 <= $date2) { ?>
                                             <?php foreach (GetAll('user', 'false', 'asc') as $key => $user) : ?>
                                                  <li>
                                                       <form action="<?= $config['base']['url'] . 'server.php' ?>" method="get">
                                                            <input type="hidden" required class="user_id" value="<?= $user['id'] ?>">
                                                            <button class="user_id_about_a btn_user_about" type="submit" value="ok" name="user_about">
                                                                 <div class="d-flex align-items-center gap-2">
                                                                      <div class="img">
                                                                           <img src="<?= $config['base']['url'] . 'web/' ?>img/user_2.png" alt="">
                                                                      </div>
                                                                      <div class="user_name_cilent">
                                                                           <p class="user_name_title"><?= $user['fam'] . ' ' . $user['ism'] ?></p>
                                                                           <p><?= $user['maxsulotNomi'] ?></p>
                                                                      </div>
                                                                 </div>
                                                                 <div class="user_date">
                                                                      <p><?= $user['date'] ?></p>
                                                                      <p><?= $interval->days . " kun o'tib ketdi" ?></p>
                                                                 </div>
                                                            </button>
                                                       </form>
                                                  </li>
                                             <?php endforeach; ?>
                                        <?php } ?>
                                   </ul>

                              </div>
                              <div class="tab-pane fade cilent_type" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                   <div class="search_title">
                                        <label for="">Qarzdor kilent</label>
                                        <input type="search" id="user_search3" placeholder="Qidiruv">
                                   </div>
                                   <ul class="users_items_name users_items_name3">
                                        <?php foreach (GetAll('user', 'false', 'asc') as $key => $user) : ?>
                                             <?php
                                             if ($user['miqdorSum'] != 'null') {

                                                  $date1_q = new DateTime($user['sanaQarz']);
                                                  $date2_q = new DateTime(date('Y-m-d'));
                                                  $interval_q = $date1_q->diff($date2_q);

                                                  if ($date1_q <= $date2_q) {
                                                       $days_m_q =  $interval_q->days . " kun o'tib ketdi";
                                                  } else {
                                                       $days_m_q =  $interval_q->days . " kun qoldi";
                                                  }
                                             ?>
                                                  <li>
                                                       <form action="<?= $config['base']['url'] . 'server.php' ?>" method="get">
                                                            <input type="hidden" required class="user_id" value="<?= $user['id'] ?>">
                                                            <button class="user_id_about_a btn_user_about" type="submit" value="ok" name="user_about">
                                                                 <div class="d-flex align-items-center gap-2">
                                                                      <div class="img">
                                                                           <img src="<?= $config['base']['url'] . 'web/' ?>img/user_2.png" alt="">
                                                                      </div>
                                                                      <div class="user_name_cilent">
                                                                           <p class="user_name_title"><?= $user['fam'] . ' ' . $user['ism'] ?></p>
                                                                           <p><?= $user['maxsulotNomi'] ?></p>
                                                                      </div>
                                                                 </div>
                                                                 <div class="user_date">
                                                                      <p><?= $user['date'] ?></p>
                                                                      <p><?= $days_m_q ?></p>
                                                                 </div>
                                                            </button>
                                                       </form>
                                                  </li>

                                             <?php } ?>

                                        <?php endforeach; ?>
                                   </ul>
                              </div>
                              <div class="tab-pane fade cilent_type" id="contact2" role="tabpanel" aria-labelledby="contact-tab">
                                   <div class="search_title">
                                        <label for="">Qarz mudati tugaagan kilent</label>
                                        <input type="search" id="user_search4" placeholder="Qidiruv">
                                   </div>
                                   <ul class="users_items_name users_items_name4">
                                        <?php foreach (GetAll('user', 'false', 'asc') as $key => $user) : ?>
                                             <?php if ($user['miqdorSum'] != 'null') { ?>
                                                  <?php if ($date1_q <= $date2_q) { ?>
                                                       <li>
                                                            <form action="<?= $config['base']['url'] . 'server.php' ?>" method="get">
                                                                 <input type="hidden" required class="user_id" value="<?= $user['id'] ?>">
                                                                 <button class="user_id_about_a btn_user_about" type="submit" value="ok" name="user_about">
                                                                      <div class="d-flex align-items-center gap-2">
                                                                           <div class="img">
                                                                                <img src="<?= $config['base']['url'] . 'web/' ?>img/user_2.png" alt="">
                                                                           </div>
                                                                           <div class="user_name_cilent">
                                                                                <p class="user_name_title"><?= $user['fam'] . ' ' . $user['ism'] ?></p>
                                                                                <p><?= $user['maxsulotNomi'] ?></p>
                                                                           </div>
                                                                      </div>
                                                                      <div class="user_date">
                                                                           <p><?= $user['date'] ?></p>
                                                                           <p><?= $days_m_q ?></p>
                                                                      </div>
                                                                 </button>
                                                            </form>
                                                       </li>
                                                  <?php } ?>


                                             <?php } ?>

                                        <?php endforeach; ?>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <!-- items_window 4 -->
                    <!-- Tahrirlash -->
                    <div class="items_window">
                         <div class="edit_delete_title">
                              <p>Tahrirlash / O'chirish</p>
                         </div>
                         <div class="edit_delete_home">
                              <ul class="users_items_name">
                                   <?php foreach (GetAll('user', 'false', 'asc') as $key => $user) : ?>
                                        <form action="<?= $config['base']['url'] . 'userEdit.php' ?>" method="post">
                                             <li>
                                                  <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                                  <div class="d-flex align-items-center gap-2">
                                                       <div class="img">
                                                            <img src="<?= $config['base']['url'] . 'web/' ?>img/user_2.png" alt="">
                                                       </div>
                                                       <div class="user_name_cilent">
                                                            <p class="user_name_title">
                                                                 <?= $user['ism'] . ' ' . $user['fam'] ?>
                                                            </p>
                                                            <p><?= $user['maxsulotNomi'] ?></p>
                                                       </div>
                                                  </div>
                                                  <div class="user_date edit_delete_button">
                                                       <div class="">
                                                            <p><?= $user['date'] ?></p>
                                                       </div>
                                                       <div class="button_items">
                                                            <button type="submit" name="user_id"><i class="fa-solid fa-pen-to-square"></i></button>
                                                            <button type="submit" name="user_id_delete"><i class="fa-solid fa-trash"></i></button>
                                                       </div>
                                                  </div>
                                             </li>
                                        </form>
                                   <?php endforeach; ?>

                              </ul>
                         </div>
                    </div>
                    <!-- items_window 5 -->
                    <!-- profil -->
                    <div class="items_window">
                         <div class="profil_content">
                              <div class="item_profil item_profil_left">
                                   <div class="img_profil">
                                        <img src="<?= $config['base']['url'] . 'web/' ?>img/User_icon_2.svg.png" alt="">
                                   </div>
                                   <?php foreach (GetAll('admin', 'false', 'asc') as $key => $admin) : ?>
                                        <div class="user_name_profil">
                                             <p><?= $admin['ism'] . ' ' . $admin['fam'] ?></p>
                                        </div>
                                        <ul>
                                             <li>
                                                  <a target="" href="<?= $admin['telegram'] ?>" title="telegram"><i class="fa-brands fa-telegram"></i></a>
                                             </li>
                                             <li>
                                                  <a target="" href="<?= $admin['instagram'] ?>" title="instagram"><i class="fa-brands fa-square-instagram"></i></a>
                                             </li>
                                             <li>
                                                  <a target="" href="<?= $admin['linkedin'] ?>" title="linkedin"><i class="fa-brands fa-linkedin"></i></a>
                                             </li>
                                             <li>
                                                  <a target="" href="<?= $admin['facebook'] ?>" title="facebook"><i class="fa-brands fa-facebook"></i></a>
                                             </li>
                                        </ul>
                                   <?php endforeach; ?>
                              </div>
                              <div class="item_profil item_profil_right">
                                   <ul class="nav nav-tabs item_profil_tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                             <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home_profil" type="button" role="tab" aria-controls="home" aria-selected="true">Umumiy koʻrinish</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                             <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile_profil" type="button" role="tab" aria-controls="profile" aria-selected="false">Profilni
                                                  tahrirlash</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                             <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact_profil" type="button" role="tab" aria-controls="contact" aria-selected="false">Parolni
                                                  o'zgartirish</button>
                                        </li>
                                   </ul>
                                   <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home_profil" role="tabpanel" aria-labelledby="home-tab">
                                             <ul class="user_profil_about">
                                                  <?php foreach (GetAll('admin', 'false', 'asc') as $key => $admin) : ?>
                                                       <li>
                                                            <span>Ism :</span>
                                                            <span><?= $admin['ism'] ?></span>
                                                       </li>
                                                       <li>
                                                            <span>Familya :</span>
                                                            <span><?= $admin['fam'] ?></span>
                                                       </li>
                                                       <li>
                                                            <span>Telefon raqam :</span>
                                                            <span><?= $admin['tel'] ?></span>
                                                       </li>
                                                       <li>
                                                            <span>Login :</span>
                                                            <span><?= $admin['login'] ?></span>
                                                       </li>
                                                       <li>
                                                            <span>Parol :</span>
                                                            <span><?= $admin['parol'] ?></span>
                                                       </li>
                                                  <?php endforeach; ?>
                                             </ul>
                                        </div>
                                        <div class="tab-pane fade edit_user_items_row_bolok" id="profile_profil" role="tabpanel" aria-labelledby="profile-tab">
                                             <?php foreach (GetAll('admin', 1, 'asc') as $key => $admin) : ?>
                                                  <form action="" class="edit_user_items_row" method="post">
                                                       <div class="edit_user_items">
                                                            <label for="">Ism</label>
                                                            <input value="<?= $admin['ism'] ?>" type="text" name="ism" placeholder="Ism">
                                                       </div>
                                                       <div class="edit_user_items">
                                                            <label for="">Familya</label>
                                                            <input value="<?= $admin['fam'] ?>" type="text" name="fam" placeholder="Familya">
                                                       </div>
                                                       <div class="edit_user_items">
                                                            <label for="">Telefon raqam</label>
                                                            <input value="<?= $admin['tel'] ?>" type="text" name="tel" placeholder="Telefon raqam">
                                                       </div>
                                                       <div class="edit_user_items">
                                                            <label for="">Telegram</label>
                                                            <input value="<?= $admin['telegram'] ?>" type="text" name="telegram" placeholder="Telegram">
                                                       </div>
                                                       <div class="edit_user_items">
                                                            <label for="">Instagram</label>
                                                            <input value="<?= $admin['instagram'] ?>" type="text" name="instagram" placeholder="Instagram">
                                                       </div>
                                                       <div class="edit_user_items">
                                                            <label for="">Linkedin</label>
                                                            <input value="<?= $admin['linkedin'] ?>" type="text" name="linkedin" placeholder="Linkedin">
                                                       </div>
                                                       <div class="edit_user_items">
                                                            <label for="">Facebook</label>
                                                            <input value="<?= $admin['facebook'] ?>" type="text" name="facebook" placeholder="Facebook">
                                                       </div>
                                                       <button name="btn_admin_update" type="submit" class="btn-user-edit">Saqlash</button>
                                                  </form>
                                             <?php endforeach; ?>

                                        </div>
                                        <div class="tab-pane fade" id="contact_profil" role="tabpanel" aria-labelledby="contact-tab">
                                             <?php foreach (GetAll('admin', 1, 'asc') as $key => $admin) : ?>
                                                  <form action="" class="edit_user_items_row" method="post">
                                                       <div class="edit_user_items">
                                                            <label for="">Login</label>
                                                            <input value="<?= $admin['login'] ?>" type="text" name="login" placeholder="login">
                                                       </div>
                                                       <div class="edit_user_items">
                                                            <label for="">Parol</label>
                                                            <input value="<?= $admin['parol'] ?>" type="text" name="parol" placeholder="parol">
                                                       </div>
                                                       <button name="parol_admin_update" type="submit" class="btn-user-edit">Saqlash</button>
                                                  </form>
                                             <?php endforeach; ?>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <!-- Modal -->
          <div class="madal_user">
               <div class="madal_user_content">
                    <div class="modal_exit">
                         <button class="modal_exit_btn">
                              <i class="fa-solid fa-xmark"></i>
                         </button>
                    </div>
                    <div class="modal_body">
                         <ul>
                              <li>
                                   <span>Ism :</span>
                                   <span>Boburjon</span>
                              </li>
                              <li>
                                   <span>Familya :</span>
                                   <span>Abdunazarov</span>
                              </li>
                              <li>
                                   <span>Telefon 1 :</span>
                                   <span>+998976665979</span>
                              </li>
                              <li>
                                   <span>Telefon 2 :</span>
                                   <span>+998903686840</span>
                              </li>
                              <li>
                                   <span>Viloyat :</span>
                                   <span>Farg'ona</span>
                              </li>
                              <li>
                                   <span>Tuman :</span>
                                   <span>Rishton</span>
                              </li>
                              <li>
                                   <span>Manzil :</span>
                                   <span>Avazboy qishlog'i Yangi zamon ko'chasi 9 uy</span>
                              </li>
                              <li>
                                   <span>Maxsulot olingan sana :</span>
                                   <span>2024-11-05</span>
                              </li>
                              <li>
                                   <span>Texnik xizmat ko'rsatish kerak bo'lgan sana :</span>
                                   <span>2024-11-05</span>
                              </li>
                              <li>
                                   <span>Qarzdorligi bor kilent :</span>
                                   <span>1200 000 so'm</span>
                              </li>
                              <li>
                                   <span>Texnik Xizmat ko'rsatildi :</span>
                                   <span class="button_control">
                                        <input type="radio" name="rdo" id="yes" />
                                        <input type="radio" name="rdo" id="no" checked />
                                        <div class="switch" class="">
                                             <label for="yes">Xa</label>
                                             <label for="no">Yo'q</label>
                                             <span></span>
                                        </div>
                                   </span>
                              </li>
                              <li>
                                   <span>Qarzdorlik :</span>
                                   <span><input type="text" class="qarzdorlik"></span>
                              </li>
                              <li>
                                   <button>
                                        Saqlash
                                   </button>
                              </li>
                         </ul>
                    </div>
               </div>
          </div>
     </section>
     <!-- bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

     <!-- Jquery -->
     <script src="<?= $config['base']['url'] . 'web/' ?>js/Jquery/jquery-3.6.4.min.js"></script>
     <script src="<?= $config['base']['url'] . 'web/' ?>js/Jquery/owlCarusel/owl.carousel.min.js"></script>
     <script src="<?= $config['base']['url'] . 'web/' ?>js/Jquery/jquery-ui.min.js"></script>
     <script src="<?= $config['base']['url'] . 'web/' ?>js/jQuery.js"></script>
     <!-- script -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
     <script src="<?= $config['base']['url'] . 'web/' ?>js/script.js"></script>



</body>

</html>

<?php
// cilent qoshish
if (isset($_POST['cilentAdd'])) {
     if (
          (isset($_POST['ism']) && !empty($_POST['ism'])) &&
          (isset($_POST['fam']) && !empty($_POST['fam'])) &&
          (isset($_POST['tel1']) && !empty($_POST['tel1'])) &&
          (isset($_POST['tel2']) && !empty($_POST['tel2'])) &&
          (isset($_POST['viloyat']) && !empty($_POST['viloyat'])) &&
          (isset($_POST['tuman']) && !empty($_POST['tuman']))
     ) {
          if ((isset($_POST['miqdor']) && !empty($_POST['miqdor'])) && isset($_POST['qarz_vaqt']) && !empty($_POST['qarz_vaqt'])) {
               $s_miqdor = $_POST['miqdor'];
               $qarz_vaqt = $_POST['qarz_vaqt'];
          } else {
               $s_miqdor = 'null';
               $qarz_vaqt = 'null';
          }
          // Bugungi sanani olish
          $today = new DateTime();
          $bugin = $today->format('Y-m-d') . "\n";

          // 3 oy qo'shish
          $threeMonthsLater = clone $today; // Bugungi sanani nusxalash
          $threeMonthsLater->modify('+3 months');
          $uchoy = $threeMonthsLater->format('Y-m-d') . "\n";

          $aloqaInputGet = test_input([
               $_POST['ism'],
               $_POST['fam'],
               $_POST['tel1'],
               $_POST['tel2'],
               $_POST['viloyat'],
               $_POST['tuman'],
               $_POST['manzil'],
               $_POST['m_nomi'],
               $s_miqdor,
               $qarz_vaqt,
               $uchoy,
               $bugin
          ]);
          if (
               getInsert(
                    'user',
                    ['ism', 'fam', 'tel1', 'tel2', 'viloyat', 'tuman', 'manzil', 'maxsulotNomi', 'miqdorSum', 'sanaQarz', 'sana3oy', 'date'],
                    $aloqaInputGet
               )
          ) {
               // $_SESSION['error'] = "Yangi xodim qo'shildi 😁";
               reflesh(url_home, '');
          }
     }
}



// admin malumotlarini yangilash
if (isset($_POST['btn_admin_update'])) {
     if (
          (isset($_POST['ism']) && !empty($_POST['ism'])) &&
          (isset($_POST['fam']) && !empty($_POST['fam'])) &&
          (isset($_POST['tel']) && !empty($_POST['tel'])) &&
          (isset($_POST['telegram']) && !empty($_POST['telegram']))
     ) {
          $aloqaInputGet = test_input1([
               $_POST['ism'],
               $_POST['fam'],
               $_POST['tel'],
               $_POST['telegram'],
               $_POST['instagram'],
               $_POST['linkedin'],
               $_POST['facebook']
          ]);
          $db = connection();

          $sql = $db->query("UPDATE admin SET 
                    ism = '{$aloqaInputGet[0]}',
                    fam = '{$aloqaInputGet[1]}',
                    tel = '{$aloqaInputGet[2]}',
                    telegram= '{$aloqaInputGet[3]}',
                    instagram = '{$aloqaInputGet[4]}',
                    linkedin = '{$aloqaInputGet[5]}',
                    facebook = '{$aloqaInputGet[6]}'
                    WHERE id= 1");
          if ($sql) {
               reflesh(url_home, '');
          } else {
               reflesh(url_home, '');
          }
     }
}

// admin login parol yangilash
if (isset($_POST['parol_admin_update'])) {
     if (
          (isset($_POST['login']) && !empty($_POST['login'])) &&
          (isset($_POST['parol']) && !empty($_POST['parol']))
     ) {
          $aloqaInputGet = test_input1([
               $_POST['login'],
               $_POST['parol'],
          ]);
          $db = connection();

          $sql = $db->query("UPDATE admin SET 
                    login = '{$aloqaInputGet[0]}',
                    parol = '{$aloqaInputGet[1]}'
                    WHERE id= 1");
          if ($sql) {
               reflesh(url_home, '');
          } else {
               reflesh(url_home, '');
          }
     }
}

?>