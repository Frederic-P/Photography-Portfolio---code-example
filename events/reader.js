/**
 * Created by FREDERIC on 5/05/2017.
 */

$(document).ready(function() {

    $.getJSON("holdevents.json", function (data) {
        var keys = Object.keys(data);
        //keys.reverse();
        var a = 0;
        var current = 1;
        var l = keys.length;
        var rest = l%3;
        //Hotfix
        if (rest === 1) {
            rest = 2;
        }
        if (rest === 0) {
            rest = 1;
        }
        //END hotfix
        var full = (l - rest)/3;
        var xof = Math.ceil(full+rest-1);
        var progress = current + " of " + (xof) +".";
        $("#dynamicpos").empty().append("Page: " + progress);

        //console.log("totaal = " + l);
        //console.log("rest " + rest);
        //console.log("volle pags = " +full);


        for (var n = (l-1); n > l-4; n--) {
            var eventitem = data[keys[n]];
            var title = eventitem[1];
            var date = eventitem[2];
            var location = eventitem[3];
            var thumbnail = eventitem[4];
            var description = eventitem[5];
            $(".eventslice").append("<a href='eventid.php?evid="+n+"'><div class='eventcontainer'> " +
                "<img class='holdthumbnail' src='"+thumbnail+"' alt='"+thumbnail+"'>" +
                "<div class='holdeventtext'><h1 class='eventtitle'>"+title+"</h1> <p class='addinfo'> <b>Date</b>: " + date + "</p><p class='addinfo'> <b>Location</b>: " + location + "</p><p>" + description + "</p></div></div>");
            $("#newer").css("visibility","hidden");
        }


        $(".move").on("click", function(event) {
            var x = event.target.id;
            if (x === "older") {
                l = l - 3;
                current = current + 1;
                $(".lister").css("visibility", "hidden");
            }
            if (x ==="newer") {
                l  = l+3;
                current = current - 1;
            }
            var progress = current + " of " + (xof) + ".";
            $("#dynamicpos").empty().append("Page: " + progress);
            $(".eventslice").empty();
            for (var n = (l-1); n > l-4; n--) {
                var eventitem = data[keys[n]];
                var title = eventitem[1];
                var date = eventitem[2];
                var location = eventitem[3];
                var thumbnail = eventitem[4];
                var description = eventitem[5];
                $(".eventslice").append("<a href='eventid.php?evid="+n+"'><div class='eventcontainer'> " +
                    "<img class='holdthumbnail' src='"+thumbnail+"' alt='"+thumbnail+"'>" +
                    "<div class='holdeventtext'><h1 class='eventtitle'>"+title+"</h1> <p class='addinfo'> <b>Date</b>: " + date + "</p><p class='addinfo'> <b>Location</b>: " + location + "</p><p>" + description + "</p></div></div>");
                if (current === xof) {$("#older").css("visibility","hidden");
                } else {$("#older").css("visibility","visible");}
            }
            if (current === 1) {$("#newer").css("visibility","hidden");
                $(".lister").css("visibility", "visible");
            } else {$("#newer").css("visibility","visible")}
        });
    });
});
