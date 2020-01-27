<!-- Start Header Area -->
<header id="header">
	<div class="container">
		<div class="row align-items-center justify-content-between d-flex">
			<div id="logo">
				<a href="{{ route('perpustakaan')}}"><img src="{{ asset('perpus/img/logo.png')}}" alt="" title="" /></a>
			</div>
			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li class="{{ ($activePage == 'Home') ? ' menu-active' : '' }}"><a
							href="{{ route('perpustakaan') }}">Home</a></li>

					<li class="{{ ($activePage == 'E-Book') ? ' menu-active' : '' }}"><a
							href="{{ route('perpustakaan_e-book') }}">E-Book</a></li>
					<li class="{{ ($activePage == 'Video') ? ' menu-active' : '' }}"><a
							href="{{ route('perpustakaan_video') }}">E-Tube</a></li>
					<li
						class="menu-has-children nav-foc text-white {{ ($activePage == 'Blog') ? ' menu-active' : '' }}">
						<a href="{{ route('perpustakaan_blog') }}">Blog</a>
					</li>
					<li class="nav-foc"><a
							style="{{ ($activePage == 'Other') ? ' color: cyan' : 'color: white' }}">Other</a>
						<ul>
							<li class=" {{ ($activePage == 'About') ? ' menu-active' : '' }}"> <a
									href="{{ route('perpustakaan_about') }}">About Us</a></li>
							<li class="{{ ($activePage == 'Contact') ? ' menu-active' : '' }}"><a
									href="{{ route('perpustakaan_contact') }}">Contact</a></li>
						</ul>
					</li>


				</ul>
			</nav><!-- #nav-menu-container -->
		</div>
	</div>
</header>
<!-- End Header Area -->