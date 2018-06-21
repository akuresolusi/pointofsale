<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-default panel-title">
					    	<div class="panel-body title-pos">
					    		<div class="col-md-6" style="padding: 0;">
						    		<span id="sub-title">Supplier</span>
						    		<h3 class="page-title"><?php echo $title; ?></h3>
					    		</div>
					    		<div class="col-md-6 add-data">
					    			<a href="<?php echo base_url(); ?>supplier/tambah"><button class="btn btn-primary btn-action btn-add" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"> </span> Tambah Data</button></a>
					    		</div>
					    	</div>
					 </div>
			<div class="panel panel-headline">
				<div class="panel-heading">
				</div>
				  <div class="panel-body">
						<table id="data" class="table table-striped table-hover">
							<thead>
								<th width="10" style="text-align: left;">No</th>
								<th>Nama</th>
								<th width="90">Jenis Kelamin</th>
								<th>Telp/No Hp</th>
								<th>Email</th>
								<th>Alamat</th>
								<th width="10">Aksi</th>
							</thead>
							<tbody>
							<?php
								$i=0;
								foreach ($list_supplier as $value) {
									$i++;
									echo"
									<tr>
										<td>".$i."</td>
										<td>".$value['nama']."</td>
										<td>".$value['jeniskelamin']."</td>
										<td>".$value['nohp']."</td>
										<td>".$value['email']."</td>
										<td>".$value['alamat']."</td>
										<td style='text-align: center;'>
											<div class='dropdown'>
										        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'><span class='fa fa-gear'></span></a>
										        <ul class='dropdown-menu pull-right'>
										            <li><a href='#'><span class='fa fa-eye'></span> Lihat Data</a></li>
										            <li><a href='".base_url()."supplier/edit?id=".$value['id']."'><span class='fa fa-edit'></span> Edit Data</a></li>
										            <li><a href='".base_url()."supplier/hapus_supplier?id=".$value['id']."'><span class='fa fa-trash'></span> Hapus Data</a></li>
										        </ul>
									    	</div>
										</td>
									</tr>
									";
								}
							?>
							</tbody>
						</table>	
					</div>
				</div>
			</div>
		</div>
		

			<!-- END MAIN CONTENT -->