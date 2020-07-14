require('./bootstrap');


function init() {
  expandCard();
  ajaxSearch();
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


 // // <----------------------- inizio codice mappe TOMTOM -------------------------->
 //
 //
 // const GOLDEN_GATE_BRIDGE = {lng:12.49427 , lat:41.89056 };
 //  var map = tt.map({
 //    key: "k1RGzu2BVnevz10AcJPx4YynmWzDDGGk",
 //    container: 'map-div',
 //    center: GOLDEN_GATE_BRIDGE,
 //    zoom: 12
 //  });
 //

// <----------------------- fine codice mappe TOMTOM -------------------------->

 // if ($("#bottoneInvio").clicked == true) {
  function ajaxSearch() {
    $('#indirizzo').keyup(function () {
      var input = $('#indirizzo').val();
      console.log(input);
      $.ajax({
        url: "https://api.tomtom.com/search/2/search/" + input + ".json",
        method: "GET",
        data: {
          limit:2,
          countrySet: "IT",
          key: "k1RGzu2BVnevz10AcJPx4YynmWzDDGGk"
        },
        success: function success(data) {
          var results = data["results"];
          console.log(results);

          if (results == 0) {
            console.log('la ricerca non ha prodotto risultati');
          } else {
            var lat = results[0]["position"]["lat"];
            var lon = results[0]["position"]["lon"];
            var address = results[0]["address"]["streetName"];
            var city = results[0]["address"]["municipality"];
            $("input[name=lat]").val(lat);
            $("input[name=lon]").val(lon);
          }
        },
        error: function(err) {
            console.log("err");
        }
      })
    })
  }
// }


$(document).ready(init);
