$(document).ready(function () {
    var backgroundColor = $(".bar").css("background-color");
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        

        var aboutSection = $('.about').get(0).getBoundingClientRect();
        var portfolioSection = $('.portfolio').get(0).getBoundingClientRect();
        var experienceSection = $('.experience').get(0).getBoundingClientRect();
        var contactSection = $('.contact').get(0).getBoundingClientRect();
        var offset = 200;

        if (aboutSection.top - offset < 0)
            $(".bar").css("background-color", "#333");        
        else
            $(".bar").css("background-color", backgroundColor);
            
        //About Section
        if (aboutSection.top - offset < 0 && aboutSection.bottom - offset > 0 ) {
            $(".barAbout").addClass("highlight");
            $(".barPortfolio").removeClass("highlight");
            $(".barExperience").removeClass("highlight");
            $(".barContact").removeClass("highlight");                      
        } 
        //Porfolio sections
        else if (portfolioSection.top - offset - 90 < 0 && portfolioSection.bottom - offset > 0 ) {
            $(".barAbout").removeClass("highlight");
            $(".barPortfolio").addClass("highlight");
            $(".barExperience").removeClass("highlight");
            $(".barContact").removeClass("highlight");
        } 
        //Experience sections
        else if (experienceSection.top - offset - 90 < 0 && experienceSection.bottom - offset > 0 ) {
            $(".barAbout").removeClass("highlight");
            $(".barPortfolio").removeClass("highlight");
            $(".barExperience").addClass("highlight");
            $(".barContact").removeClass("highlight");
        } 
        //Contact sections
        else if (contactSection.top - offset - 90 < 0 && contactSection.bottom - offset > 0 ) {
            $(".barAbout").removeClass("highlight");
            $(".barPortfolio").removeClass("highlight");
            $(".barExperience").removeClass("highlight");
            $(".barContact").addClass("highlight");
        } 
        else{
            $(".barItem").css("color", "white");
            $(".barItem").removeClass("highlight"); 
        }
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
