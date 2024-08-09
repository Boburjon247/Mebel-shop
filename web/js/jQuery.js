
const user_id = document.querySelectorAll('.user_id');
const user_bitton_click = document.querySelectorAll('.user_id_about_a');

user_id.forEach((el, i) => {
     user_bitton_click.forEach((element, index) => {
          element.addEventListener('click', (e) => {
               e.preventDefault();
               if (index == i) {
                    $(function () {
                         $.ajax({
                              url: 'http://localhost/bekend/Mebel-shop/server.php',
                              type: 'GET',
                              data: {
                                   id: el.value
                              },
                              success: function (response) {
                                   let data = response.data;
                                   $('.madal_user').empty();
                                   $.each(data, function (index, value) {
                                        let qarz, mudat, chek;
                                        if (value.miqdorSum !== 'null') {
                                             qarz = value.miqdorSum;
                                        }
                                        else {
                                             qarz = "Qarzdorlik yo'q 😃";
                                        }
                                        if (value.sanaQarz != "0000-00-00") {
                                             mudat = value.sanaQarz;
                                        }
                                        else {
                                             mudat = "Qarzdorlik yopilgan 😃";
                                        }
                                        if( value.bool == 'true'){
                                             chek = 'checked';
                                        }
                                        else{
                                             chek = ' ';
                                        }
                                        $('.madal_user').append(`
                                             <div class="madal_user_content">
                                                  <div class="modal_exit">
                                                       <button onclick="exit()" class="modal_exit_btn">
                                                            <i class="fa-solid fa-xmark"></i>
                                                       </button>
                                                  </div>
                                                  <div class="modal_body">
                                                       <ul>
                                                            <form action="" method="post">
                                                                      <li>
                                                                           <span>Ism :</span>
                                                                           <span>${value.ism}</span>
                                                                      </li>
                                                                      <li>
                                                                           <span>Familya :</span>
                                                                           <span>${value.fam}</span>
                                                                      </li>
                                                                      <li>
                                                                           <span>Telefon 1 :</span>
                                                                           <span>${value.tel1}</span>
                                                                      </li>
                                                                      <li>
                                                                           <span>Telefon 2 :</span>
                                                                           <span>${value.tel2}</span>
                                                                      </li>
                                                                      <li>
                                                                           <span>Viloyat :</span>
                                                                           <span>${value.viloyat}</span>
                                                                      </li>
                                                                      <li>
                                                                           <span>Tuman :</span>
                                                                           <span>${value.tuman}</span>
                                                                      </li>
                                                                      <li>
                                                                           <span>Manzil :</span>
                                                                           <span>${value.maxsulotNomi}</span>
                                                                      </li>
                                                                      <li>
                                                                           <span>Maxsulot olingan sana :</span>
                                                                           <span>${value.date}</span>
                                                                      </li>
                                                                      <li>
                                                                           <span>Texnik xizmat ko'rsatish kerak bo'lgan sana :</span>
                                                                           <span>${value.sana3oy}</span>
                                                                      </li>
                                                                      <li>
                                                                           <span>Qarzdorligi bor kilent :</span>
                                                                           <span>${qarz}</span>
                                                                      </li>
                                                                      <li>
                                                                           <span>Qarzdorligni yopish mudati :</span>
                                                                           <span>${mudat}</span>
                                                                      </li>
                                                                      <li>
                                                                           <span>Texnik Xizmat ko'rsatildi :</span>
                                                                           <p>
                                                                                <input type="checkbox" name="chek" ${chek} >
                                                                           </p>
                                                                      </li>
                                                                      <li>
                                                                           <input type="hidden" value="${value.id}" name='id_ab'>
                                                                           <button type="submit" name="bool_add">
                                                                                Saqlash
                                                                           </button>
                                                                      </li>
                                                            </form>
                                                       </ul>
                                                  </div>
                                             </div>              
                                          `)
                                   })

                              }
                         });
                    })
               }
          });
     })
});

const madal_user = document.querySelector('.madal_user');
const modal_exit_btn = document.querySelector('.modal_exit_btn');
const btn_user_about = document.querySelectorAll('.btn_user_about');

btn_user_about.forEach((element, index) => {
     element.addEventListener('click', () => {
          madal_user.classList.add('active');
     });
});
function exit() {
     madal_user.classList.remove('active');
}