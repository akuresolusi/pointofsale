<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-default panel-title">
				<div class="panel-body title-pos">
					<div class="col-md-6" style="padding: 0;">
						<span id="sub-title">Kategori Pelanggan</span>
						<h3 class="page-title"><?php echo $title; ?></h3>
					</div>
					<div class="col-md-6 add-data">
					    <a href="#"><button class="btn btn-primary btn-action btn-add" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"> Kategori Pelanggan</span></button></a>
					</div>
				</div>
			</div>
			<div class="panel panel-headline">
				<div class="panel-heading"></div>
				  <div class="panel-body">
						<table id="data" class="table table-striped table-hover">
							<thead>
								<th width="20">No</th>
								<th width="700">Kategori Pelanggan</th>
								<th width="10">Aksi</th>
							</thead>
							<tbody>
								<?php
									$i=0;
									foreach ($list as $value) {
										$i++;
										echo"
										<tr>
											<td>".$i."</td>
											<td>".$value['kategori']."</td>
											<td style='text-align: center;'>
												<div class='dropdown'>
											        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'>Tindakan <span class='caret'></span></a>
											        <ul class='dropdown-menu pull-right'>
											            <li><a href='#' value_id='".$value['id']."' 
														value_kategori='".$value['kategori']."'' class='edit' data-toggle='modal' data-target='#myModaledit' 
													><span class='fa fa-edit'></span> Edit Data</a></li>
											            <li><a href='".base_url()."kategorip/hapus_kategori_pelanggan?id=".$value['id']."'><span class='fa fa-trash'></span> Hapus Data</a></li>
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

<!-- Form input -->

<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">

	  <!-- Modal content-->
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal">&times;</button>
	      <h4 class="modal-title">Tambah <?php echo $title; ?></h4>
	    </div>
	    <div class="modal-body">
	      <div class="container-fluid">
	      	<?php echo form_open('kategorip/tambah_kategori_pelanggan') ?>
			  	<div class="form-group">
			  	<div class=" form-group">
			  		<label>Kategori Pelanggan</label>
			  		<input type="text" name="kategori" class="form-control" placeholder="Kategori Barang">
			  	</div>
			    <div  class="form-group">
			    	<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
			    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
				</div>
			  	</div>
				<?php echo form_close(); ?>
	      </div>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
	    </div>
	  </div>
	  
	</div>
</div>





<!-- Form Edit -->
<div class="modal fade" id="myModaledit" role="dialog">
	<div class="modal-dialog">

	  <!-- Modal content-->
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal">&times;</button>
	      <h4 class="modal-title">Perbarui <?php echo $title; ?></h4>
	    </div>
	    <div class="modal-body">
	      <div class="container-fluid">
	      	<?php echo form_open('kategorip/edit_kategori_pelanggan') ?>
			  	<div class="form-group">
			  	<div class=" form-group">
			  		<label>Kategori Pelanggan</label>
			  		<input type="hidden" name="id" id="id_input">
			  		<input type="text" name="kategori" id="kategori_input" class="form-control" placeholder="Kategori Barang">
			  	</div>
			    <div  class="form-group">
			    	<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
			    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
				</div>
			  	</div>
				<?php echo form_close(); ?>
	      </div>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
	    </div>
	  </div>
	  
	</div>
</div>

<script type="text/javascript">
	$(".edit").click(function(){
		$("#id_input").val($(this).attr('value_id'));
		$("#kategori_input").val($(this).attr('value_kategori'));
	});
</script>