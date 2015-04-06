$(document).ready(function () {
    $("html").niceScroll({
        cursorcolor: "#263683",
        cursoropacitymin: 0.3,
        background: "#bbb",
        cursorborder: "0",
        autohidemode: false,
        cursorminheight: 50
    });
});


function functionMenu() {
    $(document).ready(function(){
        $(window).scroll(function(){
            if($(window).scrollTop() <= 800 && document.documentElement.clientWidth >= 1119){
                $(".topBar").show();
                $(".menuBar").css({"position":"relative","transition":"1s","width":"auto", "padding-left":"10%", "height":"85px", "width":"99.7%"});
            }

            else if ($(window).scrollTop() >= 850 && document.documentElement.clientWidth >= 1119){
                $(".topBar").hide();
                $(".menuBar").css({"position": "fixed", "z-index":"1000", "width": "100%", "top":"0", "left":"0","width":"99.7%"});
            }

            else if($(window).scrollTop() <= 300 && document.documentElement.clientWidth <= 1119){
                $(".menuBar").css({"position":"relative"});

            }

            else if ($(window).scrollTop() >= 300 && document.documentElement.clientWidth <= 1119){
                $(".menuBar").css({"position": "fixed", "z-index":"1000", "width": "100%", "top":"0", "left":"0"});
            }
        });
    });
};

function scrollWin() {
    $("html, body").animate({ scrollTop: 0 }, 1000);
}

$(document).ready(function(){
    $(".rotativodigi").click(function() {
        $('html, body').animate({
           scrollTop: $("#rotativo").offset().top
        }, 1000);
    });

    $(".usuario").click(function() {
        $('html, body').animate({
           scrollTop: $("#vantagensusu").offset().top
        }, 1000);
    });

    $(".municipio").click(function() {
        $('html, body').animate({
           scrollTop: $("#vantagensmuni").offset().top
        }, 1000);
    });

    $(".produtos").click(function() {
        $('html, body').animate({
           scrollTop: $("#produtos").offset().top
        }, 1000);
    });

    $(".timob").click(function() {
        $('html, body').animate({
           scrollTop: $("#timob").offset().top
        }, 1000);
    });

    $(".clientes").click(function() {
        $('html, body').animate({
           scrollTop: $("#clientes").offset().top
        }, 1000);
    });

    $(".noticias").click(function() {
        $('html, body').animate({
           scrollTop: $("#noticias").offset().top
        }, 1000);
    });

    $(".contato").click(function() {
        $('html, body').animate({
           scrollTop: $("#mensagem").offset().top
        }, 1000);
    });

    $(".funciona").click(function() {
        $('html, body').animate({
           scrollTop: $("#funciona").offset().top
        }, 1000);
    });

    $("#btnDescer").click(function() {
        $('html, body').animate({
           scrollTop: $(".topBar").offset().top
        }, 1000);
    });

    $("#btnAgendar").click(function() {
        $('html, body').animate({
           scrollTop: $(".itemMensagem").offset().top
        }, 1000);
    });

    $("#btnProximo").click(function() {
        $('html, body').animate({
           scrollTop: $(".item1").offset().top
        }, 1000);
    });
});




