<!-- MAIN CONTENT -->
<style>
.hide{
	display: none;
}
option{
	color: #000;
}
</style>

<style type="text/css">

  #hasilpencarianbarang{ 
    padding: 0px; 
    display: none; 
    position: absolute; 
    max-height: 200px;
    width: 443px;
    overflow: auto;
    border:1px solid #ddd;
    z-index: 1;
  }

  #daftar-autocomplete{ 
    list-style:none; 
    margin:0; 
    padding:0; 
    width:100%;
  }

  #daftar-autocomplete li{
    padding: 5px 10px 5px 10px; 
    background:#FAFAFA; 
    border-bottom:#ddd 1px solid;
  }

  #daftar-autocomplete li:hover,
  #daftar-autocomplete li.autocomplete_active{ 
    background:#6bb9f0; 
    color:#fff; 
    cursor: pointer;
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
					    <label>Pelanggan</label> <br/>
					    <input type="hidden" id="idpelanggan" name="pelanggan">
					    <input type="hidden" value="<?php echo $faktur; ?>" name="faktur" id="faktur">
					    <input type="text" class="form-control" id="namapelanggan" placeholder="Klik untuk memilih pelangan"  required="">
					</div>
					<div class="form-group col-md-8">
				    	<label>Alamat</label>
				    	<textarea class="form-control" id="alamatpelanggan" style="height: 35px" readonly>-</textarea>
				    </div>
				    <div class="form-group col-md-4">
				    	<label>Kategori</label>
				    	<input type="text" id="kategoripelanggan" value="-" class="form-control" readonly>
				    	<input type="hidden" id="kategoriharga">
				    </div>
				    <div class="form-group col-md-4">
				    	<label>Syarat Bayar</label>
				    	<select class="form-control">
				    		<?php
				    		foreach ($list_syarat_bayar as $value) {
				    			echo"<option value='".$value['id']."'>".$value['nama']."</option>";
				    		}
				    		?>
				    	</select>
				    </div>
				    <div class="form-group col-md-4">
				    	<label>Tanggal Faktur</label>
				      	<input type="date" name="tanggal" value="<?php echo date('Y-m-d') ?>" class="form-control">
				    </div>
				</div>
				</div>
			</div>
		<div class="panel panel-default">
		    	<div class="panel-body">
					<form>
					  	<div class="col-md-12">
					  		<table class="table" id="tb" style="margin-top: 20px">
					  			<!-- THEAD -->
					  			<tr>
					  				<th width="150">Kode</th>
					  				<th>Nama Barang</th>
					  				<th width="100">Qty</th>
					  				<th width="200">Harga</th>
					  				<th width="200">Sub Total</th>
					  				<th width="20"></th>
					  			</tr>
					  			<!-- END THEAD -->
					  			<tr>
					  				<td style="padding-left: 0px;">
					  					<input type="hidden" id="idbarang">
					  					<input type="hidden" id="modalbarang">
					  					<input type="text" id="kodebarang" class="form-control">
					  					<div id="hasilpencarianbarang"></div>
					  				</td>
					  				<td style="padding-left: 0px;">
					  					<input type="text" id="namabarang" class="form-control">
					  				</td>
					  				<td>
					  					<input type="number" name="" id="qty" min="1" class="form-control">
					  				</td>
					  				<td>
					  					<input type="number" id="harga" min="0" class="form-control" placeholder="Rp." style="text-align: right;">
					  				</td>
					  				<td style="text-align: right;">
					  					Rp <span id="subtotal"></span>
					  				</td>
					  				<td>
					  					<span class="fa fa-plus" id="tambah-item" style="font-size: 25px; color:#3498DB"></span>
					  				</td>
					  			</tr>
					  			<!-- TBODY -->
					  			<tbody id="list_items"></tbody>
					  			<!-- TBODY -->
					  		</table>
					  		
					  		<div class="col-md-6" style="padding-left: 0; margin-bottom: 20px;">
					  			<label>Catatan</label>
					  			<textarea class="form-control" style="height: 185px;"></textarea>
					  		</div>
					  		<div class="col-md-5" style="float: right;">
					  				<div class="row d">
						  				<span id="d-title">TOTAL</span>	
						  				<span id="sub-number">
						  					<input type="text" readonly id="subtotal" value="342342" class="form-control" style="width: 240px">
						  				</span>	
						  			</div>
						  			<div class="row d">
						  				<span id="d-title">PAJAK</span>
						  				<span id="sub-number"><input type="text" id="hargapajak" name=""  class="form-control" style="width: 150px; margin-left:  10px; text-align: right;" placeholder="Rp." disabled></span>		
						  				<span id="sub-number"><input type="number" min="0" max="100" class="form-control" style="width: 80px;" id="persenpajak" name="pajak" placeholder="%"></span>
						  			</div>
						  			<div class="row d">
						  				<span id="d-title">DISKON</span>	
						  				<span id="sub-number"><input type="number" id="hargadiskon" class="form-control" style="width: 150px; margin-left:  10px; text-align: right;" placeholder="Rp."></span>		
						  				<span id="sub-number"><input type="number" id="persendiskon" name="diskon"  class="form-control" style="width: 80px;" placeholder="%"></span>
						  			</div>
						  			<div class="row d">
						  				<span id="d-title">BIAYA LAINYA</span>	
						  				<span id="sub-number">
						  					<input type="number" value="" class="form-control" style="width: 240px">
						  				</span>	
						  			</div>
						  			<div class="row d">
						  				<span id="d-title">GRAND TOTAL</span>	
						  				<span id="sub-number">
						  					<input type="text" readonly id="subtotal" class="form-control" style="width: 240px">
						  				</span>	
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



<?php $this->load->view('Penjualan/modal-cari-pelanggan'); ?>
<?php $this->load->view('Penjualan/modal-tambah-pelanggan'); ?>
<?php $this->load->view('Penjualan/modal-tambah-barang'); ?>



<script src="<?php echo base_url(); ?>assets/js/bootstrap-select.js"></script>
<script type="text/javascript">
	
	function cari_pelangan(){
		var keyword = $("#caripelanggan").val();
		$.ajax({
			url: "<?php echo base_url(); ?>penjualan/cari_pelanggan",
			type: "post",
			cache: false,
			data: "like=" + keyword,
			dataType: "json",
			success: function(json){
				$("#hasilpencarian").show();
				$("#hasilpencarian").html(json.datanya);
			}
		});
	}

	$(document).on('keyup', '#caripelanggan', function(e){
		cari_pelangan();   
	});

	$("#namapelanggan").click(function(){
		cari_pelangan();
		$('#modal-pelanggan').modal('show');
	});


	$(document).on('click', '.pilih-pelanggan', function(e){
		$("#idpelanggan").val($(this).attr('value_id'));
		$("#namapelanggan").val($(this).attr('value_nama'));
		$("#alamatpelanggan").val($(this).attr('value_alamat'));
		$("#kategoripelanggan").val($(this).attr('value_kategori'));
		$("#kategoriharga").val($(this).attr('value_kategoriharga'));
		hapus_form();	
	});


	$(document).on('keyup', '#namabarang', function(e){
		var keyword = $("#namabarang").val();
		if(keyword !== ""){
			var charcode = e.which || e.keyCode;
			$.ajax({
				url: "<?php echo base_url(); ?>barang/cari_barang",
				type: "post",
				cache: false,
				data: "like=" + keyword,
				dataType: "json",
				success: function(json){
					if(json.status == 1){
						$("#hasilpencarianbarang").show();
						$("#hasilpencarianbarang").html(json.datanya);
					}
					if(json.status == 0){
						$("#hasilpencarianbarang").show();
						$("#hasilpencarianbarang").html(json.datanya);
					}
				}
			});       
		}else{
			$("#hasilpencarianbarang").hide();      
		}
	});

	$(document).on('keyup', '#kodebarang', function(e){
		var keyword = $("#kodebarang").val();
		if(keyword !== ""){
			var charcode = e.which || e.keyCode;
			$.ajax({
				url: "<?php echo base_url(); ?>barang/cari_barang",
				type: "post",
				cache: false,
				data: "like=" + keyword,
				dataType: "json",
				success: function(json){
					if(json.status == 1){
						$("#hasilpencarianbarang").show();
						$("#hasilpencarianbarang").html(json.datanya);
					}
					if(json.status == 0){
						$("#hasilpencarianbarang").show();
						$("#hasilpencarianbarang").html(json.datanya);
					}
				}
			});       
		}else{
			$("#hasilpencarianbarang").hide();      
		}
	});


	$(document).ready(function(){
		$(document).click(function(){
			$("#hasilpencarianbarang").hide();
		});
	});


	function ambil_harga(id, harga){
		$.ajax({
			url: "<?php echo base_url(); ?>penjualan/ambil_harga",
			type: "post",
			cache: false,
			data: "id=" + id + "&harga=" + harga,
			dataType: "html",
			success: function(data){
				$("#harga").val(data);
				$("#qty").val(1);
				$("#subtotal").html(data);
			}
		});
	}


	$(document).on("click", "#daftar-autocomplete li", function(){
		var id = $(this).find("span#id").html();
		var kode = $(this).find("span#kode").html();
		var nama = $(this).find("span#barang").html();
		var modal = $(this).find("span#modal").html();

		$("#idbarang").val(id);
		$("#kodebarang").val(kode);
		$("#namabarang").val(nama);
		$("#modalbarang").val(modal);
		$("#qty").val(1);
		ambil_harga(id, $("#kategoriharga").val());	

	});

	function hapus_form() {
		$("#idbarang").val('');
		$("#kodebarang").val('');
		$("#namabarang").val('');
		$("#qty").val('');
		$("#harga").val('');
		$("#subtotal").html('Rp ');
	}


	$("#namabarang").click(function(){
		if($("#namapelanggan").val() ==  ""){
			cari_pelangan();
			$('#modal-pelanggan').modal('show');
		}
	});

	$("#kodebarang").click(function(){
		if($("#namapelanggan").val() ==  ""){
			cari_pelangan();
			$('#modal-pelanggan').modal('show');
		}
	});


	$(document).on('keyup', '#qty', function(e){
		$("#subtotal").html($("#qty").val() * $("#harga").val());
	});

	$(document).on('keyup', '#harga', function(e){
		$("#subtotal").html($("#qty").val() * $("#harga").val());
	});


	$(document).on('click', '#tambah-item', function(e){
		var faktur = $("#faktur").val();
		var idpelangan = $("#idpelangan").val();
		var idbarang = $("#idbarang").val();
		var kodebarang = $("#kodebarang").val();
		var namabarang = $("#namabarang").val();
		var modal = $("#modalbarang").val();
		var qty = $("#qty").val();
		var harga = $("#harga").val();
		if(faktur == "" || idpelangan == "" || idbarang == "" || kodebarang == "" || namabarang == ""  || qty == "" || harga == ""){
			alert('Gagal, Periksa kembali form input');
		}else{
			$.ajax({
				url: "<?php echo base_url(); ?>penjualan/input_item",
				type: "post",
				cache: false,
				data: "faktur=" + faktur + "&idbarang=" + idbarang + "&qty=" + qty + "&harga=" + harga + "&modal=" + modal ,
				dataType: "html",
				success: function(data){
					hapus_form();
					list_items();
				}
			});
		}
	});

	function list_items(){
		var faktur = $("#faktur").val();
		$.ajax({
			url: "<?php echo base_url(); ?>penjualan/list_items",
			type: "post",
			cache: false,
			data: "faktur=" + faktur,
			dataType: "html",
			success: function(data){
				$("#list_items").html(data);
			}
		});
	}
	list_items();

	$(document).on('click', '.hapus-item', function(e){
		var id = $(this).attr('id-item');
		$.ajax({
			url: "<?php echo base_url(); ?>penjualan/hapus_items",
			type: "post",
			cache: false,
			data: "id=" + id,
			success: function(){
				list_items();
				alert('Item dihapus');
			}
		});
	});

</script>