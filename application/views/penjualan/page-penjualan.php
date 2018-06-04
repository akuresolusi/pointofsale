<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-default panel-title">
				<div class="panel-body title-pos">
					<div class="col-md-6" style="padding: 0;">
						<span id="sub-title">Penjualan</span>
						<h3 class="page-title"><?php echo $title; ?></h3>
					</div>
					<div class="col-md-6 add-data">
					    <a href="<?php echo base_url(); ?>penjualan/tambah"><button class="btn btn-primary btn-action btn-add"><span class="fa fa-plus"></span> Tambah Data</button></a>
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
								<th>Faktur</th>
								<th>Pelanggan</th>
								<th>Total Faktur</th>
								<th>Total Hutang</th>
								<th>Syarat Pemabayaran</th>
								<th>Tgl Faktur</th>
								<th>Jatuh Tempo</th>
								<th width="10">Aksi</th>
							</thead>
							<tbody>
							<?php
								$i=0;
								foreach ($list_penjualan as $value) {
									$pelanggan = $this->master_model->detail_pelanggan($value['idpelanggan']);
									$syaratbayar = $this->master_model->detail_syaratbayar($value['idsyaratbayar']);
									$i++;
									echo"
									<tr>
										<td>".$i."</td>
										<td>FP-".$value['faktur']."</td>
										<td>".$pelanggan['nama']."</td>
										<td></td>
										<td></td>
										<td>".$syaratbayar['nama']."</td>
										<td>".date_format(date_create($value['tanggal']),'d M Y')."</td>
										<td>".date_format(date_create($value['tempo']),'d M Y')."</td>
										<td style='text-align: center;'>
										<div class='dropdown'>
									        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'>Tindakan <span class='caret'></span></a>
									        <ul class='dropdown-menu pull-right'>
									            <li><a href='".base_url()."penjualan/details'><span class='fa fa-eye'></span> Lihat Data</a></li>
									            <li><a href='".base_url()."penjualan/edit'><span class='fa fa-edit'></span> Edit Data</a></li>
									            <li><a href='".base_url('penjualan/hapus_penjualan?faktur='.$value['faktur'])."'><span class='fa fa-trash'></span> Hapus Data</a></li>
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