require('./bootstrap');


function init() {
  expandCard();
  keyUpQuery();
  addressClick();
}

//espansione card
function expandCard() {
  $('.card_apt').click(function () {
    $(this).find('.text_info').toggleClass('active_card');
    $(this).find('.text_info_shade').toggleClass('active_shd');
  });
}


//cambio header on scroll
$(function () {
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > 10) {
      $('.navbar').addClass('active');
    } else {
      $('.navbar').removeClass('active');
    }
  });
});


// ---------------------------- inizio codice ricerca località sul form ------------------>

  function ajaxCall(query) {

      $.ajax({
          url: "https://api.tomtom.com/search/2/geocode/" + query + ".json",
          method: "GET",
          data: {
              countrySet: "IT",
              extendedPostalCodesFor: "Addr",
              key: "k1RGzu2BVnevz10AcJPx4YynmWzDDGGk"
          },
          success: function(data) {

            var lat = data["results"][0]["position"]["lat"];
            var lon = data["results"][0]["position"]["lon"];

            console.log(lat);  // <------questo mostra la latitudine
            console.log(lon); // <------questo mostra la longitudine
            console.log(data["results"]); // <------questo mostra l'oggettone data results

          }  // -----------------------fine della success data -----------------

        });     // ------------------fine della chiamata ajax------------------------

   } // ----------------------------fine della function AjaxCall(query)-----------

//  funzione che attiva il monitoraggio al click della casella di ricerca dove vuoi andare?
function addressClick() {
    $("#indirizzo").on("click", function() {
        $("#latitude").val($(this).data("lat"));
        $("#longitude").val($(this).data("lon"));
        $("#indirizzo").val($(this).text());
        // lancio la funzione che attiva il monitoraggio del pulsante cerca
        sendSearch();
    });
}

//  funzione che attiva il monitoraggio al click del pulsante Cerca
function sendSearch() {
  $("#pulsanteCerca").on("click", function(){
    console.log("maccio-capatosta");
  })
}
function keyUpQuery() {
    function delay(callback, ms) {
        var timer = 0;
        return function() {
            var context = this,
                args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function() {
                callback.apply(context, args);
            }, ms || 0);
        };
    }

    // Esempio d'uso:

    $("#indirizzo").keyup(
        delay(function() {
            var query = $(this).val();
            if (query !== null) {
              console.log(query);     // <-- mostra il nome della località cercata nella input form
            }
        }, 500)
    );

 } // ---------------------> FINE FUNZIONE keyUpQuery() <-------------------------

 // <----------------------- inizio codice mappe TOMTOM -------------------------->

 //
 // const GOLDEN_GATE_BRIDGE = {lng: -122.47483, lat: 37.80776};
 //  var map = tt.map({
 //    key: "k1RGzu2BVnevz10AcJPx4YynmWzDDGGk",
 //    container: 'map-div',
 //    center: GOLDEN_GATE_BRIDGE,
 //    zoom: 12
 //  });


// <----------------------- fine codice mappe TOMTOM -------------------------->


$(document).ready(init);
