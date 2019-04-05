$(document).ready(function () {
    var backgroundColor = $(".bar").css("background-color");
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 500)
            $(".bar").css("background-color", "#333");

        else
            $(".bar").css("background-color", backgroundColor);

        //About Section
        if (scroll > 200 && scroll < 900) {
            $(".barAbout").addClass("highlight");
            $(".barPortfolio").removeClass("highlight");
            $(".barExperience").removeClass("highlight");
            $(".barContact").removeClass("highlight");
            
            
            
        } 
        //Porfolio sections
        else if (scroll > 900 && scroll < 2300) {
            $(".barAbout").removeClass("highlight");
            $(".barPortfolio").addClass("highlight");
            $(".barExperience").removeClass("highlight");
            $(".barContact").removeClass("highlight");
        } 
        //Experience sections
        else if (scroll > 2800 && scroll < 3200) {
            $(".barAbout").removeClass("highlight");
            $(".barPortfolio").removeClass("highlight");
            $(".barExperience").addClass("highlight");
            $(".barContact").removeClass("highlight");
        } 
        //Contact sections
        else if (scroll > 3200) {
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
