// // event pada saat link di klik

// $('.page-scroll').on('click', function(e){

// 	// ambil isi href
// 	var tujuan = $(this).attr('href');
// 	// // tangkap elemen yang bersangkutan
// 	var elemnttujuan = $(tujuan);
// 	// // pindahkan scroll

// 	$('html, body').animate({
// 		scrollTop:elemnttujuan.offset().top - 100
// 	});


// 	// console.log($('html, body').scrollTop());

// 	e.preventDefault();

// });

// $('.page-scroll').on('click', function(e) {

//  var tujuan = $(this).attr('href');

//  var elemenTujuan = $(tujuan);

//  $('html , body').animate({
//   scrollTop: elemenTujuan.offset().top - 50
//  });

//  e.preventDefault();
// });



$(document).ready(function(){

  // Add smooth scrolling to all links

  $(".page-scroll").on('click', function(event) {



    // Make sure this.hash has a value before overriding default behavior

    if (this.hash !== "") {

      // Prevent default anchor click behavior

      event.preventDefault();



      // Store hash

      var hash = this.hash;



      // Using jQuery's animate() method to add smooth page scroll

      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    
      $('html, body').animate({

        scrollTop: $(hash).offset().top -100

      }, 1000, function(){

   

        // Add hash (#) to URL when done scrolling (default click behavior)

        window.location.hash = hash;

      });

    }; // End if

  });

});