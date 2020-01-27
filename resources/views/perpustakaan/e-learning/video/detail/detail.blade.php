@extends('perpustakaan.app', ['activePage' => 'E-Learning'])

@section('header')

@include('perpustakaan.e-learning.video.detail.header')

@endsection

@section('content')

<!-- Start post-content Area -->
<section class="post-content-area single-post-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 posts-list">
				<div class="single-post row">
					<div class="col-lg-12">
						<div class="feature-img" align="center">
							<!-- <img class="img-fluid" src="img/blog/feature-img1.jpg" alt=""> -->
							<iframe width="700" height="400" src="https://www.youtube.com/embed/{{$tubes->link}}"
								frameborder="0"
								allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-lg-3  col-md-3 meta-details">
						<ul class="tags">
							<li><a href="#">Food,</a></li>
							<li><a href="#">Technology,</a></li>
							<li><a href="#">Politics,</a></li>
							<li><a href="#">Lifestyle</a></li>
						</ul>
						<div class="user-details row">
							<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">{{ $tubes->author }}</a> <span
									class="lnr lnr-user"></span></p>
							<div class="row">
								<p class="mr-1 date col-lg-12 col-md-12 col-6"><a
										href="#">{{ $tubes->created_at->formatLocalized('%d %B, %Y') }}</a> <span
										class="lnr lnr-calendar-full"></span></p>
							</div>
							<p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span
									class="lnr lnr-eye"></span></p>
							<p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span
									class="lnr lnr-bubble"></span></p>
							<ul class="social-links col-lg-12 col-md-12 col-6">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-9 col-md-9">
						<h3 class="mt-20 mb-20">{{ $tubes->judul }}</h3>
						{!! $tubes->deskripsi !!}
					</div>
				</div>
				
			
			</div>
			@include('perpustakaan.navbar.sidebar')
		</div>
	</div>
</section>
<!-- End post-content Area -->

@endsection