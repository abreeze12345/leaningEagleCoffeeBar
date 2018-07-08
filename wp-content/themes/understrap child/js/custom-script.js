/* Sticky Navbar */
window.onscroll = function () {
    stickyNavbar()
};

var content = document.getElementById("sticky-navbar-content");
var navbar = document.getElementById("sticky-navbar");
var sticky = navbar.offsetTop;


function stickyNavbar() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
        content.classList.add("content-padding");
    } else {
        navbar.classList.remove("sticky");
        content.classList.remove("content-padding");
    }
};

$(window).on('scroll', function () {
    console.log($(this).scrollTop());
});


/* skrollr Front Page */
var s = skrollr.init();

/* Google Maps API */
var map;
var marker;

var chca = {lat: 39.277541, lng: -84.337331};


function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        center: chca,
        zoom: 11.5,
        styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
                featureType: 'administrative.locality',
                elementType: 'labels.text.fill',
                stylers: [{color: '#d59563'}]
            },
            {
                featureType: 'poi',
                elementType: 'labels.text.fill',
                stylers: [{color: '#d59563'}]
            },
            {
                featureType: 'poi.park',
                elementType: 'geometry',
                stylers: [{color: '#263c3f'}]
            },
            {
                featureType: 'poi.park',
                elementType: 'labels.text.fill',
                stylers: [{color: ''}]
            },
            {
                featureType: 'road',
                elementType: 'geometry',
                stylers: [{color: '#38414e'}]
            },
            {
                featureType: 'road',
                elementType: 'geometry.stroke',
                stylers: [{color: '#212a37'}]
            },
            {
                featureType: 'road',
                elementType: 'labels.text.fill',
                stylers: [{color: '#9ca5b3'}]
            },
            {
                featureType: 'road.highway',
                elementType: 'geometry',
                stylers: [{color: '#746855'}]
            },
            {
                featureType: 'road.highway',
                elementType: 'geometry.stroke',
                stylers: [{color: '#1f2835'}]
            },
            {
                featureType: 'road.highway',
                elementType: 'labels.text.fill',
                stylers: [{color: '#f3d19c'}]
            },
            {
                featureType: 'transit',
                elementType: 'geometry',
                stylers: [{color: '#2f3948'}]
            },
            {
                featureType: 'transit.station',
                elementType: 'labels.text.fill',
                stylers: [{color: '#d59563'}]
            },
            {
                featureType: 'water',
                elementType: 'geometry',
                stylers: [{color: '#17263c'}]
            },
            {
                featureType: 'water',
                elementType: 'labels.text.fill',
                stylers: [{color: '#515c6d'}]
            },
            {
                featureType: 'water',
                elementType: 'labels.text.stroke',
                stylers: [{color: '#17263c'}]
            }
        ]
    });
    marker = new google.maps.Marker({
        position: chca,
        map: map
    });
};

/* SECTION 1 Mobile Responsive */
var x = 1182;

function responsiveItem() {
    if($(window).width() < x) {
        $(".section-1-item").addClass("section-1-responsive");
        $(".section-1-item-1-row").addClass("section-1-item-1-row-responsive");
    }
    else {
        $(".section-1-item").removeClass("section-1-responsive");
        $(".section-1-item-1-row").removeClass("section-1-item-1-row-responsive");
    }
}

$(document).ready(function() {
    responsiveItem()
});
$(window).resize(function() {
    responsiveItem()
});


/* Map Section Padding Addition */
$(document).ready()