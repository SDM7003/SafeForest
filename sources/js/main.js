/**
 * Created by Progress Motion on 24.06.18.
 */

i=0;
dt=new Array("FF0000", "2FC4C6");
function next_cl() {
    document.getElementById("size_inf_4").style.color='#'+dt[i++];
    if (i>=dt.length) i=0;
}
setInterval(next_cl,500);

$(document).ready(function() {
    $('a.scrollto[href^="#"]').click(function () {
        var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top - 190 }, 2500);
        return false;
    });
});

$(document).ready(function () {
    $(".navbar-nav a").click(function (e) {
        e.preventDefault();
        $('.navbar-collapse').collapse('hide');
    });
});