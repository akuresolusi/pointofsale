<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<div class="panel panel-default panel-title">
			<div class="panel-body title-pos">
				<div class="col-md-6" style="padding: 0;">
					<span id="sub-title">Laporan</span>
					<h3 class="page-title"><?php echo $title; ?></h3>
				</div>
			</div>
		</div>
		<div class="panel panel-default panel-title">
			<div class="panel-body title-pos body-blue">
				<div class="col-md-12 nopadding">
					<form>
						<div class="form-group col-md-3">
					    	<label>Supplier</label> 
					    	<input type="text" required="" class="form-control" placeholder="Nama Supplier">
					    </div>
						<div class="form-group col-md-3">
					    	<label>Dari Tanggal</label> 
					    	<input type="date" required="" class="form-control">
					    </div>
					     
					    <div class="form-group col-md-3">
					    	<label>Ke Tanggal</label>
					    	<input type="date" required="" class="form-control">
					    </div>
					    <div class="form-group col-md-1">
					    	<label>&nbsp;</label>
					    	<button type="submit" class="btn btn-primary"><span class="fa fa-filter"></span> Filter</button>
					    </div>
				    </form>
				</div>
			</div>
		</div>
		<div class="panel panel-headline">
			<div class="panel-heading">
			</div>
			<div class="panel-body">
				<table class="table table-striped">
					<thead>
						<th width="10">No</th>
						<th>Kode Pelunasan</th>
						<th>Tgl. Pelunasan</th>
						<th>Supplier</th>
						<th>Cara Bayar</th>
						<th>Jumlah Bayar</th>
					</thead>
					<tbody>
						<tr>

						</tr>
						<tr>
							<td colspan="5"><b>Grand Total</b></td>
							<td align="right"><b>Rp. 0</b></td>
						</tr>
					</tbody>
				</table>
				<a href="<?php echo base_url(); ?>laporan" class="btn btn-warning"><span class="fa fa-list"></span> Daftar Laporan</a>
				<a href="#" class="btn btn-success"><span class="fa fa-print"></span> Print</a>
			</div>
		</div>
	</div>
</div>
		

<!-- END MAIN CONTENT -->