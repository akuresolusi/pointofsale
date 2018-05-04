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
					    <a href="<?php echo base_url(); ?>pelunasanbeli/tambah"><button class="btn btn-primary btn-action btn-add"><span class="fa fa-plus"></span> Tambah Data</button></a>
					</div>
				</div>
			</div>
			<div class="panel panel-headline">
				<div class="panel-heading">
				</div>
				  <div class="panel-body">
						<table id="data" class="table table-striped table-hover">
							<thead>
								<th>No</th>
								<th>Kode Pelunasan</th>
								<th>Tanggal</th>
								<th>Supplier</th>
								<th>Jumlah Bayar</th>
								<th>Biaya Lainya</th>
								<th>Cara Bayar</th>
								<th width="10">Aksi</th>
							</thead>
							<tbody>
							<?php
								$i=0;
								foreach ($list as $value) {
									$supplier = $this->master_model->detail_supplier($value['supplier']);
									$i++;
									if($value['metode'] == 1){
										$metode = "Cash";
									}else if($value['metode'] == 2){
										$metode = "Bank Transfer";
									}else if($value['metode'] == 3){
										$metode = "Cheque";
									}else if($value['metode'] == 4){
										$metode = "Credit Card";
									}else if($value['metode'] == 5){
										$metode = "Debit Card";
									}
									echo"
									<tr>
										<td>".$i."</td>
										<td>".$value['kode']."</td>
										<td>".date_format(date_create($value['tanggal']),'d M Y')."</td>
										<td>".$supplier['nama']."</td>
										<td>Rp ".$value['jumlah']."</td>
										<td>Rp ".$value['lainya']."</td>
										<td>".$metode."</td>
										<td style='text-align: center;''>
										<div class='dropdown'>
									        <a href='#'' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'>Tindakan <span class='caret'></span></a>
									        <ul class='dropdown-menu pull-right'>
									            <li><a href='".base_url()."pelunasanbeli/details'><span class='fa fa-eye'></span> Lihat Data</a></li>
									            <li><a href='".base_url()."pelunasanbeli/proses_hapus?kode=".$value['kode']."'><span class='fa fa-trash'></span> Hapus Data</a></li>
									        </ul>
								    	</div>
										</td>
									</tr>";
								}
							?>
							</tbody>
						</table>	
					</div>
				</div>
			</div>
		</div>
		
<!-- END MAIN CONTENT -->