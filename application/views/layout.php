<!doctype html>
<html lang="en">

<head>
	<title><?php echo $title; ?> &mdash; Point Of Sale </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-chosen.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/flaticon/flaticon.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- DataTables -->
	<link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/formatnumber.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pace-min.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pace-min.js"></script>
	<!-- ICONS -->
	<meta name="theme-color" content="#3498db">
	<!-- <link rel="icon" sizes="192x192" href="<?php echo base_url() ?>assets/img/logo-q.png"> -->
	<style>
            .sub-menu {
                display: none;
            }
            .active {
                background-color: #f3f5f8;
            }
        </style>
</head>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="#"><img src="<?php echo base_url(); ?>assets/img/logo5.png" alt="Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="ti-menu" alt="Menu"></i></button>
					<button type="button"><i class="ti-fullscreen" onclick="toggleFullScreen()" alt="Fullscreen"></i></button>
				</div>
				<ul class="nav navbar-nav navbar-right">
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="log">Administrator <span class="ti-angle-down" style="font-size: 11px; margin-left: 5px;"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="#"><span class="ti-user"> Profile Saya</span></a></li>
			            <li><a href="#"><span class="ti-lock"> Ganti Password</span></a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="<?php echo base_url(); ?>"><span class="ti-power-off"> Logout</span></a></li>
			          </ul>
			        </li>
		      	</ul>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div id="scroll">
				<nav>
					<ul class="nav">
						<li class="group">Dashboard</li>
						<li><a href="<?php echo base_url(); ?>dashboard"><i class="ti-home red"></i> <span>Dashboard</span></a></li>
						<li class="group">Barang</li>
						<li><a href="<?php echo base_url() ?>barang"><i class="ti-package blue"></i> <span>Data Barang</span></a></li>
						<li class="group">Transaksi</li>
						<li>
							<a href="#2" data-toggle="collapse" class="collapsed"><i class="ti-shopping-cart green"></i> <span>Pembelian</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="2" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo base_url() ?>pembelian" class=""><i class="ti-shopping-cart red"></i> Pembelian Barang</a></li>
									<li><a href="<?php echo base_url() ?>pelunasanbeli" class=""><i class="ti-money brown"></i> Pelunasan</a></li>
									<li><a href="<?php echo base_url() ?>returbeli" class=""><i class="ti-reload green"></i> Retur Pembelian</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#3" data-toggle="collapse" class="collapsed"><i class="ti-bag purple"></i> <span>Penjualan</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="3" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo base_url() ?>penjualan" class=""><i class="ti-shopping-cart red"></i> Penjualan Barang</a></li>
									<li><a href="<?php echo base_url() ?>pelunasanjual" class=""><i class="ti-money brown"></i> Pelunasan</a></li>
									<li><a href="<?php echo base_url() ?>returjual" class=""><i class="ti-reload green"></i> Retur Penjualan</a></li>
								</ul>
							</div>
						</li>
						<li><a href="<?php echo base_url() ?>pos" target="_blank"><i class="ti-credit-card red"></i> <span>Point Of Sale</span></a></li>
						<li><a href="<?php echo base_url() ?>shop" target="_blank"><i class="ti-shopping-cart purple-1"></i> <span>eCommerce</span></a></li>
						<li><a href="#"><i class="ti-agenda orange"></i> <span>Biaya Beban</span></a></li>
						<li class="group">Setting Data</li>
						<li>
							<a href="#1" data-toggle="collapse" class="collapsed"><i class="ti-settings light-blue"></i> <span>Master Data</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="1" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo base_url() ?>supplier" class=""><i class="lnr lnr-user orange"></i> Supplier</a></li>
									<li><a href="<?php echo base_url() ?>pelanggan" class=""><i class="lnr lnr-users green"></i> Pelanggan</a></li>
									<li><a href="<?php echo base_url() ?>pegawai" class=""><i class="lnr lnr-users indigo"></i> Pegawai</a></li>
									<li><a href="<?php echo base_url() ?>jabatan" class=""><i class="ti-stats-up"></i> Jabatan</a></li>
									<li><a href="<?php echo base_url() ?>kategori" class=""><i class="lnr lnr-tag orange-1"></i> Kategori Barang</a></li>
									<li><a href="<?php echo base_url() ?>kategorip" class=""><i class="lnr lnr-users"></i> Kategori Pelanggan</a></li>
									<li><a href="<?php echo base_url() ?>satuan" class=""><i class="lnr lnr-list blue"></i> Satuan Barang</a></li>
									<li><a href="<?php echo base_url() ?>syaratbayar" class=""><i class="lnr lnr-list red"></i> Syarat Bayar</a></li>
									<li><a href="<?php echo base_url() ?>bank" class=""><i class="ti-money green"></i> Bank</a></li>
									<li><a href="<?php echo base_url() ?>rekening" class=""><i class="ti-money blue"></i> Rekening</a></li>
									<li><a href="<?php echo base_url() ?>kota" class=""><i class="lnr lnr-map-marker"></i> Kota</a></li>
									<li><a href="<?php echo base_url() ?>warna" class=""><i class="lnr lnr-sun"></i> Warna</a></li>
								</ul>
							</div>
						</li>
						<li class="group">Laporan</li>
						<li><a href="#"><i class="ti-bar-chart brown"></i> <span>Laporan</span></a></li>

					</ul>
				</nav>
			</div>
			
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">	
			<?php $this->load->view($isi); ?>
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2018 <a href="http://akure-solusi.com" target="_blank" id="Quick Count">Akure Solusi</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	
		
        
	<!-- Javascript -->
	<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/chosen.jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/fullscreen.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/jQuery-slimScroll-1.3.8/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/scripts/klorofil-common.js"></script>

	<!-- DATA TABLES -->
	<script src="<?php echo base_url(); ?>assets/js/dataTables/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/dataTables/dataTables.bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/dataTables/dataTables.buttons.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/dataTables/buttons.bootstrap.min.js" type="text/javascript"></script>
    <script>
	    $(document).ready(function() {
	        $('#data').DataTable({
	            "oLanguage": {
	                "sSearch": "<i class='fa fa-search fa-fw'></i> Pencarian : ",
	                "sLengthMenu": "_MENU_ &nbsp;&nbsp;",
	                "sInfoFiltered": "(Difilter dari _MAX_ total data)",
	                "sZeroRecords": "Pencarian tidak ditemukan",
	                "sEmptyTable": "Data Kosong",
	                "sLoadingRecords": "Harap Tunggu...",
	                "oPaginate": {
	                    "sPrevious": "Prev",
	                    "sNext": "Next"
	                }
	            }
	        });
	    });
	</script>

	<script type="text/javascript">
		$(function(){
    $('#scroll').slimScroll({
	    height: 'auto',
	    size: '10px',
	    color:'#ccc'
	    });
	});
	</script>
	<script>
		$(".icon-submenu li").on("click",function(){

            $(".icon-submenu li").removeClass("active");

            $(this).addClass("active");

	})
	</script>
	<script>
		jQuery(function ($) {
    $("ul a")
        .click(function(e) {
            var link = $(this);

            var item = link.parent("li");
            
            if (item.hasClass("active")) {
                item.removeClass("active").children("a").removeClass("active");
            } else {
                item.addClass("active").children("a").addClass("active");
            }

            if (item.children("ul").length > 0) {
                var href = link.attr("href");
                link.attr("href", "#");
                setTimeout(function () { 
                    link.attr("href", href);
                }, 300);
                e.preventDefault();
            }
        })
        .each(function() {
            var link = $(this);
            if (link.get(0).href === location.href) {
                link.addClass("active").parents("li").addClass("active");
                return false;
            }
        });
});
	</script>
	
</body>
</html>
