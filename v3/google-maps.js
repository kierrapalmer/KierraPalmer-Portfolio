var map;
$(document).ready(function () {

$('a.address').on('click', function(e){
    e.preventDefault();
    if(map!=null){
        center_map(map, 12);
    }
});
});
function init_map(){

      infowindow = new google.maps.InfoWindow();// create info window
      // // create map
      if($('#google-map').length > 0){
          map = new_map( $('#google-map') );
      }
      // maps.push(map);

  //  for(var i = 0; i < maps.length; i++){
      google.maps.event.addListenerOnce(map, 'idle', function(){
        document.getElementsByTagName('iframe')[0].title = "Google Map for Personal Portfolio Locations";
      });
  //  }

}

function new_map( $el ) {

  // var
  var $markers = $el.parent().find('.map-data .marker');
  //console.log($markers);

  // vars
  var args = {
    zoom    : 16,
    center    : new google.maps.LatLng(0,0),
    mapTypeId   : google.maps.MapTypeId.ROADMAP,
    streetViewControl : false,
    mapTypeControl : false,
    fullscreenControl : false,
    styles: 
// [{"elementType":"geometry","stylers":[{"color":"#f57000"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"geometry.stroke","stylers":[{"color":"#1d1d1c"}]},{"featureType":"administrative.province","stylers":[{"color":"#1d1d1c"},{"weight":0.5}]},{"featureType":"water","stylers":[{"color":"#1d1d1c"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#1d1d1c"}]}]
[{"elementType":"geometry","stylers":[{"color":"#f57000"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"geometry.stroke","stylers":[{"color":"#1d1d1c"}]},{"featureType":"administrative.province","stylers":[{"color":"#000000"},{"weight":0.5}]},{"featureType":"administrative.province","elementType":"labels.text","stylers":[{"color":"#4f4f4f"},{"weight":0.5}]},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","stylers":[{"color":"#1d1d1c"},{"weight":0.5}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"color":"#1d1d1c"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#1d1d1c"}]}]
            // styles: [ { "featureType": "all", "elementType": "labels", "stylers": [ { "saturation": "-100" } ] }, { "featureType": "administrative", "elementType": "all", "stylers": [ { "visibility": "simplified" } ] }, { "featureType": "administrative", "elementType": "geometry.stroke", "stylers": [ { "visibility": "on" } ] }, { "featureType": "landscape", "elementType": "all", "stylers": [ { "saturation": "-100" } ] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [ { "visibility": "simplified" }, { "color": "#fcfcfc" } ] }, { "featureType": "landscape", "elementType": "geometry.fill", "stylers": [ { "saturation": "-100" }, { "visibility": "on" } ] }, { "featureType": "landscape", "elementType": "labels", "stylers": [ { "saturation": "-32" } ] }, { "featureType": "landscape.man_made", "elementType": "labels", "stylers": [ { "saturation": "-100" } ] }, { "featureType": "landscape.natural", "elementType": "labels", "stylers": [ { "saturation": "-100" } ] }, { "featureType": "landscape.natural", "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ] }, { "featureType": "landscape.natural.terrain", "elementType": "labels", "stylers": [ { "saturation": "-100" } ] }, { "featureType": "poi", "elementType": "geometry", "stylers": [ { "visibility": "simplified" }, { "color": "#fcfcfc" } ] }, { "featureType": "poi", "elementType": "labels.icon", "stylers": [ { "visibility": "off" }, { "saturation": "-100" }, { "lightness": "100" } ] }, { "featureType": "road.highway", "elementType": "geometry", "stylers": [ { "visibility": "simplified" }, { "color": "#dddddd" } ] }, { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [ { "lightness": "-100" } ] }, { "featureType": "road.highway", "elementType": "labels.icon", "stylers": [ { "visibility": "off" }, { "saturation": "-100" } ] }, { "featureType": "road.arterial", "elementType": "geometry", "stylers": [ { "visibility": "simplified" }, { "color": "#dddddd" } ] }, { "featureType": "road.arterial", "elementType": "geometry.stroke", "stylers": [ { "lightness": "-100" } ] }, { "featureType": "road.arterial", "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [ { "visibility": "simplified" }, { "color": "#eeeeee" } ] }, { "featureType": "road.local", "elementType": "geometry.stroke", "stylers": [ { "lightness": "18" } ] }, { "featureType": "transit", "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ] }, { "featureType": "water", "elementType": "geometry", "stylers": [ { "visibility": "simplified" }, { "color": "#dddddd" } ] } ]
    // 

  };

  // create map
  var map = new google.maps.Map( $el[0], args);


  // add a markers reference
  map.markers = [];


  // add markers
  $markers.each(function(){

    add_marker( $(this), map );

  });


  // center map
  center_map( map );
  google.maps.event.trigger(map, 'resize');

  // return
  return map;

}


/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type  function
*  @date  8/11/2013
*  @since   4.3.0
*
*  @param   $marker (jQuery element)
*  @param   map (Google Map object)
*  @return  n/a
*/
function add_marker( $marker, map ) {

  //var vlat = parseFloat($marker.attr('data-latt'));
  var lngg = parseFloat($marker.data('lngg'));
  var latt = parseFloat($marker.data('latt'));
  var icon_image = $marker.data('icon-color');

  var latlng = new google.maps.LatLng( latt, lngg );//$marker.attr('data-lng') $marker.attr('data-lat')


  var myLatLng = {lat: latt, lng: lngg};
  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: icon_image
  });
  map.markers.push( marker );

  // if marker contains HTML, add it to an infoWindow
  if( $marker.html() )
  {

    // show info window when marker is clicked
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.setContent('');
      infowindow.setContent($marker.html());
      infowindow.open( map, marker );

    });


    // *
    // START INFOWINDOW CUSTOMIZE.
    // The google.maps.event.addListener() event expects
    // the creation of the infowindow HTML structure 'domready'
    // and before the opening of the infowindow, defined styles are applied.
    // http://en.marnoto.com/2014/09/5-formas-de-personalizar-infowindow.html
    // *
    google.maps.event.addListener(infowindow, 'domready', function() {

      // Reference to the DIV that wraps the bottom of infowindow
      var iwOuter = $('.gm-style-iw-d');

      /* Since this div is in a position prior to .gm-div style-iw.
       * We use jQuery and create a iwBackground variable,
       * and took advantage of the existing reference .gm-style-iw for the previous div with .prev().
      */
      var iwBackground = iwOuter.prev();

      // Removes background shadow DIV
      iwBackground.children(':nth-child(2)').css({'display' : 'none'});

      // Removes white background DIV
      iwBackground.children(':nth-child(4)').css({'display' : 'none'});

      // Changes the desired tail shadow color.
      //iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'rgba(72, 181, 233, 0.6) 0px 1px 6px', 'z-index' : '1'});
      iwBackground.children(':nth-child(3)').find('div').children().css({'background-color': '#E3233D', 'box-shadow': 'none'});

      // Reference to the div that groups the close button elements.
      var iwCloseBtn = iwOuter.next();

      // Apply the desired effect to the close button
      iwCloseBtn.css({opacity: '1', right: '-6px', top: '-6px', 'border-radius': '13px', 'z-index': 3});// close with the x button

      // The API automatically applies 0.7 opacity to the button after the mouseout event. This function reverses this event to the desired value.
      iwCloseBtn.mouseout(function(){
        $(this).css({opacity: '1'});
      });
    });


  }


}


/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type  function
*  @date  8/11/2013
*  @since   4.3.0
*
*  @param   map (Google Map object)
*  @return  n/a
*/
function center_map( map, zoom=null ) {
//console.log(map);
  // vars
  var bounds = new google.maps.LatLngBounds();

  // loop through all markers and create bounds
  $.each( map.markers, function( i, marker ){

    var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

    bounds.extend( latlng );

  });

  // zoom set?
  if( zoom != null )
  {
    //console.log(' = 1');
    // set center of map
    map.setCenter( bounds.getCenter() );
    map.setZoom( zoom );
  }
 // else if(map.markers.length == 0){//when no address is set, center on UT
 else{
    //console.log(' = 0')
    map.setCenter( new google.maps.LatLng(40, -111) );
    map.setZoom( 4 );
  }
  // else
  // {
  //   //console.log(' > 1');
  //   // fit to bounds
  //   map.fitBounds( bounds );
  // }

}





//
var mapLoadedInitialized = false;

if ($(window).width() > 719) {
  mapLoadedInitialized = true;
}


$(window).on('resize', function() {
  if (!mapLoadedInitialized) {
    if ($(window).width() > 719) {
      mapLoadedInitialized = true;
      // console.log('it was resized above 719');
      setTimeout(function(){init_map()},1);
    }
  }
});


// (function($) {
//
// })(jQuery);

function myResize(){
  setTimeout(function() {
      for(var i = 0; i < maps.length; i++){
          maps[i].setZoom( 16 );
      }
  }, 350);
}



//Keep track of logged errors and switch maps if a (any) error is logged
console.defaultError = console.error.bind(console);
console.errors = [];
console.error = function(){
    console.defaultError.apply(console, arguments);
    console.errors.push(Array.from(arguments));
    // console.log(console.errors.length);
    if(console.errors.length > 0){
        switchMaps();
    }
}

function switchMaps(){
    console.log('ERROR: Custom Google Map could not be loaded. Switching map to default.');
    $('.free-map').removeClass('hide');
    $('.custom-map').addClass('hide');
}

