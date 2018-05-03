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
									<span id="sub-title">Penjualan</span>
									<h3 class="page-title"><?php echo $title; ?></h3>
								</div>
							</div>
						</div>
						<div class="panel panel-default panel-title">
							<div class="panel-body title-pos body-blue">
								<div class="col-md-12">
								<div class="form-group col-md-3">
								    	<label>ID Pelanggan</label>
								      	<input type="text" class="form-control" placeholder="ID">
								</div>	
								<div class="form-group col-md-4">
								    	<label>Nama Pelanggan</label> 
								    	<select class="form-control" required="" data-live-search="true">
								    		<option value="" disabled selected class="hide">- Pilih Pelanggan -</option>
										    	<option>Firman</option>
										    	<option>Agus</option>
									    </select>
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
								  		<textarea class="form-control" placeholder="Alamat" style="height: 105px"></textarea>
								  	</div>
								  	 <div class="form-group col-md-4" style="padding: 0;">
										    <div class="col-sm-12 controls">
										    	<label>Tgl Bayar</label>
										      <div class="input-group">
										      	<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
											    <input type="date" class="form-control" id="inputfield2" placeholder="Input 2">
											  </div>
										</div>
									<div class="form-group col-sm-12" style="margin-top: 10px;">
								    	<label>Metode Pembayaran</label> 
								    	<select class="form-control" required="" data-live-search="true">
								    		<option value="" disabled selected class="hide">- Pilih Metode -</option>
										    	<option>Cash</option>
										    	<option>Bank Transfer</option>
									    </select>
									</div>

									</div>
								  	<div class="col-md-12">
								  		<table class="table table-striped" id="tbl">
									    <thead>
									    	<th width="20"><input type="checkbox" id="chckHead"></th>
									      	<th>No. Faktur</th>
									      	<th>Tgl Faktur</th>
									      	<th>Cara Bayar</th>
									      	<th>Nilai Faktur</th>
									      	<th>Sisa Hutang</th>
									      	<th width="100">Diskon</th>
									      	<th width="200">Jumlah Bayar</th>
									        </thead>
									    <tbody>
									      <tr>
									        <td><input type="checkbox" class = "chcktbl"></td>
									        <td>FB-0000018</td>
									        <td>Jan 12, 2018</td>
									        <td>Cash</td>
									        <td>200.000</td>
									        <td>200.000,00</td>
									        <td><input type="number" name="" class="form-control"></td>
									        <td><input type="number" name="" class="form-control"></td>
									      </tr>
									      <tr>
									        <td><input type="checkbox" class = "chcktbl"></td>
									        <td>FB-0000018</td>
									        <td>Jan 12, 2018</td>
									        <td>Cash</td>
									        <td>200.000</td>
									        <td>200.000,00</td>
									        <td><input type="number" name="" class="form-control"></td>
									        <td><input type="number" name="" class="form-control"></td>
									      </tr>
									    </tbody>
									  </table>
								  		<div class="col-md-5" style="padding-left: 0; margin-bottom: 20px;">
								  			<label>Catatan</label>
								  			<textarea class="form-control" style="height: 115px;"></textarea>
								  		</div>
								  		<div class="col-md-6" style="float: right;">
								  			<div class="row d">
								  				<span id="d-title">Sub Total</span>	
								  				<span id="sub-number">Rp. 10.000</span>	
								  			</div>
								  			<div class="row d">
								  				<span id="d-title">Jumlah Bayar</span>	
								  				<span id="sub-number"><input type="number" class="form-control" name="" style="width: 175px;"></span>	
								  			</div>
								  			<div class="row d">
								  				<span id="d-title">Biaya Lainnya</span>	
								  				<span id="sub-number"><input type="number" class="form-control" name="" style="width: 175px;"></span>	
								  			</div>
								  			<div class="row d">
								  				<span id="d-title">Penambahan Deposit</span>	
								  				<span id="sub-number"><input type="number" class="form-control" name="" style="width: 175px;"></span>	
								  			</div>
								  			<div class="row d">
								  				<span id="d-title">Uang Kembali</span>	
								  				<span id="sub-number">Rp. 0</span>	
								  			</div>
								  		</div>

								  		<div  class="form-group col-md-12" style="padding-left: 0;">
								    	<button type="submit" class="btn btn-primary" style="margin-bottom: 10px;"><span class="fa fa-save"></span> Simpan</button>
								    	<a href="<?php echo base_url(); ?>pembelian" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Daftar Pelunasan</a>
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
			<script src="https://cdn.datatables.net/select/1.2.5/js/dataTables.select.min.js"></script>						 

								<script type="text/javascript">
							    $('.chcktbl').click(function () {
							        var length = $('.chcktbl:checked').length;      
							        if (length > 3) {
							            alert(length);
							            $('.chcktbl:not(:checked)').attr('disabled', true);
							        }
							        else {
							            $('.chcktbl:not(:checked)').attr('disabled', false);
							        }
							    });
							</script>
							<script type="text/javascript">
							    $('#chckHead').click(function () {
							        if (this.checked == false) {
							            $('.chcktbl:checked').attr('checked', false);
							        }
							        else {
							            $('.chcktbl:not(:checked)').attr('checked', true);
							        }
							    });
							    $('#chckHead').click(function () {
							    });
							</script>