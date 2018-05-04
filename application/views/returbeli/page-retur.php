<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-default panel-title">
				<div class="panel-body title-pos">
					<div class="col-md-6" style="padding: 0;">
						<span id="sub-title">Pembelian</span>
						<h3 class="page-title"><?php echo $title; ?></h3>
					</div>
					<div class="col-md-6 add-data">
					    <a href="<?php echo base_url(); ?>returbeli/tambah"><button class="btn btn-primary btn-action btn-add"><span class="fa fa-plus"></span> Tambah Data</button></a>
					</div>
				</div>
			</div>
			<div class="panel panel-headline">
				<div class="panel-heading">
				</div>
				  <div class="panel-body">
						<table id="data" class="table table-striped table-hover">
							<thead>
								<th width="20">No.</th>
								<th>No. Retur</th>
								<th>Tgl. Retur</th>
								<th>No. Faktur</th>
								<th>Supplier</th>
								<th>Total Retur</th>
								<th>Uang Kembali</th>
								<th width="10">Aksi</th>
							</thead>
							<tbody>
								<tr>
									<td>1.</td>
									<td>RB-0000005</td>
									<td>Jan 30, 2018</td>
									<td>FB-0000008</td>
									<td>ABC, PT</td>
									<td>5.000.000,00</td>
									<td>0</td>
									<td style="text-align: center;">
									<div class="dropdown">
								        <a href="#" class="btn btn-primary btn-xs" data-toggle="dropdown" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false" title="Action">Tindakan <span class="caret"></span></a>
								        <ul class="dropdown-menu pull-right">
								            <li><a href="#"><span class="fa fa-eye"></span> Lihat Data</a></li>
								            <li><a href="#"><span class="fa fa-edit"></span> Edit Data</a></li>
								            <li><a href="#"><span class="fa fa-trash"></span> Hapus Data</a></li>
								        </ul>
							    	</div>
									</td>
								</tr>
							</tbody>
						</table>	
					</div>
				</div>
			</div>
		</div>
		

			<!-- END MAIN CONTENT -->