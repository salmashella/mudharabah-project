
<!DOCTYPE HTML>
<html>
<head>
<title>BMT Prima Syariah</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
 <!-- js-->
<script src="/js/jquery-1.11.1.min.js"></script>
<script src="/js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="/js/wow.min.js"></script>
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="/js/metisMenu.min.js"></script>
<script src="/js/custom.js"></script>
<link href="/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						@if(session('Jabatan') == 1)
						<li>
							<a href="#"><i class="fa fa-cogs nav_icon"></i>Pembiayaan  <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="/lihatpembiayaan">Lihat Pembiayaan</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
                            <li>
                                <a href="#"><i class="fa fa-book nav_icon"></i>Pegawai  <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li>
                                        <a href="/lihatpegawai">Daftar Pegawai</a>
                                    </li>

                                </ul>
                                <!-- /nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-envelope nav_icon"></i>Nasabah<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">

                                    <li>
                                        <a href="/lihatnasabah">Daftar Nasabah</a>
                                    </li>
                                </ul>
                                <!-- //nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-check-square-o nav_icon"></i><span class="fa arrow"></span>Rekening</a>
                                <ul class="nav nav-second-level collapse">

                                    <li>
                                        <a href="/lihatrekening">Daftar Rekening</a>
                                    </li>
                                    <li>
                                        <a href="/jurnal">Jurnal Transaksi</a>
                                    </li>
                                </ul>
                                <!-- //nav-second-level -->
                            </li>
						@endif

						@if(session('Jabatan') == 2)
						<li class="">
							<a href="#"><i class="fa fa-book nav_icon"></i>Pegawai <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="/formpegawai">Tambah Pegawai<span class="nav-badge-btm"></span></a>
								</li>
								<li>
									<a href="/lihatpegawai">Daftar Pegawai</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-envelope nav_icon"></i>Nasabah<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="/formnasabah"> Tambah Nasabah<span class="nav-badge-btm"></span></a>
								</li>
								<li>
									<a href="/lihatnasabah">Daftar Nasabah</a>
								</li>
							</ul>
							<!-- //nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-check-square-o nav_icon"></i><span class="fa arrow"></span>Rekening</a>
							<ul class="nav nav-second-level collapse">
								{{--<li>--}}
									{{--<a href="/formrekening">Tambah Rekening<span class="nav-badge-btm"></span></a>--}}
								{{--</li>--}}
								<li>
									<a href="/lihatrekening">Daftar Rekening</a>

								</li>

							</ul>
							<!-- //nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-file-text-o nav_icon"></i>Pembiayaan<span class="nav-badge-btm"></span><span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="/formpembiayaan">Tambah Pembiayaan</a>
								</li>
								<li>
									<a href="/lihatpembiayaan">Daftar Pembiayaan</a>
								</li>
							</ul>
							<!-- //nav-second-level -->
						</li>
						@endif

						@if(session('Jabatan') == 3)

						<li>
							<a href="#"><i class="fa fa-file-text-o nav_icon"></i>Data Pembayaran<span class="nav-badge-btm"></span><span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="/formpembayaran">Tambah Pembayaran</a>
								</li>
								<li>
									<a href="/lihatpembayaran">Daftar Pembayaran</a>
								</li>
                                <li>
                                    <a href="/jurnal">Jurnal Transaksi</a>
                                </li>
							</ul>
							<!-- //nav-second-level -->
						</li>
                        <li>
                            <a href="#"><i class="fa fa-file-text-o nav_icon"></i>Tambah Saldo Rekening<span class="nav-badge-btm"></span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="/lihatrekening">Tambah Saldo</a>
                                </li>
                                {{--<li>--}}
                                    {{--<a href="/lihatnasabah">Lihat Nasabah</a>--}}
                                {{--</li>--}}
                            </ul>
                            <!-- //nav-second-level -->
                        </li>
                        {{--<li>--}}
                            {{--<a href="#"><i class="fa fa-file-text-o nav_icon"></i>Pembiayaan<span class="nav-badge-btm"></span><span class="fa arrow"></span></a>--}}
                            {{--<ul class="nav nav-second-level collapse">--}}
                                {{--<li>--}}
                                    {{--<a href="/lihatpembiayaan">Daftar Pembiayaan</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                            {{--<!-- //nav-second-level -->--}}
                        {{--</li>--}}
						@endif
					</ul>
					<div class="clearfix"> </div>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="/home">
						<h1>Baitul Maal</h1>
						<span>Prima Syariah</span>
					</a>
				</div>
				<!--//logo-->
				<!--search-box-->
				
				<div class="clearfix"> </div>
			</div>
			
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/user.png" alt=""> </span>
									<div class="user-name">
										<span>{{ session('Nama_Pegawai') }}</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								
								<li> <a href="/logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>	      
				<div class="clearfix"> </div>	
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page general">
								
				@yield('content')
				
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>Design by Salma Shella @2017</p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="/js/jquery.nicescroll.js"></script>
	<script src="/js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="/js/bootstrap.js"> </script>

    <script src="/js/validator.min.js"></script>
    <script src="/js/dataTables/jquery.dataTables.js"></script>
    <script src="/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
</body>
</html>