$(document).ready(function(){
    $(".card:even").css("background-color", "#f2f2f2");


   $(".aba").click(function(){
       $(this).toggleClass("selected");
       var cat = $(this).attr("id");
       $("."+cat).toggleClass("inativo");

   })

    $("div.header").click(function () {
        var elemPai = $(this).parent();
        elemPai.find("div.description").fadeToggle("slow");
    });

    $("div.image img").hover(function(){
        $(this).parent().parent().find(".img-grande").addClass("exibicao");
    }, function (){
        $(this).parent().parent().find(".img-grande").removeClass("exibicao");

    });
});