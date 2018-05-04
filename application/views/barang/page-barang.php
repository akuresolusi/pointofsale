<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-default panel-title">
		    	<div class="panel-body title-pos">
		    		<div class="col-md-6" style="padding: 0;">
			    		<span id="sub-title">Produk</span>
			    		<h3 class="page-title"><?php echo $title; ?></h3>
		    		</div>
		    		<div class="col-md-6 add-data">
		    			<a href="<?php echo base_url(); ?>barang/tambah"><button class="btn btn-primary btn-action btn-add"><span class="fa fa-plus"></span> Tambah Data</button></a>
		    		</div>
		    	</div>
		 	</div>
			<div class="panel panel-headline">
				<div class="panel-heading">
				</div>
				  <div class="panel-body">
					<div class="table-responsive" style="min-height: 300px;">
							<table id="data" class="table table-striped table-hover">
								<thead>
									<th align="left">No</th>
									<th>Kode Barang</th>
									<th>Nama Barang</th>
									<th>Kategori Barang</th>
									<th>Satuan</th>
									<th>Stok</th>
									<th>Status</th>
									<th>Jlh Foto</th>
									<th width="10"></th>
								</thead>
								<tbody>
								<?php
									$i=0;
									foreach ($list as $value) {
										$i++;
										$kategori = $this->master_model->detail_kategori($value['idkategori']);
										if($value['status'] == "Aktif"){
											$status = "<li><a href='barang/off_barang?id=".$value['id']."'><span class='fa fa-check'></span> Tidak Aktifkan</a></li>";
										}else{
											$status = "<li><a href='barang/on_barang?id=".$value['id']."'><span class='fa fa-check'></span> Aktifkan</a></li>";
										}
										$jlhfoto = $this->barang_model->jlh_foto($value['id']);
										$stok = $value['stok'];
										if($stok < 1){ $stok = "-"; }
										echo"
										<tr>
											<td>".$i."</td>
											<td>".$value['kode']."</td>
											<td>".$value['nama']."</td>
											<td>".$kategori['kategori']."</td>
											<td>Unit</td>
											<td align='center'>".$stok."</td>
											<td align='center'>".$value['status']."</td>
											<td align='center'>".$jlhfoto."</td>
											<td style='text-align: left;'>
												<div class='dropdown'>
											        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'>Tindakan <span class='caret'></span></a>
											        <ul class='dropdown-menu pull-right'>
											            <li><a href='barang/lihatdata'><span class='fa fa-eye'></span> Lihat Data</a></li>
											            <li><a href='barang/foto_barang?id=".$value['id']."'><span class='fa fa-image'></span> Upload Foto</a></li>
											            ".$status."
											            <li><a href='barang/edit?id=".$value['id']."'><span class='fa fa-edit'></span> Edit Data</a></li>
											            <li><a href='barang/hapus_barang?id=".$value['id']."'><span class='fa fa-trash'></span> Hapus Data</a></li>
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
		</div>
		

			<!-- END MAIN CONTENT -->