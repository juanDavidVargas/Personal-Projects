
var pos = 0;
var int;
var flippedElement;
var opcionesSitio = [{opciones:[{opcion:'Lorem ipsum'}, {opcion:'Sit amet'},
                    {opcion:'dolor sit amet'}],costo:'xxx',paquete:'consectetur adipisicing elit'},
                    {opciones:[{opcion:'sed do eiusmod tempor'},{opcion:'incididunt ut labore'},
                    {opcion:'incididunt ut labore'}],costo: 'xxx',paquete:'incididunt ut labore'},
                    {opciones:[{opcion:'incididunt ut labore'},
                    {opcion:'incididunt ut labore'},{opcion:'incididunt ut labore'}],costo:'xxx',paquete:'incididunt ut labore'}];

$(document).ready(function() {
  init();
});
$(window).on('resize', init);
window.addEventListener('orientationchange', init);

function init()
{
  if($('html').width() > 900){

    $.stellar({
      'horizontalScrolling': false,
      hideDistantElements: false
    });
  }
  var sc = $.scrollorama({blocks:'.fullScreen', enablePin:false});
  sc.animate('.mensajePrincipal', {delay:700, duration:350, property:'top', end:500});
  sc.animate('.mensajePrincipal', {delay:700, duration: 200, property:'opacity', end:0});
  sc.animate('.precio', {delay:400, duration:200, property:'zoom', start:0, end: 1});
  sc.animate('.centerCircle', {delay:400, duration:200, property:'opacity', start:0, end:1});
  $("#navegacionPrincipal").localScroll();
  $('.slider_controls li').on('click', handleClick);
  var width = $('.slider_container').width();
  $('.slide').each(function(i, e) {
    // var url = $(e).data('background');
    // $(e).css('width', width+'px');
    // $(e).css('background-image', "url("+(url)+".jpg")+")";
    addBackground(e, width, true);
  });
  $('.img-food').on('click', changeViewPort);
  $('.img-food').each(function(i,e){
      addBackground(e, false);
      if($(e).hasClass('viewPort')) return true;
      $(e).data('top',((i) * 100));
      $(e).css({
          'top': $(e).data('top') + 'px'
      });
  });
  //$(document).on('click','.ver-mas',flipElement);
  $('.ver-mas').on('click', flipElement);

  //  clearInterval(int);
  int = setInterval(handleClick, 10000);
}
//google.maps.event.addDomListener(window, 'load', drawMap);
// function drawMap()
// {
//   var mapa;
//   var opcionesMapa = {
//     zoom: 15,
//     mapTypeId: google.maps.MapTypeId.ROADMAP
//   }
// mapa = new google.maps.Map(document.getElementById('google_canvas', opcionesMapa));
// navigator.geolocation.getCurrentPosition(function(posicion){
// var geolocalizacion = new google.maps.LatLng(posicion.coords.latitude, posicion.coords.longitude);
// var marcador = new google.maps.Marker({
//   map: mapa,
//   draggable: true,
//   position: geolocalizacion,
//   visible: true
// });
//  //marcador.setTitle('Dirección');
//   mapa.setCenter(geolocalizacion);
//   calcRoute(geolocalizacion, mapa);
// });
// }
// function calcRoute(inicio, mapa)
// {
//   var directionService = new google.maps.DirectionsService();
//   var directionRenderer = new google.maps.DirectionsRenderer();
//   directionRenderer.setMap(mapa);
//   var posicionSitio = new google.maps.LatLng();
//   var marcador = new google.maps.Marker({
//     map: mapa,
//     draggable: true,
//     position: posicionSitio,
//     visible: true
//   });
//   var request = {
//     origin: inicio,
//     destination: posicionSitio,
//     travelMode: google.maps.DirectionsTravelMode.DRIVING
//   }
//   directionService.route(request, function(response, status){
//     if (status == google.maps.DirectionsStatus.OK)
//     {
//         directionRenderer.setDirections(response);
//     }
//   });
// }
function changeViewPort()
{
  var e = $('.viewPort');
  e.css('top', $(e).data('top'));
  e.removeClass('viewPort');
  $(this).addClass('viewPort');
  $(this).css('top', 0);
}
function addBackground(element, width, setSize)
{
  if (!width) width = $('html').width();
  if (setSize) {
    $(element).css({
      'width': width,
      'height': $('html').height()
    });
  }
  var imagen = $(element).data('background');

    $(element).css('background-image', "url("+(imagen)+".jpg")+")";

  //$(element).css('background-image', "url("+(imagen)+".png")+")";
}

function flipElement()
{
  var padre = $(this).parent();
  flippedElement = padre;
  $(padre).flip({
    // if (flippedElement != null)
    // {
    //   $(flippedElement).revertflip();
    //   flippedElement = null;
    // }
    // $(flippedElement).remove();
    // trigger: 'hover',
    //  axis: 'x',
    axis: 'x',
    trigger: 'hover',
    reverse: true,
    direction: 'rl',
    speed: 500,
    content: '<h1>Ejemplo</h1>',
    color: '#f7f7f7',
    onEnd: function(){
      $('#regresarVentana').on('click', function(){
        $(flippedElement).revertflip();
        flippedElement = null;
      });
    }
  });
}

function handleClick()
{
  var slide_target = 0;
  if($(this).parent().hasClass('slider_controls')){
    slide_target = $(this).index();
    pos = slide_target;
    clearInterval(int);
    int = setInterval(handleClick, 10000);
  }else {
    pos++;
    if (pos >= $('.slide').length) {
      pos = 0;
    }
    slide_target = pos;
  }
  $('.slideContainer').animate({
    'margin-left': -(slide_target * $('.slider_container').width())+'px'
  },'slow');
  /*$('.slideContainer').fadeOut('slow', function() {
      $(this).animate({
          'margin-left': -(slide_target * $('.slider_container').width())+'px'
      }, 'slow', function(){
        $(this).fadeIn();
      });
  });*/
}
