<div class="main-content">
	<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin:0; margin-top: -15px;" >
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      <li data-target="#myCarousel" data-slide-to="1"></li>
	    </ol>

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner">
	      <div class="item active">
	        <img src="<?php echo base_url() ?>assets/img/slide/sd2.jpg" alt="Los Angeles" style="width:100%;">
	      </div>

	      <div class="item">
	        <img src="<?php echo base_url() ?>assets/img/slide/sd3.jpg"" alt="Chicago" style="width:100%;">
	      </div>
	    </div>

	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right"></span>
	      <span class="sr-only">Next</span>
	    </a>
	</div>

	<div class="container-fluid">
        <a href="<?php echo base_url() ?>salesorder/tambahso">
	        <div class="col-xs-4" style="padding: 10px; margin-top: 20px;">
	        	<div class="grid-mobile">
	        		<img src="<?php echo base_url() ?>assets/img/flaticon/transaksi.png">
	        	</div>
	        	<p id="grid-title">Tambah SO</p>
	        </div>
        </a>
        <a href="<?php echo base_url() ?>salesorder/history">
	        <div class="col-xs-4 " style="padding: 10px;  margin-top: 20px;">
	        	<div class="grid-mobile">
	        		<img src="<?php echo base_url() ?>assets/img/flaticon/history.png">
	        	</div>
	        	<p id="grid-title">Transaksi</p>
	        </div>
        </a>
        <a href="<?php echo base_url() ?>salesorder/pendapatan">
	        <div class="col-xs-4" style="padding: 10px;  margin-top: 20px;">
	        	<div class="grid-mobile">
	        		<img src="<?php echo base_url() ?>assets/img/flaticon/profits.png">
	        	</div>
	        	<p id="grid-title">Pendapatan</p>
	        </div>
        </a>
	</div>
</div>