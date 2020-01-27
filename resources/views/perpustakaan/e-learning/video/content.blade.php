@extends('perpustakaan.app', ['activePage' => 'Video'])

@section('header')

@include('perpustakaan.e-learning.video.header')

@endsection

@section('content')

@include('perpustakaan.e-learning.topMenu',['selectedMenu' => 'Video'])
<!-- Start post-content Area -->
<section class="post-content-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 posts-list">
				@foreach($tubes as $tube)
				<div class="single-post row">
					<div class="col-lg-3 col-md-3 meta-details">
						<ul class="tags">
							<li><a href="#">Food,</a></li>
							<li><a href="#">Technology,</a></li>
							<li><a href="#">Politics,</a></li>
							<li><a href="#">Lifestyle</a></li>
						</ul>
						<div class="user-details row">
							<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">{{ $tube->author }}</a>
								<span class="lnr lnr-user"></span>

							</p>
							<div class="row">
								<p class="mr-2 view col-lg-12 col-md-12 col-6"><a
										href="#">{{ $tube->created_at->formatLocalized('%d %B, %Y') }}</a> <span
										class="lnr lnr-calendar-full"></span></p>
							</div>
							<p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span
									class="lnr lnr-eye"></span></p>
							<p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span
									class="lnr lnr-bubble"></span></p>
						</div>
					</div>
					<div class="col-lg-9 col-md-9">
						<div class="feature-img">
							<img class="img-fluid" src="https://img.youtube.com/vi/{{ $tube->link }}/mqdefault.jpg
							"" alt="">
						</div>
						<a class=" posts-title" href="{{ route('perpustakaan_blog')}}">
							<h3>{{ $tube->judul }}</h3>
							</a>
							<p class="excert">
								{!! substr($tube->deskripsi, 0,300) !!}...
							</p>
							<a href="/perpustakaan/video/{{$tube->id}}" class="primary-btn">View More</a>
						</div>
					</div>
					@endforeach
					<nav aria-label="tubes">
						<ul class="pagination justify-content-end mb-0">
							{{ $tubes->links("perpustakaan.pagination.default") }}
						</ul>
					</nav>
				</div>
				@include('perpustakaan.navbar.sidebar')
			</div>
		</div>
</section>
<!-- End post-content Area -->
@endsection