@extends('perpustakaan.app', ['activePage' => 'Blog'])

@section('header')

@include('perpustakaan.blog.blog-detail.header')

@endsection

@section('content')

<!-- Start post-content Area -->
<section class="post-content-area single-post-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 posts-list">
				<div class="single-post row">
					<div class="col-lg-12">
						<div class="feature-img">
							<img class="img-fluid" style="width: 100%;height: 450px;"
								src="{{ asset('asset') }}/upload/artikel/{{ $artikels->cover }}" alt="">
						</div>
					</div>
					<div class="col-lg-3  col-md-3 meta-details">
						<ul class="tags">
							<li><a href="#">{{$artikels->label}}</a></li>
						</ul>
						<div class="user-details row">
							<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">{{$artikels->author}}</a> <span
									class="lnr lnr-user"></span></p>
							<p class="date col-lg-12 col-md-12 col-6"><a
									href="#">{{$artikels->created_at->format('d M, Y')}}</a> <span
									class="lnr lnr-calendar-full"></span></p>
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
						<h3 class="mt-20 mb-20">{{$artikels->judul}}</h3>
						{{-- <p class="excert">
							Kebanggaan bagi SMK Wikrama Bogor kala Wali Kota Bogor Bima Arya Sugiarto hadir menjadi pembina pada upacara bendera, belum lama ini. Dalam amanatnya, Bima menyam­paikan harapan agar warga Bogor mampu menjadi warga mega­politan yang menghormati keari­fan lokal, mampu berpikir global, dan beradaptasi secara inter­nasional.
						</p> --}}

						{!!$artikels->deskripsi!!}

					</div>
				</div>
				
			</div>
			@include('perpustakaan.navbar.sidebar')
		</div>
	</div>
</section>
<!-- End post-content Area -->
@endsection