<!-- MAIN CONTENT -->
<style>
.hide{
	display: none;
}
option{
	color: #000;
}
</style>
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-default panel-title">
							<div class="panel-body title-pos">
								<div class="col-md-6" style="padding: 0;">
									<span id="sub-title">Pembelian</span>
									<h3 class="page-title"><?php echo $title; ?></h3>
								</div>
							</div>
						</div>
						<div class="panel panel-default panel-title">
							<div class="panel-body title-pos body-blue">
								<div class="col-md-12">
								<div class="form-group col-md-3">
								    	<label>No. Faktur Pembelian</label>
								      	<input type="text" class="form-control" placeholder="No. Faktur Pembelian">
								</div>	
								<div class="form-group col-md-4">
								    	<label>Nama Supplier</label>
								      	<input type="text" class="form-control" placeholder="Supplier" disabled="">
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
								    <div class=" form-group col-md-8">
								  		<label>Alamat</label>
								  		<textarea class="form-control" placeholder="Alamat" style="height: 105px" disabled=""></textarea>
								  	</div>
								  	 <div class="form-grou col-md-4" style="padding: 0; margin-bottom: 10px;">
										    <div class="col-sm-12 controls">
										    	<label>Tgl Faktur</label>
										      <div class="input-group">
										      	<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
											    <input type="date" class="form-control" id="inputfield2" placeholder="Input 2" disabled="">
											  </div>
											</div>
										  </div>
								        <div class="form-group col-md-4" style="padding: 0">
									    <div class="col-sm-12 controls">
									    	<label>Tgl Retur</label>
									      <div class="input-group">
									      	<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
										    <input type="date" class="form-control" id="inputfield2" placeholder="Input 2">
										  </div>
										</div>
									  </div>
									</div>
								  	<div class="col-md-12">
								  		<table class="table table-striped" id="tbl">
									    <thead>
									      	<th>Barang</th>
									      	<th width="120">Telah Diterima</th>
									      	<th width="120">Telah Retur</th>
									      	<th width="100">Jumlah Retur</th>
									      	<th width="150">Harga</th>
									      	<th width="100">Diskon</th>
									      	<th width="150">Jumlah Bayar</th>
									      	<th>Sub Total</th>
									        </thead>
									    <tbody>
									      <tr>
									        <td>Stapler</td>
									        <td style="text-align: right;">10,00</td>
									        <td style="text-align: right;">5,00</td>
									        <td><input type="number" name="" class="form-control"></td>
									        <td><input type="number" name="" class="form-control"></td>
									        <td><input type="number" name="" class="form-control"></td>
									        <td><input type="number" name="" class="form-control"></td>
									        <td style="text-align: right;">Rp.10.000</td>
									      </tr>
									      <tr>
									        <td>Stapler</td>
									        <td style="text-align: right;">10,00</td>
									        <td style="text-align: right;">5,00</td>
									        <td><input type="number" name="" class="form-control"></td>
									        <td><input type="number" name="" class="form-control"></td>
									        <td><input type="number" name="" class="form-control"></td>
									        <td><input type="number" name="" class="form-control"></td>
									        <td style="text-align: right;">Rp.10.000</td>
									      </tr>
									    </tbody>
									  </table>
								  		
								  		<div class="col-md-5" style="padding-right: 30px;">
								  			<div class="row d">
								  				<span id="d-title">Total Tagihan</span>	
								  				<span id="sub-number">Rp. 0</span>	
								  			</div>
								  			<div class="row d">
								  				<span id="d-title">Total Pembayaran</span>	
								  				<span id="sub-number">Rp. 0</span>	
								  			</div>
								  			<div class="row d">
								  				<span id="d-title">Total Retur Sebelumnya</span>	
								  				<span id="sub-number">Rp. 0</span>	
								  			</div>
								  			<div class="row d">
								  				<span id="d-title">Pengembalian Uang</span>	
								  				<span id="sub-number"><input type="number" class="form-control" name="" style="width: 175px;"></span>	
								  			</div>
								  			<div class="row d">
								  				<span id="d-title">Sisa Tagihan</span>	
								  				<span id="sub-number">Rp. 0</span>	
								  			</div>
								  		</div>
								  		<div class="col-md-3" style="margin-bottom: 20px;">
								  			<label>Catatan</label>
								  			<textarea class="form-control" style="height: 150px;"></textarea>
								  		</div>
								  		<div class="col-md-4" style="padding-left: 30px;">
								  			<div class="row d">
								  				<span id="d-title">Sub Total</span>	
								  				<span id="sub-number">Rp. 0</span>	
								  			</div>
								  			<div class="row d">
								  				<span id="d-title">Diskon</span>	
								  				<span id="sub-number"><input type="number" class="form-control" name="" style="width: 175px;"></span>
								  			</div>
								  			<div class="row d">
								  				<span id="d-title">Pajak</span>	
								  				<span id="sub-number"><input type="number" class="form-control" name="" style="width: 175px;"></span>	
								  			</div>
								  			<div class="row d">
								  				<span id="d-title">Biaya Lainnya</span>	
								  				<span id="sub-number"><input type="number" class="form-control" name="" style="width: 175px;"></span>	
								  			</div>
								  		</div>
								  		<div  class="form-group col-md-12" style="padding-left: 0;">
								    	<button type="submit" class="btn btn-primary" style="margin-bottom: 10px;"><span class="fa fa-save"></span> Simpan</button>
								    	<a href="<?php echo base_url(); ?>returbeli" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Daftar Retur</a>
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