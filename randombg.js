/**
 * Created by FREDERIC on 2/05/2017.
 */

$(document).ready(function() {
    var bgs = [
        "https://c1.staticflickr.com/5/4183/33504468334_e4455f6bb4_k.jpg",
        "https://c2.staticflickr.com/8/7698/27759553981_bd3e018c60_k.jpg",
        "https://c2.staticflickr.com/8/7422/27691741652_d9e4f254a3_k.jpg",
        "https://c2.staticflickr.com/8/7402/27717001481_e2929c035b_k.jpg",
        "https://c2.staticflickr.com/6/5665/21705288640_d3b9acbc07_k.jpg",
        "https://c1.staticflickr.com/9/8257/28978072983_5308391820_k.jpg",
        "https://c1.staticflickr.com/5/4181/33962266950_19d0ed2e1f_k.jpg",
        "https://c1.staticflickr.com/1/312/31908716480_7bfedd8406_k.jpg",
        "https://c1.staticflickr.com/3/2828/33587868426_306155e4d8_k.jpg",
        "https://c2.staticflickr.com/4/3710/33471602282_6f7b7cd321_k.jpg",
        "https://c2.staticflickr.com/8/7720/28149824885_e085568610_k.jpg",
        "https://c2.staticflickr.com/2/1514/24684864965_8f6c1d975b_k.jpg",
        "https://c1.staticflickr.com/1/749/21453628114_504b180e58_k.jpg",
        "https://c2.staticflickr.com/8/7683/27759549621_e7c29d643d_k.jpg",
        "https://c2.staticflickr.com/2/1602/25529315394_bd414d301d_k.jpg"
    ];
    var backimg = bgs[Math.random() * bgs.length>>0];

    $("#setbackimage").css({"background-image" : "url(" + backimg + ")"});


    $('<img/>').attr('src', backimg).on('load', function() {
        $("#load").css("visibility", "hidden");
        $("#setbackimage").css("visibility", "visible").hide().fadeIn(1000);
        $(".holdinjected").css("visibility", "hidden");
        setTimeout(function(){
            $(".holdinjected, #share, header, .jssocials-shares").css("visibility", "visible").hide().fadeIn(1000);
            setTimeout(function () {
                $("#postload").css("visibility", "visible");
            },1000)
        }, 1000);

    });


    var quotes = [
        ["Taking an image, freezing a moment, reveals how rich reality truly is", "Unknown author"],
        ["You don’t take a photograph. You ask quietly to borrow it.", "Unknown author"],
        ["Taking pictures is like tiptoeing into the kitchen late at night and stealing Oreo cookies.", "Diane Arbus"],
        ["The picture that you took with your camera is the imagination you want to create with reality.", "Scott Lorenzo"],
        ["Essentially what photography is is life lit up.", "Sam Abell"],
        ["There are always two people in every picture: the photographer and the viewer.", "Ansel Adams"],
        ["What I like about photographs is that they capture a moment that’s gone forever, impossible to reproduce.","Karl Lagerfeld"],
        ["You don’t take a photograph, you make it.", "Ansel Adams"],
        ["Blast, the battery just died.", "Frédéric Pietowski"]
    ];

    var quickarray = quotes[Math.random() * quotes.length>>0];
    var text = quickarray[0];
    var auth = quickarray[1];

    $(".holdtext").empty().append(text);
    $(".holdauthor").empty().append("-- " + auth);

    $(".holdinjected").mouseenter(function(){
        $(this).fadeOut(1000);
    });

    $(".mainpage").mouseenter(function(){
        $(".holdinjected").fadeIn(1000);
    })

});
