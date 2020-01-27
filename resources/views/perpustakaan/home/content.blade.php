@extends('perpustakaan.app', ['activePage' => 'Home'])

@section('header')

@include('perpustakaan.home.header')

@endsection

@section('content')
<style>
	.cours {
		width: 150px;
		height: 230px;
		margin: 0px;
	}

	 !important;
</style>

<!-- Start About Area -->
<section class="about-area section-gap">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-5 col-md-6 about-left">
				<img class="img-fluid" src="{{asset('perpus/img/about.jpg')}}" alt="">
			</div>
			<div class="offset-lg-1 col-lg-6 offset-md-0 col-md-12 about-right">
				<h1>
					Over 2500 Courses <br> from 5 Platform
				</h1>
				<div class="wow fadeIn" data-wow-duration="1s">
					<p>
						There is a moment in the life of any aspiring astronomer that it is time to buy that first
						telescope. It’s exciting to think
						about setting up your own viewing station. In the life of any aspiring astronomer that it is
						time to buy that first
						telescope. It’s exciting to think about setting up your own viewing station.
					</p>
				</div>
				<a href="{{ route('perpustakaan_blog') }}" class="primary-btn">Explore Courses</a>
			</div>
		</div>
	</div>
</section>
<!-- End About Area -->


<!-- Start Courses Area -->
<section class="courses-area section-gap">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5 about-right">
				<h1>
					This is Why <br> We have Solid Idea
				</h1>
				<div class="wow fadeIn" data-wow-duration="1s">
					<p>
						There is a moment in the life of any aspiring astronomer that it is time to buy that first
						telescope. It’s exciting to think
						about setting up your own viewing station. In the life of any aspiring astronomer that it is
						time to buy that first
						telescope. It’s exciting to think about setting up your own viewing station.
					</p>
				</div>
				<a href="{{ route('perpustakaan_blog') }}" class="primary-btn white">Explore Courses</a>
			</div>
			<div class="offset-lg-1 col-lg-6">
				<div class="courses-right">
					<div class="row">
						@foreach($kategoriViews as $kategoriView)
						<div class="col-lg-6 col-md-6 col-sm-12">
							<ul class="courses-list">
								<li>
									<a class="wow fadeInLeft" href="{{ route('perpustakaan_blog') }}"
										data-wow-duration="1s" data-wow-delay=".{{ $a++}}s">
										<i class="fa fa-book"></i> {{ $kategoriView->nama_kategori }}
									</a>
								</li>
							</ul>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Courses Area -->


<!--Start Feature Area -->
<section class="feature-area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center">
					<h1>Features That Make Us Hero</h1>
					<p>
						If you are looking at blank cassettes on the web, you may be very confused at the difference in
						price. You may see some for
						as low as $.17 each.
					</p>
				</div>
			</div>
		</div>
		<div class="feature-inner row">
			<div class="col-lg-4 col-md-6">
				<div class="feature-item">
					<i class="ti-crown"></i>
					<h4>Architecture</h4>
					<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
						<p>
							Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt
							labore.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="feature-item">
					<i class="ti-briefcase"></i>
					<h4>Interior Design</h4>
					<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
						<p>
							Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt
							labore.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="feature-item">
					<i class="ti-medall-alt"></i>
					<h4>Concept Design</h4>
					<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
						<p>
							Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt
							labore.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="feature-item">
					<i class="ti-key"></i>
					<h4>Lifetime Access</h4>
					<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
						<p>
							Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt
							labore.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="feature-item">
					<i class="ti-files"></i>
					<h4>Source File Included</h4>
					<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
						<p>
							Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt
							labore.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="feature-item">
					<i class="ti-headphone-alt"></i>
					<h4>Live Support</h4>
					<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
						<p>
							Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt
							labore.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Feature Area -->


<!-- Start Faculty Area -->
<section class="faculty-area section-gap">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center">
					<h1>Popular Book</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla ipsam, vero alias sed rem itaque
						enim dicta error magni, unde minima amet, nisi qui et odit fuga totam, quae ipsa.
					</p>
				</div>
			</div>
		</div>
		<d<div class="row">
			<div class="col-md-12  img-fluid" align="center">
				<!-- <h1 class="text-center">Buku</h1>	 -->
				<div class="large-12 columns">
					<div class="owl-carousel owl-theme grab" style="margin-top: -20px">
						@foreach ($CarouselebookViews as $CarouselebookView)

						<div class="cours">
							<img src="{{asset('asset')}}/upload/ebook/{{ $CarouselebookView->cover}}">
						</div>
						@endforeach
					</div>
				</div>
			</div>
	</div>
	</div>

</section>
@endsection