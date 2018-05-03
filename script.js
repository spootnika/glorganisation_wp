$(document).ready(function () {




    /*animation barre de nav*/
    $("#imageSpectacle").mouseenter(function () {
        $("#navigationSpectacle", this).css("display", "block");

        //        $(".titreprojet", this).animate({
        //            fontSize: "2em"
        //        });
    });
    $("#imageSpectacle").mouseleave(function () {
        $("#navigationSpectacle", this).css("display", "none");

    });

});
