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
								<th width="20">No</th>
								<th>No. Retur</th>
								<th>Tgl. Retur</th>
								<th>No. Faktur</th>
								<th>Supplier</th>
								<th>Total Retur</th>
								<th>Uang Kembali</th>
								<th width="10">Aksi</th>
							</thead>
							<tbody>
							<?php
								$i=0;
								foreach ($list as $value) {
									$i++;
									$faktur = $this->pembelian_model->detail_pembelian($value['faktur']);
									$supplier = $this->master_model->detail_supplier($faktur['idsupplier']);
									$total = $this->retur_model->total_retur($value['id']);
									$tretur = 0;
									foreach ($total as $item) {
										$tretur = ($item['qty'] * $item['harga']) + $tretur;
									}
									$tretur = $tretur + $value['uang_kembali'];
									echo"
										<tr>
											<td>".$i."</td>
											<td>".$value['id']."</td>
											<td>".date_format(date_create($value['tanggal']),'d M Y')."</td>
											<td>FB-".$value['faktur']."</td>
											<td>".$supplier['nama']."</td>
											<td>Rp ".$tretur."</td>
											<td>Rp ".$value['uang_kembali']."</td>
											<td style='text-align: left;'>
												<div class='dropdown'>
											        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'>Tindakan <span class='caret'></span></a>
											        <ul class='dropdown-menu pull-right'>
											            <li><a href='#'><span class='fa fa-eye'></span> Lihat</a></li>
											            <li><a href='".base_url('returbeli/hapus?id='.$value['id'])."'><span class='fa fa-trash'></span> Hapus</a></li>
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