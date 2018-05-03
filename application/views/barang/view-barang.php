<!-- MAIN CONTENT -->
<style type="text/css">
	/* The grid: Four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    padding: 10px;
}

/* Style the images inside the grid */
.column img {
    opacity: 0.8; 
    cursor: pointer; 
}

.column img:hover {
    opacity: 1;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* The expanding image container */
.container {
    position: relative;
    display: none;
}

/* Expanding image text */
#imgtext {
    position: absolute;
    bottom: 15px;
    left: 15px;
    color: white;
    font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
    position: absolute;
    top: 10px;
    right: 15px;
    color: white;
    font-size: 35px;
    cursor: pointer;
}
</style>
<div class="main-content">
	<div class="container-fluid">
	<div class="panel panel-default panel-title">
		<div class="panel-body title-pos">
			<div class="col-md-6" style="padding: 0;">
				<span id="sub-title">Produk</span>
				<h3 class="page-title"><?php echo $title; ?></h3>
			</div>
			<div class="col-md-6">
			    <h3 id="desc">KODE. <span class="indigo">RS51K54F02C</span></h3>
			</div>
		</div>
	</div>
	<div class="panel panel-headline">
		<div class="panel-heading">
		</div>
		  <div class="panel-body">
				
                <div class="col-md-8">
                    <table class="table table-hover table-striped">
                    	<thead>
                    		<th colspan="3">Detail Barang</th>
                    	</thead>
                    	<tbody>
                    		<tr>
                    			<td>Nama Barang</td>
                    			<td>:</td>
                    			<td>Kulkas Side Bye Side RS51K54F02C</td>
                    		</tr>
                    		<tr>
                    			<td>Kategori Barang</td>
                    			<td>:</td>
                    			<td>Kemeja</td>
                    		</tr>
                    		<tr>
                    			<td>Satuan</td>
                    			<td>:</td>
                    			<td>Pac</td>
                    		</tr>
                    		<tr>
                    			<td>Warna</td>
                    			<td>:</td>
                    			<td>Merah</td>
                    		</tr>
                    		<tr>
                    			<td>Ukuran</td>
                    			<td>:</td>
                    			<td>S</td>
                    		</tr>
                    		<tr>
                    			<td>Harga 1</td>
                    			<td>:</td>
                    			<td>0</td>
                    		</tr>
                    		<tr>
                    			<td>Harga 2</td>
                    			<td>:</td>
                    			<td>0</td>
                    		</tr>
                    		<tr>
                    			<td>Harga 3</td>
                    			<td>:</td>
                    			<td>0</td>
                    		</tr>
                    		<tr>
                    			<td>Harga 4</td>
                    			<td>:</td>
                    			<td>0</td>
                    		</tr>
                    		<tr>
                    			<td>Harga 5</td>
                    			<td>:</td>
                    			<td>0</td>
                    		</tr>
                    	</tbody>
                    </table>
                    <a href="<?php echo base_url(); ?>barang" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Daftar Barang</a>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url(); ?>assets/img/noimage.jpg" alt="" width="320">
                    
                </div>
			</div>
		</div>
	</div>
</div>
		