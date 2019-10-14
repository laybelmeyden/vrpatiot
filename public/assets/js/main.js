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
$('btn_1_1').bind('change', function() {
    alert('Загружаемый файл слишком велик, загрузите его на googledisk или dropbox и прекрепите ссылку в соответсвующие поле: ' + this.files[0].size / 1024 / 1024 + "MB");
});