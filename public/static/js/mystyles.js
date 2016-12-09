$('#myButton').on('click', function () {
  var $btn = $(this).button('loading')
  // business logic...
  $btn.button('reset')
})

$(document).ready(function() {
 
  $("#owl_edit_product").owlCarousel({
      autoPlay: 3000, //Set AutoPlay to 3 seconds
      items : 2

  });
 
});

// SEARCH PAGE FOR SORTING
$( "#search_sort" ).change(function() {
  // $( "#search_sort" ).submit();
  alert("asdasd");
});

// PRODUCT PAGE FOR SORTING /account/products/ 
$( "#account_sort" ).change(function() {
  $( "#account_sort" ).submit();
});


// AUTHOR PAGE FOR SORTING
$( "#author_sort" ).change(function() {
  $( "#author_sort" ).submit();
});


// CURRENCY FORMAT
function currency(n, currency) {
    return currency + " " + n.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,");
}


// COUNT PRIZE
$(".quantity_product").change(function(){
  var price = $(this).attr('data-price');  
  var quantity_product = $(".quantity_product").val()

  // initialize on popup and edit shopping
  $(".price_result").val(quantity_product * price);  

  //if jumlah produk > $quantity_product
  // if quantity_product > 
});


// SLIDE FOR SHOPPING CART 
$(document).ready(function() {
 
  $("#edit-shopping-cart-owl").owlCarousel({
     autoHeight : true,
     pagination : false

  });
 
});




// REGION SETTINGS FOR MAP
// $( "#region" ).change(function() {
//   alert( "Handler for .change() called." );
// });

// Bootstrap tooltips
$('[data-toggle="tooltip"]').tooltip();

$("#price-slider").change(function(){
  alert("asdda");
});


$(document).ready(function () {
    $('input[id=kedai-tags-input]').tooltip({'trigger':'focus'});
});

$(document).ready(function(){
	$("#input-4").fileinput({showCaption: false}); 
});

$(document).ready(function(){
	$("#category").change(function(){
		category = $("#category").val();
		$.ajax({
			method: "POST",
	        url: "/ajax/sub_category/",
	        data: { category : category },
	        cache: false,
	        beforeSend: function() {
			    
			},
	        success: function(data){
	            $('#status_sub_category').slideDown("slow");	
	            $("#sub_category").removeAttr("disabled");
	            $('#sub_category').html(data).selectpicker('refresh');
	        }
	    });
	});
});





$('.item').magnificPopup({
    type:'image',
    delegate: 'img',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    }
  });



// var fixmeTop = $('.fixed-after-scrolled').offset().top;
$(window).scroll(function() {
    var currentScroll = $(window).scrollTop();
    if (currentScroll >= fixmeTop) {
        $(".fixed-after-scrolled").fadeIn(3000);
        $('.fixed-after-scrolled').css({
            position: 'fixed',
            top: '10px'
        });

    } else {
        $('.fixed-after-scrolled').css({
            position: 'static'
        });
    }
});

// GOOGLE MAPS ON SETTINGS
var map;
var marker;
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng($(".account_latitude").val(),$(".account_longtitude").val()),
    zoom:14,
    mapTypeId:google.maps.MapTypeId.ROADMAP,
    scrollwheel: false,
    panControl:true, 
    zoomControl:true,
    mapTypeControl:true,
    scaleControl:false,
    streetViewControl:false,
    overviewMapControl:false,
    rotateControl:false
  };

  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);


  // Default Markers
  var marker=new google.maps.Marker({
    position:new google.maps.LatLng($(".account_latitude").val(),$(".account_longtitude").val()),
    draggable: true,
    animation:google.maps.Animation.DROP
  });
  marker.setMap(map);

  // when map click
  google.maps.event.addListener(map, 'click', function(event) {
    marker.setMap(null);    
    latitude = event.latLng.lat()
    longtitude = event.latLng.lng()

    marker = new google.maps.Marker({
      map: map,
      position: event.latLng

    }); 

    // assigment to html (account settings)
    $(".account_latitude").val(latitude);
    $(".account_longtitude").val(longtitude);

    var infowindow = new google.maps.InfoWindow({
      content:"Disini Lokasi Keudee Anda!"
    });
    infowindow.open(map, marker);
    
  });


  var infowindow = new google.maps.InfoWindow({
    content:"Lokasi Keudee Anda!"
  });

  infowindow.open(map, marker);

}
google.maps.event.addDomListener(window, 'load', initialize);