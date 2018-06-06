<div class="main-content">
	<div class="container-fluid">
		<div class="col-xs-6 col-sm-6 nopadding" style="padding-right: 5px">
        	<button class="btn btn-primary btn-cstm" data-toggle="modal" data-target="#modalCari" style="width: 100%; background: #6BB9F0;"><span class="fa fa-search"></span> Cari Pelanggan</button>
        </div>
        <div class="col-xs-6 col-sm-6 nopadding" style="padding-left: 5px;">
        	<button class="btn btn-success  btn-cstm" data-toggle="modal" data-target="#modalTambah" style="width: 100%"><span class="fa fa-user-plus"></span> Tambah Pelanggan</button>
        </div>
        <div class="col-xs-12 result-mobile">
        	<div class="col-xs-3">
        		<img src="<?php echo base_url() ?>assets/img/flaticon/user.png">
        	</div>
        	<div class="col-xs-9" style="padding-left: 0">
        		<p id="name">Firman</p>
        	</div>
        	
        	<div class="col-xs-9" style="padding-left: 0">
        		<p id="address">Jl. Sunggal, Medan Sunggal, Kota Medan, Sumatera Utara 20127</p>
        	</div>
        </div>
	</div>
</div>

<!-- MODAL CARI PELANGGAN -->
  <div class="modal fade" id="modalCari" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-search"></span> CARI PELANGGAN</h4>
        </div>
        <div class="modal-body">
	        <div id="custom-search-input">
	            <div class="input-group col-md-12">
	                <input type="text" class="form-control input-lg" placeholder="Cari Pelanggan" />
	                <span class="input-group-btn" style="border: 1px solid #eaeaea">
	                    <button class="btn btn-info btn-lg" type="button">
	                        <i class="glyphicon glyphicon-search"></i>
	                    </button>
	                </span>
	            </div>
	        </div>
	        <div class="row">
		        <div class="col-xs-12 result-mobile">
		        	<div class="col-xs-3">
		        		<img src="<?php echo base_url() ?>assets/img/flaticon/user.png">
		        	</div>
		        	<div class="col-xs-9" style="padding-left: 0">
		        		<p id="name">Firman</p>
		        	</div>
		        	<div class="col-xs-9" style="padding-left: 0">
		        		<p id="address">Jl. Sunggal, Medan Sunggal, Kota Medan, Sumatera Utara 20127</p>
		        	</div>
		        </div>
	        </div>
        </div>
        <div class="modal-footer">
        	<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
          	<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-remove"></span> Tutup</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- END MODAL -->

<!-- MODAL TAMBAH PELANGGAN -->
  <div class="modal fade" id="modalTambah" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-user-plus"></span> TAMBAH PELANGGAN</h4>
        </div>
        <div class="modal-body">
	        <div class="form-group">
	        	<label>Nama Lengkap</label>
	        	<input type="text" class="form-control" name="" placeholder="Nama Lengkap">
	        </div>
	        <div class="form-group">
	        	<label>No Handphone</label>
	        	<input type="text" class="form-control" name="" placeholder="No Handphone">
	        </div>
	        <div class="form-group">
	        	<label>Kategori</label>
	        	<select class="form-control" required="">
	        		<option>Umum</option>
	        	</select>
	        </div>
	        <div class="form-group">
	        	<label>Alamat</label>
	        	<textarea class="form-control" placeholder="Alamat"></textarea>
	        </div>
        </div>
        <div class="modal-footer">
        	<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
          	<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-remove"></span> Tutup</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- END MODAL -->