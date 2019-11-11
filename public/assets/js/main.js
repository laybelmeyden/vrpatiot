$(document).ready(function() {
    $(".button-collapse").sideNav();
    $('.modal').modal();
    $('select').material_select();
});
document.getElementById("added_news").onclick = () => {
    document.getElementById("ucaht_1").classList.toggle('visible');
}
document.getElementById("btn_1").onclick = () => {
    document.getElementById("btn_1_1").classList.toggle('visible');
}
document.getElementById("btn_2").onclick = () => {
    document.getElementById("btn_2_2").classList.toggle('visible');
}
document.getElementById("btn_3").onclick = () => {
    document.getElementById("btn_3_3").classList.toggle('visible');
}
document.getElementById("btn_ok").onclick = () => {
    document.getElementById("modalflat").classList.toggle('visible');
}

function ValidateSize(file) {
    var FileSize = file.files[0].size / 1024 / 1024; // in MB
    if (FileSize > 50) {
        alert('Ваш файл весит больше 50 мб, пожалуйста загрузите его на google disk или dropbox и прикрепите ссылки в соответствующее поле');
        document.getElementById("btn_1_1").value = "";
    } else {

    }
}
$(document).ready(function() {
    $('.tabs').tabs();
});