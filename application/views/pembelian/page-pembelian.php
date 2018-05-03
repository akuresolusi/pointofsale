<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<div class="panel panel-default panel-title">
			<div class="panel-body title-pos">
				<div class="col-md-6" style="padding: 0;">
					<span id="sub-title">Pembelian</span>
					<h3 class="page-title"><?php echo $title; ?></h3>
				</div>
				<div class="col-md-6 add-data">
				    <a href="<?php echo base_url(); ?>pembelian/tambah"><button class="btn btn-primary btn-action btn-add"><span class="fa fa-plus"> Tambah Pembelian</span></button></a>
				</div>
			</div>
		</div>
		<div class="panel panel-headline">
			<div class="panel-heading">
			</div>
			<div class="panel-body">
				<table id="data" class="table table-striped table-hover">
					<thead>
						<th style="text-align: left;">No</th>
						<th>Faktur</th>
						<th>Tanggal</th>
						<th>Referensi</th>
						<th>Supplier</th>
						<th>Syarat Pembayaran</th>
						<th width="10">Aksi</th>
					</thead>
					<tbody>
					<?php
						$i=0;
						foreach($list as $value) {
							$i++;
							$supplier = $this->master_model->detail_supplier($value['idsupplier']);
							$syaratbayar = $this->master_model->detail_syaratbayar($value['idsyaratbayar']);
							echo"
							<tr>
								<td>".$i."</td>
								<td>FB-".$value['faktur']."</td>
								<td>".date_format(date_create($value['tanggal']),'d M Y')."</td>
								<td>".$value['referensi']."</td>
								<td>".$supplier['nama']."</td>
								<td>".$syaratbayar['nama']."</td>
								<td style='text-align: center;'>
								<div class='dropdown'>
							        <a href='#'' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'>Tindakan <span class='caret'></span></a>
							        <ul class='dropdown-menu pull-right'>
							            <li><a href='".base_url()."pembelian/details?faktur=".$value['faktur']."'><span class='fa fa-eye'></span> Lihat Data</a></li>
							            <li><a href='".base_url()."pembelian/edit?faktur=".$value['faktur']."'><span class='fa fa-edit'></span> Edit Data</a></li>
							            <li><a class='hapus_faktur' value='".$value['faktur']."' style='cursor: pointer;' ><span class='fa fa-trash'></span> Hapus Data</a></li>
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


<script type="text/javascript">
	$(document).on("click", ".hapus_faktur", function(){
		var faktur = $(this).attr('value');
		$.ajax({
			type: "post",
			data: "faktur=" + faktur,
			url: '<?php echo base_url(); ?>pembelian/hapus_faktur',
			success: function(result){
				if(result == ""){
					 alert('Faktur Berhasil Dihapus');
					 location.reload();
				}else{
					alert(result);
				}
			}
		});
	});
</script>