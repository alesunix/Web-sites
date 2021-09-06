// //Менять картинки
// $('.box').on('click', '.btn', (e)=> {
    // const srcAttr = $(e.target).data('src');
    // $('.image').css('background-image', `url(${srcAttr})`);
// });

// //button нажатой по умолчанию
// document.getElementById("submit").click();

// //Замена текста
// function text_out(){
    // var p;
    // p = document.getElementById('text_change');
    // p.innerHTML = 'СХЕМА РАСПОЛОЖЕНИЯ РАЙОНОВ ВОДОПРОВОДНОЙ СЕТИ';
// }
// function text_out2(){
    // var p;
    // p = document.getElementById('text_change');
    // p.innerHTML = 'СХЕМА РАСПОЛОЖЕНИЯ РАЙОНОВ КАНАЛИЗАЦИОННОЙ СЕТИ';
// }

//отобразить последние div элементы
//$('.inline-edit').children().slice(3).hide(); 

//Подгрузка информации с другой страницы сайта
$(document).ready(function(){
$.get('/press/companynews.html', function (data) {  
  $('#loadcontent').html( $('#content', data).html() ) 
});
}); 