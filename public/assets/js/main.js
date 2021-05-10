function modal_main_toggle() {
    document.querySelector("#body_modal").classList.toggle('visible');
    document.querySelector(".body").classList.toggle('noscroll');
}

function modal_main_toggle_close() {
    document.getElementById("modalflat").classList.toggle('visible');
}





// document.getElementById("added_news").onclick = () => {
//     document.getElementById("ucaht_1").classList.toggle('visible');
// }


function ValidateSize(file) {
    var FileSize = file.files[0].size / 1024 / 1024; // in MB
    if (FileSize > 50) {
        alert('Ваш файл весит больше 50 мб, пожалуйста загрузите его на google disk или dropbox и прикрепите ссылки в соответствующее поле');
        document.getElementById("btn_1_1").value = "";
    } else {

    }
}
// var swiper = new Swiper('.swiper-container', {
//     slidesPerView: 3,
//     spaceBetween: 20,
//     breakpoints: {
//         320: {
//             slidesPerView: 1,
//         },
//         480: {
//             slidesPerView: 1,
//         },
//         640: {
//             slidesPerView: 3,
//         }
//     },
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
// });
var x = document.getElementsByClassName("slider-produtos-wrap");

for (var i = 0; i < x.length; i++) {

    var el = x[i];

    var swiper = el.getElementsByClassName("swiper-container")[0];
    var nx = el.getElementsByClassName("swiper-next")[0];
    var pr = el.getElementsByClassName("swiper-prev")[0];

    new Swiper(swiper, {
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
            992: {
                slidesPerView: 2,
            },
            1350: {
                slidesPerView: 3,
            }
        },
        navigation: {
            nextEl: nx,
            prevEl: pr
        }
    });
}