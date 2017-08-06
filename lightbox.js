/**
 * Created by FREDERIC on 17/06/2017.
 */

$(document).ready(function() {
    $(".inlineimage").on("click", function () {
        var image = $(this).attr("src");
        var txt = $(this).attr("alt");

        $("#fullbody").append("<div class='lightboxmain'>" +
            "<div class='lightboxsub'> <img src='"+image+"' alt='image in lightbox' class='lightboximage'> <div class='lightboxcaption'> <p>"+txt+"</p></div></div>" +
            "<div><img src='Images/close-lightbox.png' alt='Close the lightbox' class='closebox'></div></div> ");
            $(".lightboxmain").hide().fadeIn(1000);


        function closebox() {
            $(".lightboxmain").fadeOut(1000, function() {
                this.remove();
            });
        }

        $(".lightboxmain, .closebox").on("click", function () {
            closebox()
        });
    });
});