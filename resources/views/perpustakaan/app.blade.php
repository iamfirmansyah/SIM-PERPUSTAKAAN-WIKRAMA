<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Perpustakaan</title>

	<!--
			Google Font
			============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">

	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="{{ asset('perpus/css/linearicons.css')}}">
	<link rel="stylesheet" href="{{ asset('perpus/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('perpus/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('perpus/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{ asset('perpus/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{ asset('perpus/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{ asset('perpus/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{ asset('perpus/css/main.css')}}">
	<link rel="stylesheet" href="{{ asset('perpus/css/main.css')}}">
</head>

<body>
	<!-- End Faculty Area -->
	<style>
		.cours {
			width: 200px;
			height: 300px
		}


		.nav-foc:hover {
			cursor: pointer;
		}

		.img-popular:hover {}

		.grab:hover {
			cursor: -webkit-grab;
			cursor: grab;
		}

		/*.grab:focus{cursor: -webkit-grabbing; cursor: grabbing;}*/
	</style>



	<!-- Start Header Area -->
	@include('perpustakaan.navbar.navbar')
	<!-- End Header Area -->


	<!-- Start Banner Area -->
	@yield('header')
	<!-- End Banner Area -->

	<!-- Start Content Area -->
	@yield('content')
	<!-- End Content Area -->

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#"></a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	@include('perpustakaan.navbar.footer')

	<script src="{{ asset('perpus/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
	</script>
	<script src="{{ asset('perpus/js/vendor/bootstrap.min.js')}}"></script>
	<script type="text/javascript"
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="{{ asset('perpus/js/easing.min.js')}}"></script>
	<script src="{{ asset('perpus/js/hoverIntent.js')}}"></script>
	<script src="{{ asset('perpus/js/superfish.min.js')}}"></script>
	<script src="{{ asset('perpus/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{ asset('perpus/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('perpus/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('perpus/js/owl-carousel-thumb.min.js')}}"></script>
	<script src="{{ asset('perpus/js/jquery.sticky.js')}}"></script>
	<script src="{{ asset('perpus/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('perpus/js/parallax.min.js')}}"></script>
	<script src="{{ asset('perpus/js/waypoints.min.js')}}"></script>
	<script src="{{ asset('perpus/js/wow.min.js')}}"></script>
	<script src="{{ asset('perpus/js/jquery.counterup.min.js')}}"></script>
	<script src="{{ asset('perpus/js/mail-script.js')}}"></script>
	<script src="{{ asset('perpus/js/main.js')}}"></script>
</body>
<script>
	var owl = $('.owl-carousel');
owl.owlCarousel({
    items:1,
    loop:true,
margin:130,
    autoplay:true,
    autoplayTimeout:1100,
      autoplayHoverPause:true,

});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1100])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
</script>

</html>