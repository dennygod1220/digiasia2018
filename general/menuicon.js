$(function () {
    //讓那該死的按鈕可以漂亮點
    var menu_H = $("#menu").css("height");
    var menu_H_num = parseInt(menu_H.replace('px', ''));
    $("#iconF").css('right', menu_H_num - 10 + 5 + 5);
    $("#iconF").css('top', 5);
    $("#iconY").css('top', 5);
})