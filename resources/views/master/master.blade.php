<!DOCTYPE html>
<html lang="en">

@include('master.head')
<body class="index-page sidebar-collapse" style="min-height: 0px; !important">

	<header>
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent navbar-landing" color-on-scroll="400">
			<div class="container">
			<div class="navbar-translate">
				<a class="navbar-brand" href="{{ route('index') }}" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
					<img style="min-width: 15vw;" id="nav-logo" src="{{ asset('assets/img/LogoGardaHorizontal.svg') }}">
				</a>
				<button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-bar top-bar"></span>
				<span class="navbar-toggler-bar middle-bar"></span>
				<span class="navbar-toggler-bar bottom-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" id="about-us-btn" target="_blank">
						<p style="text-shadow: 2px 1px 3px rgba(0, 0, 0, 1);">TENTANG</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="service-plan-btn" target="_blank">
						<p style="text-shadow: 2px 1px 3px rgba(0, 0, 0, 1);">LAYANAN</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link contact-us-btn" target="_blank">
						<p style="text-shadow: 2px 1px 3px rgba(0, 0, 0, 1);">KONTAK</p>
						</a>
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
						<i class="now-ui-icons design_app" style="text-shadow: 2px 1px 3px rgba(0, 0, 0, 1);"></i>
						<p style="text-shadow: 2px 1px 3px rgba(0, 0, 0, 1);">PUBLIKASI</p>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
						<a class="dropdown-item" href="./index.html">
							<i class="now-ui-icons business_chart-pie-36"></i> TERBITAN
						</a>
						<a class="dropdown-item movement-btn" target="_blank">
							<i class="now-ui-icons design_bullet-list-67"></i> VIDEO
						</a>
						</div>
					</li>
				</ul>
			</div>
			</div>
		</nav>
		<!-- End Navbar -->
	</header>

<div class="rightbar-overlay"></div>

<div class="main-content">
	@yield('content')
	<!--  End Modal -->
    <footer class="footer" data-background-color="black">
		<div class=" container ">
		  {{-- <nav>
			<ul>
			  <li>
				<a href="https://www.creative-tim.com">
				  Creative Tim
				</a>
			  </li>
			  <li>
				<a href="http://presentation.creative-tim.com">
				  About Us
				</a>
			  </li>
			  <li>
				<a href="http://blog.creative-tim.com">
				  Blog
				</a>
			  </li>
			</ul>
		  </nav> --}}
		  <div class="copyright" id="copyright">
			&copy;
			<script>
			  document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
			</script>, <a href="https://www.instagram.com/indonesia.king.maker/" target="_blank">PT. GARDA CREATIVE ORGANIZER</a>
			<br>
			Made Happen With <a href="https://www.instagram.com/meowlidas/" target="_blank">Arushi & Co</a>.
		  </div>
		</div>
	  </footer>
</div>

@include('master.script')
</body>

</html>
