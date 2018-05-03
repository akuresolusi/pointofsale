<!-- MAIN CONTENT -->
<style>
.hide{
	display: none;
}
option{
	color: #000;
}
</style>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-select.css">
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-default panel-title">
							<div class="panel-body title-pos">
								<div class="col-md-6" style="padding: 0;">
									<span id="sub-title">Penjualan</span>
									<h3 class="page-title"><?php echo $title; ?></h3>
								</div>
							</div>
						</div>
						<div class="panel panel-default panel-title">
							<div class="panel-body title-pos body-blue">
								<div class="col-md-12">
								<div class="form-group col-md-4">
								    	<label>Pelanggan</label> 
								    	<select class="selectpicker form-control" required="" data-live-search="true">
								    		<option value="" disabled selected class="hide">- Pilih Pelanggan -</option>
								    		<option value="tambah" style="color: #3287B2;"> &#43; Tambah Data Pelanggan</option>
								    		<optgroup label="Data Supplier">
										    	<option>Firman</option>
										    	<option>Agus</option>

									    	</optgroup>
									    </select>
								    </div>
								     <!-- MODAL SUPPLIER -->
									    <div class="modal fade" id="myModal" role="dialog">
										    <div class="modal-dialog modal-lg">
										    
										      <!-- Modal content-->
										      <div class="modal-content">
										        <div class="modal-header">
										          <button type="button" class="close" data-dismiss="modal">&times;</button>
										          <h4 class="modal-title">Tambah Data Pelanggan</h4>
										        </div>
										        <div class="modal-body">
										          <div class="container-fluid">
										          	<form>
													  	<div class="form-group">
													  	<div class="form-group col-md-5">
													  		<label>Nama Lengkap</label>
													  		<input type="text" class="form-control" placeholder="Nama Lengkap" required="">
													  	</div>
													    <div class="form-group col-md-3">
													    	<label>Jenis Kelamin</label> 
													    	<select class="form-control" name="jeniskelamin" required="">
														    	<?php
													    			$data_jenis = array('Laki-Laki','Perempuan');
													    			foreach ($data_jenis as $value) {
													    				echo "<option value='".$value."'>".$value."</option>";
													    			}
													    		?>
														    </select>
													    </div>
													    <div class="form-group col-md-4">
													  		<label>Telp/No Hp</label>
													  		<input type="text" class="form-control" placeholder="No Hp">
													  	</div>
													    <div class="form-group col-md-4">
													  		<label>Email</label>
													  		<input type="text" class="form-control" placeholder="Email" required="">
													  	</div>
													  	<div class="form-group col-md-4">
													    	<label>Kota</label> 
													    	<select class="form-control"  required="">
														    	<?php
													    			$data_jenis = array('Medan','Kualasimpang');
													    			foreach ($data_jenis as $value) {
													    				echo "<option value='".$value."'>".$value."</option>";
													    			}
													    		?>
														    </select>
													    </div>
													    <div class="form-group col-md-4">
													    	<label>Kategori</label> 
													    	<select class="form-control"  required="">
														    	<?php
													    			$data_jenis = array('Seller','Umum');
													    			foreach ($data_jenis as $value) {
													    				echo "<option value='".$value."'>".$value."</option>";
													    			}
													    		?>
														    </select>
													    </div>
													    <div class=" form-group col-md-12">
													  		<label>Alamat</label>
													  		<textarea class="form-control" placeholder="Alamat"></textarea>
													  	</div>
													    <div  class="form-group col-md-12">
													    	<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
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
									    <!-- END MODAL -->
								    <div class="form-group col-md-3">
								    	<label>No Referensi</label>
								      	<input type="number" class="form-control" placeholder="No Referensi">
								    </div>
								<div class="col-md-5">
								    <span id="sub-total">Total <span class="indigo">Rp. 10.000</span></span>
								</div>
							</div>
							</div>
						</div>
					<div class="panel panel-default">
					    	<div class="panel-body">
								<form>
								  	<div class="form-group">
								    <div class=" form-group col-md-5">
								  		<label>Alamat</label>
								  		<textarea class="form-control" placeholder="Alamat" style="height: 105px"></textarea>
								  	</div>
								      <div class="form-grou col-md-4" style="padding: 0; margin-bottom: 10px;">
										    <div class="col-sm-12 controls">
										    	<label>Tgl Penerimaan</label>
										      <div class="input-group">
										      	<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
											    <input type="date" class="form-control" id="inputfield2" placeholder="Input 2">
											  </div>
											</div>
										  </div>
								        <div class="form-group col-md-4" style="padding: 0">
									    <div class="col-sm-12 controls">
									    	<label>Tgl Jatuh Tempo</label>
									      <div class="input-group">
									      	<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
										    <input type="date" class="form-control" id="inputfield2" placeholder="Input 2">
										  </div>
										</div>
									  </div>
								    <div class="col-md-3">
								    	<label>Syarat Pembayaran</label> 
								    	<select class="form-control " name="jeniskelamin" required="">
								    		<option value="" disabled selected class="hide">- Pilih Syarat Pembayaran -</option>
									    	<?php
								    			$data_jenis = array('30 Hari','Hutang');
								    			foreach ($data_jenis as $value) {
								    				echo "<option value='".$value."'>".$value."</option>";
								    			}
								    		?>
									    </select>
								    </div>

								  	<div class="col-md-12">
								  										  		<table class="table" id="tb" style="margin-top: 20px">
								  			<!-- THEAD -->
								  			<tr>
								  				<th>Nama Barang</th>
								  				<th width="100">Qty</th>
								  				<th width="200">Harga Satuan</th>
								  				<th width="100">Diskon</th>
								  				<th width="200">Sub Total</th>
								  				<th width="20"></th>
								  			</tr>
								  			<!-- END THEAD -->
								  			<tr>
								  				<td style="padding-left: 0px;">
								  					<select class="selectpicker form-control" required="" data-live-search="true">
										    		<option  disabled selected class="hide">- Pilih Barang -</option>
										    		<option value="tambah1" style="color: #3287B2;"> &#43; Tambah Data Barang</option>
										    		<optgroup label="Data Barang">
												    	<option>Minyak Goreng</option>
												    	<option>Ikan</option>
											    	</optgroup>
											    </select>
								  				</td>

								  				 <!-- MODAL BARANG -->
											    <div class="modal fade" id="myModal1" role="dialog">
												    <div class="modal-dialog modal-lg">
												    
												      <!-- Modal content-->
												      <div class="modal-content">
												        <div class="modal-header">
												          <button type="button" class="close" data-dismiss="modal">&times;</button>
												          <h4 class="modal-title">Tambah Data Barang</h4>
												        </div>
												        <div class="modal-body">
												          <div class="container-fluid">
												          	<form>
															  	<div class="form-group">
															  	<div class="form-group col-md-4">
															  		<label>Kode Barang</label>
															  		<input type="text" class="form-control" placeholder="Kode Barang">
															  	</div>
															    <div class="form-group col-md-5">
															    	<label>Nama Barang</label>
															      	<input type="text" class="form-control" placeholder="Nama Barang">
															    </div>
															    <div class="form-group col-md-3">
															    	<label>Satuan</label> 
															    	<select class="form-control" name="jeniskelamin" required="">
																    	<?php
															    			$data_jenis = array('Unit');
															    			foreach ($data_jenis as $value) {
															    				echo "<option value='".$value."'>".$value."</option>";
															    			}
															    		?>
																    </select>
															    </div>
															    <div class="form-group col-md-3">
															    	<label>Kategori Barang</label> 
															    	<select class="form-control" name="jeniskelamin" required="">
																    	<?php
															    			$data_jenis = array('-');
															    			foreach ($data_jenis as $value) {
															    				echo "<option value='".$value."'>".$value."</option>";
															    			}
															    		?>
																    </select>
															    </div>
															    <div class="form-group col-md-3">
															    	<label>Jenis Barang</label> 
															    	<select class="form-control" name="jeniskelamin" required="">
																    	<?php
															    			$data_jenis = array('-');
															    			foreach ($data_jenis as $value) {
															    				echo "<option value='".$value."'>".$value."</option>";
															    			}
															    		?>
																    </select>
															    </div>
															    
															    <div class="form-group col-md-3">
															    	<label>Warna</label> 
															    	<select class="form-control" name="jeniskelamin" required="">
																    	<?php
															    			$data_jenis = array('Merah','Biru');
															    			foreach ($data_jenis as $value) {
															    				echo "<option value='".$value."'>".$value."</option>";
															    			}
															    		?>
																    </select>
															    </div>
															    <div class="form-group col-md-3">
															    	<label>Ukuran</label> 
															    	<select class="form-control" name="jeniskelamin" required="">
																    	<?php
															    			$data_jenis = array('S','M');
															    			foreach ($data_jenis as $value) {
															    				echo "<option value='".$value."'>".$value."</option>";
															    			}
															    		?>
																    </select>
															    </div>
															    <div class="form-group col-md-6">
															    	<label>Harga 1</label>
															      	<input type="text" class="form-control" placeholder="Harga 1">
															    </div>
															    <div class="form-group col-md-6">
															    	<label>Harga 2</label>
															      	<input type="text" class="form-control" placeholder="Harga 2">
															    </div>
															    <div class="form-group col-md-6">
															    	<label>Harga 3</label>
															      	<input type="text" class="form-control" placeholder="Harga 3">
															    </div>
															    <div class="form-group col-md-6">
															    	<label>Harga 4</label>
															      	<input type="text" class="form-control" placeholder="Harga 4">
															    </div>
															    <div class="form-group col-md-6">
															    	<label>Harga 5</label>
															      	<input type="text" class="form-control" placeholder="Harga 5">
															    </div>
															    <div class="form-group col-md-6">
															    	<label>Foto</label>
															      	<input type="file" class="form-control" placeholder="Nama Lengkap">
															    </div>
															    <div  class="form-group col-md-12">
															    	<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
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
											    <!-- END MODAL -->

								  				<td><input type="number" name="" class="form-control"></td>
								  				<td><input type="text" name="" class="form-control" placeholder="Rp." style="text-align: right;"></td>
								  				<td><input type="text" name="" class="form-control" placeholder="%"></td>
								  				<td style="text-align: right;">Rp.0</td>
								  				<td><a href=''><span class="fa fa-plus" style="font-size: 16px"></span></a></td>
								  				</tr>
								  			<!-- TBODY -->
								  			<tr>
								  				<td style="padding-left: 0px;">
								  					Kulkas
								  				</td>

								  				<td><input type="number" name="" class="form-control"></td>
								  				<td><input type="text" name="" class="form-control" placeholder="Rp." style="text-align: right;"></td>
								  				<td><input type="text" name="" class="form-control" placeholder="%"></td>
								  				<td style="text-align: right;">Rp.0</td>
								  				<td><a href=''><span class="fa fa-remove" style="font-size: 16px"></span></a></td>
								  			</tr>

								  			<!-- TBODY -->
								  		</table>
								  		<div class="col-md-12" style="padding: 0;margin-bottom: 20px; margin-top: -15px;"><a href='javascript:void(0);' class="btn btn-primary" style="font-size: 16px;" id="addMore" title="Tambah Data"><span class='fa fa-plus'> Tambah Data</span></a></div>
								  		<div class="col-md-4" style="padding-left: 0; margin-bottom: 20px;">
								  			<label>Catatan</label>
								  			<textarea class="form-control" style="height: 75px;"></textarea>
								  		</div>
								  		<div class="col-md-6" style="float: right;">
								  			<div class="row d">
								  				<span id="d-title">Sub Total</span>	
								  				<span id="sub-number">Rp. 10.000</span>	
								  			</div>
								  			<div class="row d">
								  				<span id="d-title">Pajak</span>	
								  				<span id="sub-number"><input type="number" class="form-control" name="" style="width: 70px;"></span>	
								  			</div>
								  			<div class="row d">
								  				<span id="d-title">Diskon</span>	
								  				<span id="sub-number"><input type="number" class="form-control" name="" style="width: 70px;"></span>	
								  			</div>
								  		</div>

								  		<div  class="form-group col-md-12" style="padding-left: 0;">
								    	<button type="submit" class="btn btn-primary" style="margin-bottom: 10px;"><span class="fa fa-save"></span> Simpan</button>
								    	<a href="<?php echo base_url(); ?>pembelian" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Daftar Pembelian</a>
								    	<button type="reset" class="btn btn-danger" style="margin-bottom: 10px;"> <span class="fa fa-remove"></span> Batal</button>
									</div>
								  	</div>
								  </div>
								</form>
						    </div>
						</div>
					</div>
				</div>
			</div>

<script src="<?php echo base_url(); ?>assets/js/bootstrap-select.js"></script>
<script>
	$('.chosen-select').chosen();
</script>
<!-- SCRIPT MODAL SUPPLIER -->
<script>
	$('select').change(function () {
	    if ($(this).val() == "tambah") {
	        $('#myModal').modal('show');
	    }
	});
</script>
<!-- END SUPPLIER -->

<!-- SCRIPT MODAL BARANG -->
<script>
	$('select').change(function () {
	    if ($(this).val() == "tambah1") {
	        $('#myModal1').modal('show');
	    }
	});
</script>
<!-- END BARANG -->
 
<!-- ADD & REMOVE ROW -->
<script>
$(function(){
    $('#addMore').on('click', function() {
              var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
              data.find("input").val('');
     });
     $(document).on('click', '.remove', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Maaf, Row pertama tidak bisa di hapus!");
           }
      });
});      
</script>
			<!-- END MAIN CONTENT