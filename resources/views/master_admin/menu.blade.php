<div data-simplebar class="h-100">
	<div class="row">
		<!--- Sidemenu -->
	<div id="sidebar-menu" style="text-align: start;">
		<!-- Left Menu Start -->
		<ul class="metismenu list-unstyled" id="side-menu" style="font-size: 1rem;font-weight: initial; line-height: normal;-webkit-font-smoothing: antialiased;">
			<li class="menu-title" key="t-menu">Menu</li>
			<li>
				<a href="{{ route('index_qr') }}" class="waves-effect">
					<i class="bx bx-home-circle"></i>
					<span key="t-dashboards">Dashboards</span>
				</a>
			</li>
			<li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class="bx bx-folder-open"></i>
					<span key="t-email">Artikel</span>
				</a>
				<ul class="sub-menu" aria-expanded="false">
					<li><a href="{{ }}" key="t-read-email">Buat Artikel</a></li>
				</ul>
			</li>			
		</ul>
	</div>
	<!-- Sidebar -->

    <style>
        .sidebar-menu {
        text-align : start !important;
        }
    </style>
	</div>
</div>
