$(document).ready(function () {
    var backgroundColor = $(".bar").css("background-color");
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 500)
            $(".bar").css("background-color", "#333");

        else
            $(".bar").css("background-color", backgroundColor);

        //About Section
        if (scroll > 200 && scroll < 700) {
            $(".barAbout").addClass("highlight");
            $(".barPortfolio").removeClass("highlight");
            $(".barExperience").removeClass("highlight");
            $(".barContact").removeClass("highlight");
            
            
            
        } 
        //Porfolio sections
        else if (scroll > 700 && scroll < 1900) {
            $(".barAbout").removeClass("highlight");
            $(".barPortfolio").addClass("highlight");
            $(".barExperience").removeClass("highlight");
            $(".barContact").removeClass("highlight");
        } 
        //Experience sections
        else if (scroll > 2000 && scroll < 2800) {
            $(".barAbout").removeClass("highlight");
            $(".barPortfolio").removeClass("highlight");
            $(".barExperience").addClass("highlight");
            $(".barContact").removeClass("highlight");
        } 
        //Contact sections
        else if (scroll > 2000) {
            $(".barAbout").removeClass("highlight");
            $(".barPortfolio").removeClass("highlight");
            $(".barExperience").removeClass("highlight");
            $(".barContact").addClass("highlight");
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
