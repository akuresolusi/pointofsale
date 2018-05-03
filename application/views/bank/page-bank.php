<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
	<div class="panel panel-default panel-title">
		<div class="panel-body title-pos">
			<div class="col-md-6" style="padding: 0;">
				<span id="sub-title">Bank</span>
				<h3 class="page-title"><?php echo $title; ?></h3>
			</div>
			<div class="col-md-6 add-data">
			    <a href="#"><button class="btn btn-primary btn-action btn-add" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"> Tambah Bank</span></button></a>
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
						<th width="700">Nama Bank</th>
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
								<td>".$value['bank']."</td>
								<td style='text-align: center;'>
									<div class='dropdown'>
								        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'>Tindakan <span class='caret'></span></a>
								        <ul class='dropdown-menu pull-right'>
								            <li><a href='#' value_id='".$value['id']."' 
										value_bank='".$value['bank']."' class='edit' data-toggle='modal' data-target='#myModaledit' 
										><span class='fa fa-edit'></span> Edit Data</a></li>
								            <li><a href='".base_url()."bank/hapus_bank?id=".$value['id']."'><span class='fa fa-trash'></span> Hapus Data</a></li>
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

<!-- Modal Input -->
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
	      	<?php echo form_open('bank/tambah_bank'); ?>
			  	<div class="form-group">
			  	<div class=" form-group">
			  		<label>Nama Bank</label>
			  		<input type="text" class="form-control" name="bank" placeholder="Nama Bank" required="">
			  	</div>
			    <div  class="form-group">
			    	<button type="submit" class="btn btn-info"><span class="fa fa-save"></span> Simpan</button>
			    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
				</div>
			  	</div>
				</form>
	      </div>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
	    </div>
	  </div>

	</div>
</div>


<!-- Modal Edit -->
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
	      	<?php echo form_open('bank/edit_bank'); ?>
			  	<div class="form-group">
			  	<div class=" form-group">
			  		<label>Nama Bank</label>
			  		<input type="hidden" name="id" value="" id="id_input" required="">
			  		<input type="text" name="bank" class="form-control" id="bank_input" placeholder="Nama Bank" required="">
			  	</div>
			    <div  class="form-group">
			    	<button type="submit" class="btn btn-info"><span class="fa fa-save"></span> Simpan</button>
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
		$("#bank_input").val($(this).attr('value_bank'));
	});
</script>