<!-- Start top-category-widget Area -->
<section class="top-category-widget-area pt-90 pb-90 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-cat-widget">
                    <div class="content relative">
                        <div class="overlay {{ ($selectedMenu == 'E-Book') ? ' over-active' : 'overlay-bg' }}"></div>
                        <a href="{{ route('perpustakaan_e-book')}}">
                            <div class="thumb">
                                <img class="content-image img-fluid d-block mx-auto"
                                    src="{{ asset('perpus/img/kindle-1245899_640.jpg')}}" alt="">
                            </div>
                            <div class="content-details">
                                <h4 class="content-title mx-auto text-uppercase">E-BOOK</h4>
                                <span></span>
                                <p>Read Lead Success</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-cat-widget">
                    <div class="content relative">
                        <div class="overlay {{ ($selectedMenu == 'Video') ? ' over-active' : 'overlay-bg' }}"></div>
                        <a href="{{ route('perpustakaan_video')}}">
                            <div class="thumb">
                                <img class="content-image img-fluid d-block mx-auto"
                                    src="{{ asset('perpus/img/ipad.jpg')}}" alt="">
                            </div>
                            <div class="content-details">
                                <h4 class="content-title mx-auto text-uppercase">VIDEO</h4>
                                <span></span>
                                <p>Dream it. Wish it. Do it</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-cat-widget">
                    <div class="content relative">
                        <div class="overlay {{ ($selectedMenu == 'Blog') ? ' over-active' : 'overlay-bg' }}"></div>
                        <a href="{{ route('perpustakaan_blog')}}">
                            <div class="thumb">
                                <img class="content-image img-fluid d-block mx-auto"
                                    src="{{ asset('perpus/img/tea-time.jpg')}}" alt="">
                            </div>
                            <div class="content-details">
                                <h4 class="content-title mx-auto text-uppercase">BLOG</h4>
                                <span></span>
                                <p>Little things make big days</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End top-category-widget Area -->