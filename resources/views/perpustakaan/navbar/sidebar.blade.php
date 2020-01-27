<div class="col-lg-4 sidebar-widgets">
    <div class="widget-wrap">
        <!-- 						<div class="single-sidebar-widget search-widget">
							<form class="search-form" action="#">
								<input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<div class="single-sidebar-widget user-info-widget">
							<img src="{{ asset('perpus/img/blog/user-info.png')}}" alt="">
							<a href="#"><h4>Charlie Barber</h4></a>
							<p>
								Senior blog writer
							</p>
							<ul class="social-links">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
							<p>
								Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot
								camp when you can get. Boot camps have itssuppor ters andits detractors.
							</p>
						</div> -->
        <div class="single-sidebar-widget popular-post-widget">
            <h4 class="popular-title">Latest E-Book</h4>
            <div class="popular-post-list">
                @foreach ($ebookViews as $ebookView)
                <div class="single-post-list d-flex flex-row align-items-center">
                    <div class="item">
                        {{-- <img class="avatar avatar-sm rounded-rounded"
                            src="{{ asset('asset')}}/upload/ebook/{{ $ebookView->cover }}" alt=""> --}}
                        <img src="{{ asset('asset')}}/upload/ebook/{{ $ebookView->cover }}" class=""
                            style="margin-right: 7px" width="80px">
                    </div>
                    <div class="details">
                        <a href="{{ route('perpustakaan_e-book')}}">
                            <h6>{{ $ebookView->judul }}</h6>
                        </a>
                        <p>{{ $ebookView->created_at->formatLocalized('%d %B, %Y') }}</p>
                    </div>
                </div>
                @endforeach
            </div>


            <div class="single-sidebar-widget ads-widget">
                <div class="row">
                    <div class="col-md-12  img-fluid" align="center">
                        <!-- <h1 class="text-center">Buku</h1>	 -->
                        <div class="large-12 columns">
                            <div class="owl-carousel owl-theme grab" style="margin-top: -20px">
                                @foreach ($CarouselebookViews as $CarouselebookView)

                                <div class="item cours"><br>
                                    <img src="{{asset('asset')}}/upload/ebook/{{ $CarouselebookView->cover}}">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="single-sidebar-widget post-category-widget">
                <h4 class="category-title">Post Catgories</h4>
                <ul class="cat-list">
                    <li>
                        <a href="#" class="d-flex justify-content-between">
                            <p>Technology</p>
                            <p>37</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex justify-content-between">
                            <p>Lifestyle</p>
                            <p>24</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex justify-content-between">
                            <p>Fashion</p>
                            <p>59</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex justify-content-between">
                            <p>Art</p>
                            <p>29</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex justify-content-between">
                            <p>Food</p>
                            <p>15</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex justify-content-between">
                            <p>Architecture</p>
                            <p>09</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex justify-content-between">
                            <p>Adventure</p>
                            <p>44</p>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="single-sidebar-widget newsletter-widget">
                <h4 class="newsletter-title">Newsletter</h4>
                <p>
                    Here, I focus on a range of items and features that we use in life without giving them a second
                    thought.
                </p>
                <div class="form-group d-flex flex-row">
                    <div class="col-autos">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                        </div>
                    </div>
                    <a href="#" class="bbtns">Subcribe</a>
                </div>
                <p class="text-bottom">
                    You can unsubscribe at any time
                </p>
            </div>
            <div class="single-sidebar-widget tag-cloud-widget">
                <h4 class="tagcloud-title">Tag Clouds</h4>
                <ul>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Architecture</a></li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Food</a></li>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Lifestyle</a></li>
                    <li><a href="#">Art</a></li>
                    <li><a href="#">Adventure</a></li>
                    <li><a href="#">Food</a></li>
                    <li><a href="#">Lifestyle</a></li>
                    <li><a href="#">Adventure</a></li>
                </ul>
            </div>
        </div>
    </div>