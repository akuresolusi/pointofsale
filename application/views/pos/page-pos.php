<!doctype html>
<html lang="en">

<head>
	<title>Point Of Sale &mdash; Akure Solusi</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/chartist/css/chartist-custom.css">
		<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/numpad/jquery.numpad.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- DataTables -->
	<link href="<?php echo base_url() ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
	<!-- ICONS -->
	<meta name="theme-color" content="#6bb9f0">
	<style type="text/css">
	.nmpd-grid {border: none; padding: 20px;border-radius: 20px;}
	.nmpd-grid>tbody>tr>td {border: none;}
	input.nmpd-target[readonly] {background-color: white; cursor: pointer;}
	.btn-info {
	  background-color: #6bb9f0;
	  border-color: #6bb9f0; }
	  .btn-info:hover, .btn-primary:focus {
	    background-color: #63b1e8;
	    border-color: #63b1e8; }


</style>
</head>
<body>
	<!-- NAVBAR -->
	 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" id="custom-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar" id="custom-icon"></span>
        <span class="icon-bar" id="custom-icon"></span>
        <span class="icon-bar" id="custom-icon"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="<?php echo base_url() ?>assets/img/logo-white.png" width="140"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="#"><span class="ti-user menu_r"> </span> <span class="menu_r"> Agus Setiawan</span></a></li>
        <li><a href="#"><span class="ti-power-off menu_r"> </span><span class="menu_r"> Logout</span></span></a></li>
      </ul>
    </div>
  </div>
</nav> 
	<div class="container-fluid">
		<div class="col-md-8" style="margin:-10px; margin-bottom: 30px;">
			<!-- PENCARIAN -->
			<div class="col-md-12" style="padding: 5px 5px 0px 5px;">
				<form class="search" action="#">
		          <div class="input-group stylish-input-group">
		            <input type="text" class="form-control" id="custom-search"  placeholder="Cari Barang atau Scan" >
		              <span class="input-group-addon" id="custom-search">
		                <button type="submit">
		                    <span class="fa fa-search" title="Cari"></span>
		                </button>  
		                <button type="submit" > 
		                    <span class="fa fa-barcode" title="Scan"></span>
		                </button>  
		              </span>
		            </div>
		          </form>
			</div>
			<!-- END -->

			
			<!-- PRODUCT -->
			<a href="#">
			<div class="col-md-3 item">
				<div class="product">
					<div class="img-item">
						<img src="<?php echo base_url();?>assets/img/product/1.png" class="img-responsive">
					</div>
					<span class="title">Kemeja Lengan Panjang</span>
				</div>
			</div>
			</a>
			<!-- END PRODUCT -->
			<!-- PRODUCT -->
			<a href="#">
			<div class="col-md-3 item">
				<div class="product">
					<div class="img-item">
						<img src="<?php echo base_url();?>assets/img/product/2.png" class="img-responsive">
					</div>
					<span class="title">Topi</span>
				</div>
			</div>
			</a>
			<!-- END PRODUCT -->
			<!-- PRODUCT -->
			<a href="#">
			<div class="col-md-3 item">
				<div class="product">
					<div class="img-item">
						<img src="<?php echo base_url();?>assets/img/product/3.png" class="img-responsive">
					</div>
					<span class="title">Hoodie</span>
				</div>
			</div>
			</a>
			<!-- END PRODUCT -->
			<!-- PRODUCT -->
			<a href="#">
			<div class="col-md-3 item">
				<div class="product">
					<div class="img-item">
						<img src="<?php echo base_url();?>assets/img/product/4.png" class="img-responsive">
					</div>
					<span class="title">Kemeja Lengan Pendek</span>
				</div>
			</div>
			</a>
			<!-- END PRODUCT -->
			<!-- PRODUCT -->
			<a href="#">
			<div class="col-md-3 item">
				<div class="product">
					<div class="img-item">
						<img src="<?php echo base_url();?>assets/img/product/5.png" class="img-responsive">
					</div>
					<span class="title">Tank Top</span>
				</div>
			</div>
			</a>
			<!-- END PRODUCT -->
			<!-- PRODUCT -->
			<a href="#">
			<div class="col-md-3 item">
				<div class="product">
					<div class="img-item">
						<img src="<?php echo base_url();?>assets/img/product/6.png" class="img-responsive">
					</div>
					<span class="title">Jeans Wanita</span>
				</div>
			</div>
			</a>
			<!-- END PRODUCT -->
			<!-- PRODUCT -->
			<a href="#">
			<div class="col-md-3 item">
				<div class="product">
					<div class="img-item">
						<img src="<?php echo base_url();?>assets/img/product/7.png" class="img-responsive">
					</div>
					<span class="title">Kaos</span>
				</div>
			</div>
			</a>
			<!-- END PRODUCT -->
			<!-- PRODUCT -->
			<a href="#">
			<div class="col-md-3 item">
				<div class="product">
					<div class="img-item">
						<img src="<?php echo base_url();?>assets/img/product/8.png" class="img-responsive">
					</div>
					<span class="title">Jas Formal</span>
				</div>
			</div>
			</a>
			<!-- END PRODUCT -->
			<nav>
			  <ul class="pager">
			    <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
			    <li class="next"><a href="#">Next <span aria-hidden="true">&rarr;</span></a></li>
			  </ul>
			</nav>
		</div>
		<div class="col-md-4">
			<div class="panel panel-headline custom-panel">
				<div class="panel-body">
					<div class="add-cust">
						<span class="ti-user"></span><a href="" id="user"> Customer Baru</a>
					</div>
					<div class="pricetotal">
						<span id="left-list" style="font-size: 25px;">Grand Total</span>
							<span id="right-list" style="font-size: 25px; color: #3f51b5;">Rp. 10.000</span>
					</div>
					<div class="list-product" id="wrapper">
						<table class="table" id="custom-table">
							<tbody>
								<tr>
									<td width="10">1.</td>
									<td width="200">Kemeja Lengan Pendek</td>
									<td>
    								<input type="number" class="form-control qty"  value="1">
									</td>
									<td width="130">Rp. 10.000</td>
									<td width="50"><a href="#"><span class="lnr lnr-trash remove" title="Hapus"></span></a></td>
								</tr>
								<tr>
									<td width="10">2.</td>
									<td width="200">Hoodie</td>
									<td>
    								<input type="number" class="form-control qty" value="1">
									</td>
									<td width="130">Rp. 10.000</td>
									<td width="50"><a href="#"><span class="lnr lnr-trash remove" title="Hapus"></span></a></td>
								</tr>
								<tr>
									<td width="10">3.</td>
									<td width="200">Topi</td>
									<td>
    								<input type="number" class="form-control qty" value="1">
									</td>
									<td width="130">Rp. 10.000</td>
									<td width="50"><a href="#"><span class="lnr lnr-trash remove" title="Hapus"></span></a></td>
								</tr>
								<tr>
									<td width="10">4.</td>
									<td width="200">Jeans Wanita</td>
									<td>
    								<input type="number" class="form-control qty" value="1">
									</td>
									<td width="130">Rp. 10.000</td>
									<td width="50"><a href="#"><span class="lnr lnr-trash remove" title="Hapus"></span></a></td>
								</tr>
								<tr>
									<td width="10">5.</td>
									<td width="200">Jas Formal</td>
									<td>
    								<input type="number" class="form-control qty" value="1">
									</td>
									<td width="130">Rp. 10.000</td>
									<td width="50"><a href="#"><span class="lnr lnr-trash remove" title="Hapus"></span></a></td>
								</tr>
								<tr>
									<td width="10">6.</td>
									<td width="200">Tank Top</td>
									<td>
    								<input type="number" class="form-control qty" value="1">
									</td>
									<td width="130">Rp. 10.000</td>
									<td width="50"><a href="#"><span class="lnr lnr-trash remove" title="Hapus"></span></a></td>
								</tr>

							</tbody>
						</table>
					</div>
					<div class="list-price">
						<div class="row">
							<span id="left-list">Sub Total</span>
							<span id="right-list">Rp. 10.000</span>
						</div>
						<div class="row">
							<span id="left-list">Diskon</span>
							<span id="right-list"><input type="number" name="" class="form-control" style="width: 100px; height: 30px; text-align: right;" placeholder="Rp. "></span>
							<span id="right-list"><input type="number" name="" class="form-control" style="width: 50px; height: 30px; text-align: center; margin-right: 5px; " placeholder="%"></span>
							
						</div>
					</div>
					<div class="col-md-12"  id="table-act">
						<table style="width: 100%;">
							<tr>
								<td><button class="btn btn-danger btn-pay"><span class="fa fa-remove"></span> Batal</button></td>
								<td><button class="btn btn-warning btn-pay"><span class="fa fa-shopping-bag"></span> Tahan</button></td>
							</tr>
							<tr>
								<td colspan="2"><button class="btn btn-info btn-pay"><span style="float: left; font-size: 18px; font-weight: bold;">Bayar</span> <span style="float: right; font-size: 20px; font-weight: bold;">Rp. 10.000</span></button></td>
							</tr>
						</table>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT -->

	<!-- Javascript -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/numpad/jquery.numpad.js"></script>
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
	                "sprimaryFiltered": "(difilter dari _MAX_ total data)",
	                "sZeroRecords": "Pencarian tidak ditemukan",
	                "sEmptyTable": "Data kosong",
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
	    size: '13px',
	    color:'#bbb'
	    });
	});
	</script>
	<script type="text/javascript">
	$(function() {
		// Set NumPad defaults for jQuery mobile. 
		// These defaults will be applied to all NumPads within this document!
		$.fn.numpad.defaults.gridTpl = '<table class="table modal-content" style="width:400px; height:300px;"></table>';
		$.fn.numpad.defaults.backgroundTpl = '<div class="modal-backdrop in"></div>';
		$.fn.numpad.defaults.displayTpl = '<input type="text" class="form-control  input-lg" style="width:100%; height:80px; font-size:30px;" />';
		$.fn.numpad.defaults.buttonNumberTpl =  '<button type="button" class="btn btn-default btn-lg" style="width:100%; height:80px; font-size:28px; "></button>';
		$.fn.numpad.defaults.buttonFunctionTpl = '<button type="button" class="btn btn-lg" style="width:100%; height:80px;"></button>';
		$.fn.numpad.defaults.onKeypadCreate = function(){$(this).find('.done').addClass('btn-primary');};
		
		// Instantiate NumPad once the page is ready to be shown
		$(document).ready(function(){
			$('.qty').numpad();
			$('#password').numpad({
				displayTpl: '<input class="form-control" type="password" />'		
			});
			$('#numpadButton-btn').numpad({
				target: $('#numpadButton'),
                                decimalSeparator: '.'
			});
			$('#numpad4div').numpad();
			$('#numpad4column .qtyInput').numpad();
		});
	});
</script>

</body>

</html>
