const eyes_regest = document.querySelector('.eyes_regest');
const eyes_regest_input = document.querySelector('.password_login_reg');

eyes_regest.addEventListener('click', () => {
     console.log();
     if (eyes_regest_input.getAttribute('type') == 'password') {
          eyes_regest_input.setAttribute('type', 'text');
          eyes_regest.classList.remove('fa-eye-slash');
          eyes_regest.classList.add('fa-eye');
     }
     else {
          eyes_regest_input.setAttribute('type', 'password')
          eyes_regest.classList.add('fa-eye-slash');
          eyes_regest.classList.remove('fa-eye');
     }
});


$(function () {
     $('#btn_click_login').click(function (e) {
          e.preventDefault();
          $.ajax({
               url: 'http://localhost/bekend/Mebel-shop/login.php',
               type: 'GET',
               data: {
                    login: $('#login').val(),
                    password: $('#password').val()
               },
               success: function (response) {
                    let data = JSON.parse(response);
                    if (data['status'] === 200) {
                         window.location = data['message'];
                    }
                    else if (data['status'] === 404) {
                         console.log(data['message']);
                    }
               },
               error: function (data) {
                    alert('Xatolik !');
               }
          })
     });
})