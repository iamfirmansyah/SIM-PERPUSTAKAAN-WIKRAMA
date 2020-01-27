@extends('perpustakaan.app', ['activePage' => 'E-Book'])

@section('header')

@include('perpustakaan.e-learning.e-book.header')

@endsection

@section('content')

<!-- Start top-category-widget Area -->
@include('perpustakaan.e-learning.topMenu',['selectedMenu' => 'E-Book'])
<!-- End top-category-widget Area -->

<!-- Start post-content Area -->
<section class="post-content-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 posts-list">
				@foreach($books as $book)
				<div class="single-post row">
					<div class="col-lg-3  col-md-3 meta-details">
						<ul class="tags">
							<li><a href="#">{{ $book->nama_kategori }}</a></li>
						</ul>
						<div class="user-details row">
							<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">{{ $book->pengarang }}</a> <span
									class="lnr lnr-user"></span></p>
							<p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2018</a> <span
									class="lnr lnr-calendar-full"></span></p>
							<p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span
									class="lnr lnr-eye"></span></p>
							<p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span
									class="lnr lnr-bubble"></span></p>
						</div>
					</div>
					<div class="col-lg-9 col-md-9 ">
						<div class="text-center">
							<img class="img-fluid" src="{{ asset('asset') }}/upload/ebook/{{ $book->cover }}" alt=""
								width="200px">
						</div>
						<a class="posts-title" href="{{ route('perpustakaan_e-book_detail', $book->id) }}">
							<h3>{!!$book->judul !!}</h3>
						</a>
						{!! $book->deskripsi !!}
						<a href="{{ route('perpustakaan_e-book_detail', $book->id) }}" class="primary-btn">View More</a>
					</div>
				</div>
				@endforeach

				<nav aria-label="books">
					<ul class="pagination justify-content-end mb-0">
						{{ $books->links("perpustakaan.pagination.default") }}
					</ul>
				</nav>

			</div>
			@include('perpustakaan.navbar.sidebar')
		</div>
	</div>
</section>
<!-- End post-content Area -->
@endsection