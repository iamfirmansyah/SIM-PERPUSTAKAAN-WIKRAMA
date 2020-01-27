@extends('perpustakaan.app', ['activePage' => 'Other'])

@section('header')

@include('perpustakaan.contact.header')

@endsection

@section('content')

<!-- Start top-category-widget Area -->

<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
	<div class="container">
		<div class="row" style="margin-bottom: 5%">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.017368638352!2d106.84111231478589!3d-6.644764395195257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c89505b4c37d%3A0x307fc4a38e65fa2b!2sSMK%20Wikrama%20Bogor!5e0!3m2!1sid!2sid!4v1569395619241!5m2!1sid!2sid"
				style="width:100%;height: 445px;" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
		<div class="row">
			<!-- <div class="map-wrap"   id="map"></div> -->

			<div class="col-lg-4 d-flex flex-column address-wrap">
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-home"></span>
					</div>
					<div class="contact-details">
						<h5>SMK WIKRAMA BOGOR</h5>
						<p>
							Jl. Raya Wangun, Kel. Sindangsari <br>
							Kec. Bogor Timur - Kota Bogor
						</p>
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-phone-handset"></span>
					</div>
					<div class="contact-details">
						<h5>(0251)-8242411</h5>
						<p>Mon to Fri 9am to 6 pm</p>
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-envelope"></span>
					</div>
					<div class="contact-details">
						<h5>prohumasi@smkwikrama.sch.id</h5>
						<p>Send us your query anytime!</p>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<form class="form-area contact-form text-right" action="{{route('perpustakaan_contact.store')}}"
					method="post">
					{{ csrf_field() }}
					@if ($errors->count() > 0)
					<ul>
						@foreach ($errors->all() as $item)
						<li>{{ $item }}</li>
						@endforeach
					</ul>
					@endif
					<div class="row">
						<div class="col-lg-6 form-group">
							<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control"
								required type="text">

							<input name="address" placeholder="Enter email address"
								pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
								class="common-input mb-20 form-control" required type="email">

							<input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control"
								required type="text">
						</div>
						<div class="col-lg-6 form-group">
							<textarea class="common-textarea form-control" name="message" placeholder="Enter Messege"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'"
								required></textarea>
						</div>
						<div>
							<input type="hidden" name="status" value="unread">
						</div>
						<div class="col-lg-12">
							<button type="submit" class="btn primary-btn" style="float: right;">Send Message</button>

						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</section>
<!-- End contact-page Area -->

@endsection