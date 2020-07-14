require('./bootstrap');


function init() {
  expandCard();
  keyUpQuery();
  addressClick();
  $(document).on("click", ".remove", rimuoviEl);
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

//opacità freccia homepage sullo scroll
$(window).scroll(function () {

  //salva posizione scroll
  var topWindow = $(window).scrollTop();

  var topWindow = topWindow * 1.2;

  //salva grandezza finestra
  var windowHeight = $(window).height();

  //setta la posizione come percentuale di quanto l'user ha scrollato
  var position = topWindow / windowHeight;

  position = 1 - position;

  $('.arrow-wrap').css('opacity', position);

});


//smooth scroll freccia homepage
$(function () {
  $('a[href*=\\#]:not([href=\\#])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


window.onload = choosePic;
var myCover = new Array("/assets/video/cover1.mp4", "/assets/video/cover2.mp4", "/assets/video/cover3.mp4", "/assets/video/cover4.mp4", "/assets/video/cover5.mp4", "/assets/video/cover6.mp4", "/assets/video/cover7.mp4");

function choosePic() {
  var randomNum = Math.floor(Math.random() * myCover.length);
  document.getElementById("cover").src = myCover[randomNum];
}


//effetti parallasse scroll home page
$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  $('.text').css('transform', 'translate3d(0, ' + $(this).scrollTop() * -0.3 + 'px, 0)');
  $('.main-search').css('transform', 'translate3d(0, ' + $(this).scrollTop() * -0.5 + 'px, 0)');
  $('.img-scroll-right').css('transform', 'translate3d(0, ' + $(this).scrollTop() * 0.5 + 'px, 0)');
  $('.img-scroll-left').css('transform', 'translate3d(0, ' + $(this).scrollTop() * -0.3 + 'px, 0)');
  $('.illustra').css('transform', 'translate3d(0, ' + $(this).scrollTop() * 0.06 + 'px, 0)');
  $(".home").css({
    width: (100 + scroll / 5) + "%"
  })
}).scroll();


// rimuovi elemento animaz
function rimuoviEl() {
  console.log('ca');
  var element = $(this).closest(".card")
  element.animate({ opacity: '0' }, 150, function () {
    element.animate({ height: '0px' }, 150, function () {
      element.remove();
    });
  });
}



// ---------------------------- inizio codice ricerca località sul form ------------------>

function ajaxCall(query) {

  $.ajax({
    url: "https://api.tomtom.com/search/2/geocode/" + query + ".json",
    method: "GET",
    data: {
      countrySet: "IT",
      // extendedPostalCodesFor: "Addr",
      key: "k1RGzu2BVnevz10AcJPx4YynmWzDDGGk"
    },
    success: function (data) {

      var lat = data["results"][0]["position"]["lat"];
      var lon = data["results"][0]["position"]["lon"];
      var city = data["results"][0]["address"]["municipality"];
      var address = data["results"][0]["address"]["streetName"];
      console.log(lat);  // <------questo mostra la latitudine
      console.log(lon); // <------questo mostra la longitudine
      console.log(city);// <------questo mostra il primo risultato come località restituita dalla chiamata
      console.log(address);// <------questo mostra il primo risultato dell'indirizzo della località restituita dalla chiamata
      console.log(data["results"]); // <------questo mostra l'oggettone data results

    }  // -----------------------fine della success data -----------------

  });     // ------------------fine della chiamata ajax------------------------

} // ----------------------------fine della function AjaxCall(query)-----------

//  funzione che attiva il monitoraggio al click della casella di ricerca dove vuoi andare?
function addressClick() {
  $("#indirizzo").on("click", function () {
    // $("#latitude").val($(this).data("lat"));
    // $("#longitude").val($(this).data("lon"));
    // $("#indirizzo").val($(this).text());
    // lancio la funzione che attiva il monitoraggio del pulsante cerca
    sendSearch();
  });
}

//  funzione che attiva il monitoraggio al click del pulsante Cerca
function sendSearch(query) {
  $("#bottoneInvio").on("click", function () {
    ajaxCall(query);
  })
}
function keyUpQuery() {
  function delay(callback, ms) {
    var timer = 0;
    return function () {
      var context = this,
        args = arguments;
      clearTimeout(timer);
      timer = setTimeout(function () {
        callback.apply(context, args);
      }, ms || 0);
    };
  }

  // Esempio d'uso:

  $("#indirizzo").keyup(
    delay(function () {
      var query = $(this).val();
      if (query !== null) {
        // console.log(query); // <-- monitora i tasti premuti nella input form
        sendSearch(query)
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
