<div class="main-content">
	<div class="container-fluid">
		<!-- OVERVIEW -->
		<div class="panel panel-headline">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo $title; ?></h3>
				<p class="panel-subtitle"> Date :
					<?php
						$tgl=date('l, d-m-Y');
						echo $tgl;
					?>	
				</p>
			</div>
			<div class="panel-body">
				
				<div class="row">
					<div class="col-md-3">
						<div class="metric">
							<span class="icon"><i class="ti-shopping-cart orange"></i></span>
							<p>
								<span class="number">Rp. 0</span>
								<span class="title">Pembelian Barang</span>
								<a href="<?php echo base_url() ?>pembelian"><span class="readmore">Lihat Data</span></a>
							</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="metric">
							<span class="icon"><i class="ti-bag purple"></i></span>
							<p>
								<span class="number">Rp. 0</span>
								<span class="title">Penjualan Barang</span>
								<a href="<?php echo base_url() ?>penjualan"><span class="readmore">Lihat Data</span></a>
							</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="metric">
							<span class="icon"><i class="ti-money green"></i></span>
							<p>
								<span class="number">Rp. 0</span>
								<span class="title">Hutang</span>
								<a href="#"><span class="readmore">Lihat Data</span></a>
							</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="metric">
							<span class="icon"><i class="ti-bar-chart red "></i></span>
							<p>
								<span class="number">Rp. 0</span>
								<span class="title">Laporan</span>
								<a href="<?php echo base_url() ?>laporan"><span class="readmore">Lihat Data</span></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>