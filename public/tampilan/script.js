// event pada saat link di klik
$('.page-scroll').on('click', function(e){

	// ambil isi href
  var tujuan = $(this).attr('href');
  
  // // tangkap elemen yang bersangkutan
  var elementujuan = $(tujuan);
  
	// // pindahkan scroll
	$('html, body').animate({
		scrollTop:elementujuan.offset().top - 100
  }, 1200, 'swing');
  
	e.preventDefault();

});




