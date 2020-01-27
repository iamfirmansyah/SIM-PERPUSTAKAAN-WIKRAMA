@extends('perpustakaan.app', ['activePage' => 'E-Learning'])

@section('header')

@include('perpustakaan.e-learning.e-book.detail.header')

@endsection

@section('content')

<!-- Start post-content Area -->
<section class="post-content-area single-post-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 posts-list">


				<!-- Start Content -->


				<div class="single-post row">
					<div class="col-lg-12" style="margin-bottom: 10px">
						<!-- 							
							<div class="feature-img" align="center" >
								<img class="img-fluid" src="img/blog/feature-img1.jpg" alt="">
								
							</div> -->
						<style>
							.fonte {
								color: #3E3E3E;
								letter-spacing: 0.8px;
								line-height: 1.2;
								;
								font-family: Quicksand, sans-serif !important;
								font-weight: 300 !important;
							}

							.tipe {
								font-size: .8em;
								color: #a2a2a2;
							}
						</style>
						<div class="row">
							<div class="col-md-4">
								<img class="text-center shadow rounded img-responsive"
									src="{{ asset('asset') }}/upload/ebook/{{ $book->cover }}" width="210px" alt=""><br>
								<p class="text-center" style="font-size: 14px;margin-top:10px;"><a href="">Download
										E-Book <i class=" fa fa-download"></i></a></p>
							</div>
							<div class="col-md-8" style="padding-top: 1%;">
								<br>
								<span class="tipe">Reguler <i class="fa fa-question-circle"></i></span>
								<h2 class="fonte">{!! $book->judul !!}</h2>
								<p style="font-size: 15.5px;padding-top: 1.5%;  letter-spacing: 0.3px;">Disusun Oleh :
									<a href="" style="color: #3498db">{{ $book->pengarang }}</a></p>

							</div>
						</div>
					</div>
					<!-- 	<div class="col-lg-3  col-md-3 meta-details">
							<div class="img-fluid">
								<img src="https://www.dicoding.com/images/original/academy/menjadi_android_developer_expert_logo_070119140352.jpg" width="150px" alt="">
							</div>
							<ul class="tags">
								<li><a href="#">Food,</a></li>
								<li><a href="#">Technology,</a></li>
								<li><a href="#">Politics,</a></li>
								<li><a href="#">Lifestyle</a></li>
							</ul>
							<div class="user-details row">
								<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Mark wiens</a> <span class="lnr lnr-user"></span></p>
								<p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2017</a> <span class="lnr lnr-calendar-full"></span></p>
								<p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span class="lnr lnr-eye"></span></p>
								<p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span class="lnr lnr-bubble"></span></p>
								<ul class="social-links col-lg-12 col-md-12 col-6">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-github"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>
							</div>
						</div> -->
					<div class="col-lg-12 col-md-12">
						<!-- <h3 class="">Ruang Guru atau Kejar.id ?</h3> -->
						<!-- 							<p class="excert mt-20 mb-20">
								MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money
								on boot camp when you can get the MCSE study materials yourself at a fraction.
							</p>
							<p>
								Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot
								camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower
								to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed
							</p>
							<p>
								Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot
								camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower
								to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed
							</p> -->
						<ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-top: 3%;">
							<li class="nav-item">
								<a class="nav-link active" id="informasi-tab" data-toggle="tab" href="#informasi"
									role="tab" aria-controls="informasi" aria-selected="true">Deskripsi Buku</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="tugas-tab" data-toggle="tab" href="#tugas" role="tab"
									aria-controls="tugas" aria-selected="false">Detail</a>
							</li>

						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="informasi" role="tabpanel"
								aria-labelledby="informasi-tab">
							<br>
								{!! $book->deskripsi !!}
							</div>
							<div class="tab-pane fade" id="tugas" role="tabpanel" aria-labelledby="tugas-tab">
								<div class="row " style="margin-top: 3%;">
									<div class="col-md-3">
										<p>Judul</p>
										<p>Jumlah Halaman</p>
										<p>Tahun Terbit</p>
										<p>ISBN</p>
										<p>Bahasa</p>
										<p>Penerbit</p>
									</div>
									<div class="col-md-6">
										<p style="font-weight: 600">{!! $book->judul !!}</p>
										<p style="font-weight: 600">{{ $book->jumlah_halaman}}</p>
										<p style="font-weight: 600">{{ $book->tahun_terbit }}</p>
										<p style="font-weight: 600">{{ $book->isbn }}</p>
										<p style="font-weight: 600">Indonesia</p>
										<p style="font-weight: 600">{{ $book->penerbit }}</p>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- End Content -->



				<div class="navigation-area">
					<div class="row">
						
					</div>
				</div>
				
			</div>
			@include('perpustakaan.navbar.sidebar')
		</div>
	</div>
</section>
<!-- End post-content Area -->
@endsection