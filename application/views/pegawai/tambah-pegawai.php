<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
			<div class="panel panel-default panel-title">
				<div class="panel-body title-pos">
					<div class="col-md-6" style="padding: 0;">
						<span id="sub-title">Pegawai</span>
						<h3 class="page-title"><?php echo $title; ?></h3>
					</div>
				</div>
			</div>
		<div class="panel panel-default">
		    	<div class="panel-body">
					<?php echo form_open('pegawai/tambah_pegawai'); ?>
					  	<div class="form-group">
					  	<div class="form-group col-md-4">
					  		<label>Nama Lengkap</label>
					  		<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="">
					  	</div>
					    <div class="form-group col-md-2">
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
					    
					  	<div class="form-group col-md-3">
					    	<label>Pendidikan</label> 
					    	<select class="form-control" name="pendidikan" required="">
						    	<?php
					    			$data_jenis = array('SD','SMP','SMA','S1');
					    			foreach ($data_jenis as $value) {
					    				echo "<option value='".$value."'>".$value."</option>";
					    			}
					    		?>
						    </select>
					    </div>
					    <div class="col-md-3">
					  		<label>Tanggal Masuk</label>
					  		<input type="date" name="tglmasuk" class="form-control" placeholder="Tanggal Masuk" required="">
					  	</div>
					    <div class="form-group col-md-4">
					    	<label>Jabatan</label> 
					    	<select class="form-control" name="jabatan" required="">
						    	<?php
					    			foreach ($list_jabatan as $value) {
					    				echo "<option value='".$value['id']."'>".$value['jabatan']."</option>";
					    			}
					    		?>
						    </select>
					    </div>
					    
					  	<div class="form-group col-md-4">
					  		<label>Telp/No Hp</label>
					  		<input type="number" maxlength="13" name="nohp" class="form-control" placeholder="No Hp">
					  	</div>
					  	<div class="form-group col-md-4">
					  		<label>Password</label>
					  		<input type="password" name="password" class="form-control" placeholder="Password">
					  	</div>
					  	
					    <div class=" form-group col-md-12">
					  		<label>Alamat</label>
					  		<textarea class="form-control" required="" name="alamat" placeholder="Alamat"></textarea>
					  	</div>
					    
					  	</div>
						
			    	</div>
				</div>
				<div class="panel panel-default">
			    		<div class="panel-body">
							  	<div class="col-md-12">
							  		<label>Hak Akses</label>
							  	</div>
							  	<?php
							  		$data_cek = array('Dashboard','Data Barang','Master Data','Pembelian','Penjualan','Point Of Sale','Biaya Beban','Laporan');
							  		foreach ($data_cek as $value) {
							  			echo "
							  				<div class='col-md-3'>
										  		<div class='form-group'>
										  			<label class='checkbox-inline'><input type='checkbox' name='akses[]' value='".$value."'>".$value."</label>
										  		</div>
										  	</div>";
							  		}
							  	?>

								  	<div  class="form-group col-md-12">
							    	<button type="submit" class="btn btn-primary" style="margin-bottom: 10px;"><span class="fa fa-save"></span> Simpan</button>
							    	<a href="<?php echo base_url(); ?>pegawai" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Daftar Pegawai</a>
							    	<button type="reset" class="btn btn-danger" style="margin-bottom: 10px;><span class="fa fa-remove"></span> Batal</button>
								</div>
							</div>
			  			</div>
					</div>

					<?php echo form_close(); ?>
<!-- END MAIN CONTENT -->