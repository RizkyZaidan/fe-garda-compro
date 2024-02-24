<!DOCTYPE html>
<html lang="en">

@include('master_admin.head')
<body data-sidebar="dark" style="min-height: 0px; !important">

	<!-- Begin page -->
	<div id="layout-wrapper">

		<header id="page-topbar">
			<div class="navbar-header">
				<div class="d-flex">
					<!-- LOGO -->
					<div class="navbar-brand-box">
						<a href="{{ route('dashboard.index') }}" class="logo logo-dark">
							<span class="logo-sm">
								<img src="{{ asset('assets/img/LogoGardaHorizontal.svg') }}" alt="" height="22">
							</span>
							<span class="logo-lg">
								<img src="{{ asset('assets/img/LogoGardaHorizontal.svg') }}" alt="" height="17">
							</span>
						</a>

						<a href="{{ route('dashboard.index') }}" class="logo logo-light">
							<span class="logo-sm">
								<img src="{{ asset('assets/img/LogoGardaHorizontal.svg') }}" alt="" height="25">
							</span>
							<span class="logo-lg">
								<img src="{{ asset('assets/img/LogoGardaHorizontal.svg') }}" alt="" height="70">
							</span>
						</a>
					</div>
					@if(Route::currentRouteName()!='index_qr')
					<button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
						<i class="fa fa-fw fa-bars"></i>
					</button>
					@endif

					<!-- App Search-->
					{{-- <form class="app-search d-none d-lg-block">
						<div class="position-relative">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="bx bx-search-alt"></span>
						</div>
					</form> --}}
				</div>
                <div class="d-flex">

                </div>

				<div class="d-flex">
                    <div  class="dropdown d-inline-block notif-dropdown">
                        <button type="button" class="btn header-item noti-icon waves-effect pill" id="button-notifikasi" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i class="bx bx-bell"></i>
                            <span class="badge badge-danger badge-pill" id="total-notif">0</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0 hide" aria-labelledby="page-header-notifications-dropdown" style="position: absolute; transform: translate3d(-274px, 70px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-end">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0" key="t-notifications"> Notifikasi </h6>
                                    </div>
                                    <div class="col-auto">
										<a href="#popup" class="small" key="t-view-all" data-toggle="modal" data-target="#popup"> Lihat Semua</a>
									</div>
                                </div>
                            </div>
                            <div data-simplebar="init" style="max-height: 230px;">
								<div class="simplebar-wrapper" style="margin: 0px;">
									<div class="simplebar-height-auto-observer-wrapper">
										<div class="simplebar-height-auto-observer">
										</div>
									</div>
									<div class="simplebar-mask">
										<div class="simplebar-offset" style="right: -16.5714px; bottom: 0px;">
											<div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
												<div class="simplebar-content" id="notif-content" style="padding: 0px;">
                                

												</div>
											</div>
										</div>
									</div>
									<div class="simplebar-placeholder" style="width: auto; height: 388px;">
									</div>
								</div>
								<div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
									<div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;">
									</div>
								</div>
								<div class="simplebar-track simplebar-vertical" style="visibility: visible;">
									<div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: block; height: 136px;">
									</div>
								</div>
							</div>
							<div class="p-2">
                            </div>
                        </div>
                    </div>
					<div class="dropdown d-inline-block">
						<button type="button" class="btn header-item waves-effect profile" id="page-header-user-dropdown"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						@if(session()->get('foto') =="File Photo not found")
						<img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/avatar-5.jpg') }}" alt="foto">
						@else
						<img class="rounded-circle header-profile-user" src="data:image/png;base64, {{ session()->get('foto') }}" alt="foto">
						@endif
						<span class="d-none d-xl-inline-block ml-1" key="t-henry">{{ session()->get('nama')}}</span>
						<i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
					</button>
					<div class="dropdown-menu dropdown-menu-right">
						<!-- item-->
						{{-- <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> <span key="t-profile">Profile</span></a>
						<a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle mr-1"></i> <span key="t-my-wallet">My Wallet</span></a>
						<a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> <span key="t-settings">Settings</span></a>
						<a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle mr-1"></i> <span key="t-lock-screen">Lock screen</span></a>
						<div class="dropdown-divider"></div> --}}
						@if(Route::currentRouteName()!='index_qr')
						<a class="dropdown-item text-danger" href="{{ route('logout') }}"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> <span key="t-logout">Logout</span></a>
						@else
						<a class="dropdown-item text-danger" href="{{ route('logout_qr') }}"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> <span key="t-logout">Logouttt</span></a>
						@endif
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- ========== Left Sidebar Start ========== -->
	
	<div class="vertical-menu">
		@include('master.menu')
	</div>
	<!-- Left Sidebar End -->

	<!-- ============================================================== -->
	<!-- Start right Content here -->
	<!-- ============================================================== -->
	<div class="main-content">
		@yield('content')
		<footer class="footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<script>document.write(new Date().getFullYear())</script> © Div TI Bjbs
					</div>
					<div class="col-sm-6">
						<div class="text-sm-right d-none d-sm-block">
							Design & Developed by Div TI Bjbs
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!-- end main content-->

</div>

<div class="rightbar-overlay"></div>

@include('master.script')
</body>

</html>
