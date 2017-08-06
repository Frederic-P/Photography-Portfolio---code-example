/**
 * Created by FREDERIC on 12/06/2017.
 */

$( document ).ready(function() {
    var n = "frederic_";
    var n = n + "pietowski";
    var n = n + "@hotmail.com";

    $("#divide").empty();
    $("#divide").append('<a  href="mailto:' + n + '" target="_top"><img src="Images/Mail.png" alt="Mail Logo" class="connectme"></a>' + '<a  href="mailto:' + n + '" target="_top"> <p class="contactdetail">E-mail: ' + n + '</p></a>');
});
