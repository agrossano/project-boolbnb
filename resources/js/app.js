require('./bootstrap');

function init() {
    expandCard();
    apartmentCoordinates();
    searchApartment();
    showMap();
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
var myCover = ["/assets/video/cover1.mp4", "/assets/video/cover2.mp4", "/assets/video/cover3.mp4", "/assets/video/cover4.mp4", "/assets/video/cover5.mp4", "/assets/video/cover6.mp4", "/assets/video/cover7.mp4"];

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
    element.animate({opacity: '0'}, 150, function () {
        element.animate({height: '0px'}, 150, function () {
            element.remove();
        });
    });
}


// funzione ricerca coordinate appartamento
function apartmentCoordinates() {
    $('.address').keyup(function () {
        var address = $('.address').val();
        $.ajax({
            url: "https://api.tomtom.com/search/2/geocode/" + address + ".json",
            method: "GET",
            data: {
                key: "LXS830AiWeCA3ogV5iiftuD8GgwteTOE"
            },
            success: function success(data) {
                var results = data["results"];
                var lat = results[0]["position"]["lat"];
                var lon = results[0]["position"]["lon"];
                $(".lat-app").val(lat);
                $(".lon-app").val(lon);
            }
        });
    });
}

// funzione ricerca appartamenti dalla barra search home
function searchApartment() {
    $('#search-app').keyup(function () {
        var input = $('#search-app').val();
        $.ajax({
            url: "https://api.tomtom.com/search/2/search/" + input + ".json",
            method: "GET",
            data: {
                key: "LXS830AiWeCA3ogV5iiftuD8GgwteTOE"
            },
            success: function success(data) {
                var results = data["results"];
                var lat = results[0]["position"]["lat"];
                var lon = results[0]["position"]["lon"];
                $("#lat").val(lat);
                $("#lon").val(lon);
                console.log(results[0]["position"]);
            }
        });
    });
}

function showMap() {
  var latitude = $('#current-lat').val();
  var longitude = $('#current-lon').val();
  var coordinates = [longitude, latitude];
  console.log(coordinates);
  var map = tt.map({
    container: 'map',
    key: 'LXS830AiWeCA3ogV5iiftuD8GgwteTOE',
    style: 'tomtom://vector/1/basic-main',
    center: coordinates,
    zoom: 15
  });
  var marker = new tt.Marker().setLngLat(coordinates).addTo(map);
  var popupOffsets = {
    top: [0, 0],
    bottom: [0, -70],
    'bottom-right': [0, -70],
    'bottom-left': [0, -70],
    left: [25, -35],
    right: [-25, -35]
  }

  var popup = new tt.Popup({offset: popupOffsets}).setHTML("Siamo qui");
  marker.setPopup(popup).togglePopup();
  var popup = new tt.Popup({offset: popupOffsets}).setHTML("Appartamento");
}




$(document).ready(init);
