<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-default panel-title">
				<div class="panel-body title-pos">
					<div class="col-md-6" style="padding: 0;">
						<span id="sub-title">Satuan</span>
						<h3 class="page-title"><?php echo $title; ?></h3>
					</div>
					<div class="col-md-6 add-data">
					    <a href="#"><button class="btn btn-primary btn-action btn-add" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah Data</button></a>
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
							<th width="700">Satuan Barang</th>
							<th width="30">Aksi</th>
						</thead>
						<tbody>
						<?php
							$i=0;
							foreach ($list as $value) {
								$i++;
								echo"
								<tr>
									<td>".$i."</td>
									<td>".$value['satuan']."</td>
									<td style='text-align: center;'>
										<div class='dropdown'>
									        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'><span class='fa fa-gear'></span></a>
									        <ul class='dropdown-menu pull-right'>
									            <li><a href='#' value_id='".$value['id']."' 
												value_satuan='".$value['satuan']."'' class='edit' data-toggle='modal' data-target='#myModaledit' 
											><span class='fa fa-edit'></span> Edit Data</a></li>
									            <li><a href='".base_url()."satuan/hapus_satuan?id=".$value['id']."'><span class='fa fa-trash'></span> Hapus Data</a></li>
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


<!-- Modal form input  -->
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
	      	<?php echo form_open('satuan/tambah_satuan'); ?>
			  	<div class="form-group">
			  	<div class=" form-group">
			  		<label>Satuan Barang</label>
			  		<input type="text" name="satuan"  class="form-control" placeholder="Satuan Barang">
			  	</div>
			    <div  class="form-group">
			    	<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
			    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
				</div>
			  	</div>
				<?php echo form_close() ?>
	      </div>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
	    </div>
	  </div>
	  
	</div>
</div>



<!-- Modal form edit  -->
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
	      	<?php echo form_open('satuan/edit_satuan'); ?>
			  	<div class="form-group">
			  	<div class=" form-group">
			  		<label>Satuan Barang</label>
			  		<input type="hidden" name="id" id="id_input" >
			  		<input type="text" name="satuan" id="satuan_input"  class="form-control" placeholder="Satuan Barang">
			  	</div>
			    <div  class="form-group">
			    	<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
			    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
				</div>
			  	</div>
				<?php echo form_close() ?>
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
		$("#satuan_input").val($(this).attr('value_satuan'));
	});
</script>