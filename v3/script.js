$(document).ready(function () {
    var backgroundColor = $(".bar").css("background-color");
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 500)
            $(".bar").css("background-color", "#333");

        else
            $(".bar").css("background-color", backgroundColor);

        //About Section
        if (scroll > 500 && scroll < 750) {
            $(".barAbout").css("color", "#f67000");
            $(".barPortfolio").css("color", "#fff");
            $(".barExperience").css("color", "#fff");
            $(".barContact").css("color", "#fff");
        } 
        //Porfolio sections
        else if (scroll > 800) {
            $(".barAbout").css("color", "#fff");
            $(".barPortfolio").css("color", "#f67000");
            $(".barExperience").css("color", "#fff");
            $(".barContact").css("color", "#fff");
        } 
        else
            $(".barItem").css("color", "white");
    })
})

function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(37.1, 95.7),
        zoom: 5,
        mapTypeId: google.maps.MapTypeId.TERRIAN
    }
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
