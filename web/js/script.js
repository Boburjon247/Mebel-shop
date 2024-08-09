// tap
const button_item = document.querySelectorAll(".btn_tap");
const tabPanel = document.querySelectorAll(".items_window");
const btn_bar_close = document.querySelector('.btn_bar_close');
const left_content = document.querySelector('.left_content');

function hide() {
     tabPanel.forEach(Element => {
          Element.style.display = 'none';
     });
     button_item.forEach(Element => {
          Element.classList.remove('active');
     });
}
function show(index) {
     tabPanel[index].style.display = 'block';
     button_item[index].classList.add('active');
}

hide();
show(0)

button_item.forEach((element, index) => {
     element.addEventListener('click', () => {
          hide();
          show(index);
          localStorage.setItem('window', index);
          left_content.classList.remove('active')

     });
     if (parseInt(localStorage.getItem('window')) == index) {
          hide();
          show(index);
     }
});

// chart

const xValues = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];

new Chart("myChart", {
     type: "line",
     data: {
          labels: xValues,
          datasets: [{
               data: [160, 700, 17, 1090, 2000, 270, 400, 5, 600, 700],
               borderColor: "green",
               fill: true
          }]
     },
     options: {
          legend: { display: false, position: "bottom", }
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


// valyuta kursi
const https = new XMLHttpRequest();
let val;

https.onreadystatechange = function () {
     if (this.readyState == 4 && this.status == 200) {
          let JsonHttp = JSON.parse(this.responseText)
          document.querySelector('.usd_val').innerHTML = `${JsonHttp[0].Rate}`;
          document.querySelector('.rub_val').innerHTML = `${JsonHttp[2].Rate}`;
          document.querySelector('.gbp_val').innerHTML = `${JsonHttp[3].Rate}`;
          document.querySelector('.eur_val').innerHTML = `${JsonHttp[1].Rate}`;
          document.querySelector('.aed_val').innerHTML = `${JsonHttp[68].Rate}`;
     }
}
https.open('GET', `https://cbu.uz/uz/arkhiv-kursov-valyut/json/all/${formatDate(today)}/`, true);
https.send();





// btn_bar_close


btn_bar_close.addEventListener('click', (e) => {
     if (left_content.classList.contains('active')) {
          left_content.classList.remove('active')
     }
     else {
          left_content.classList.add('active')
     }

});


const check = document.querySelector('#slideThree');
const input_chek = document.querySelectorAll('.input_chek')

check.addEventListener('click', (e) => {
     if (check.checked == true) {
          input_chek.forEach(element => {
               element.removeAttribute('readonly')
          });
     }
     else {
          input_chek.forEach(element => {
               element.setAttribute("readonly", "readonly");
          });

     }
});



// search qidirish oynasi
const search1 = document.querySelector('#user_search1'); //input
const search2 = document.querySelector('#user_search2'); //input
const search3 = document.querySelector('#user_search3'); //input
const search4 = document.querySelector('#user_search4'); //input
//qidirilayotgan element ona blogi

function filter_list(itemInput, itemList, itemListPre) {
     itemList.forEach((element, index) => {
          itemListPre.forEach((e, i) => {
               if (index == i) {
                    let re = new RegExp(itemInput.value, 'i');
                    if (re.test(element.textContent)) {
                         element.innerHTML = element.textContent.replace(re, '<b>$&</b>');
                         e.style.display = 'flex';
                    }
                    else {
                         e.style.display = 'none';
                    }
               }
          })
     })
}

search1.addEventListener('input', () => {
     filter_list(
          search1,
          document.querySelectorAll('.users_items_name li .user_name_title'),
          document.querySelectorAll('.users_items_name li'))
})
search2.addEventListener('input', () => {
     filter_list(
          search2,
          document.querySelectorAll('.users_items_name2 li .user_name_title'),
          document.querySelectorAll('.users_items_name2 li')
     )
})
search3.addEventListener('input', () => {
     filter_list(
          search3,
          document.querySelectorAll('.users_items_name3 li .user_name_title'),
          document.querySelectorAll('.users_items_name3 li')
     )
})
search4.addEventListener('input', () => {
     filter_list(
          search4,
          document.querySelectorAll('.users_items_name4 li .user_name_title'),
          document.querySelectorAll('.users_items_name4 li')
     )
});




