<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-default panel-title">
				<div class="panel-body title-pos">
					<div class="col-md-6" style="padding: 0;">
						<span id="sub-title">Metode Bayar</span>
						<h3 class="page-title"><?php echo $title; ?></h3>
					</div>
					<div class="col-md-6 add-data">
					    <a href="<?php echo base_url(); ?>metodebayar/tambah" class="btn btn-primary btn-action btn-add"><span class="fa fa-plus"></span> Tambah Data</a>
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
								<th>Nama Metode</th>
								<th>Metode</th>
								<th>No Rek</th>
								<th>Kartu</th>
								<th>No Cek</th>
								<th>Atas Nama</th>
								<th>Bank</th>
								<th width="30">Aksi</th>
							</thead>
							<tbody>
							<?php
								$i=0;
								foreach ($list as $value) {
									$i++;
									$bank = $this->master_model->detail_bank($value['idbank']);
									$norek = $value['norek'] ;
									$kartu = $value['kartu'] ;
									$nocek = $value['nocek'] ;
									$an = $value['atasnama']  ;
									$bank = $bank['bank'];
									if($norek == "" ){ $norek = "-"; }
									if($kartu == "" ){ $kartu = "-"; }
									if($nocek == "" ){ $nocek = "-"; }
									if($an 	  == "" ){ $an 	  = "-"; }
									if($bank  == "" ){ $bank  = "-"; }
									echo"
									<tr>
										<td>".$i."</td>
										<td>".$value['nama']."</td>
										<td>".$value['metode']."</td>
										<td>".$norek."</td>
										<td>".$kartu."</td>
										<td>".$nocek."</td>
										<td>".$an."</td>
										<td>".$bank."</td>
										<td style='text-align: center;''>
										<div class='dropdown'>
									        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'><span class='fa fa-gear'></span></a>
									        <ul class='dropdown-menu pull-right'>
									            <li><a href='#'><span class='fa fa-eye'></span> Lihat Data</a></li>
									            <li><a href='metodebayar/edit?id=".$value['id']."'><span class='fa fa-edit'></span> Edit Data</a></li>
									            <li><a href='metodebayar/proses_hapus?id=".$value['id']."'><span class='fa fa-trash'></span> Hapus Data</a></li>
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