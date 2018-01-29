<!DOCTYPE html>
<html>
<head>
<title>Pisang Ijo</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content=""> 
	
	<!-- shortcut icon -->
<link rel="shortcut icon" href="<?php echo base_url('assets/image/icon/pisang.png');?>">
<link rel="ramen-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/image/icon/pisang-144.png');?>">
<link rel="ramen-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/image/icon/pisang-114.png');?>">
<link rel="ramen-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/image/icon/pisang-72.png');?>">
<link rel="ramen-icon-precomposed" href="<?php echo base_url('assets/image/icon/pisang-52.png');?>">

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.mCustomScrollbar.min.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/unslider.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/template.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/index.css');?>" />

<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
<link href="https://cdn.materialdesignicons.com/2.0.46/css/materialdesignicons.min.css" rel="stylesheet">
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet">

<!-- js -->
<script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/modernizr.custom.28468.js');?>"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url('assets/js/move-top.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/easing.js');?>"></script>
</head>

<body id="page-top" data-target="#nino-navbar" data-spy="scroll">

	<!-- Header
    ================================================== -->
	<header id="nino-header">
		<div id="nino-headerInner">					
			<nav id="nino-navbar" class="navbar navbar-default" role="navigation">
				<div class="container">

					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nino-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand js-scroll-trigger" href="#page-top">PIJO</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="nino-menuItem pull-right">
						<div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#nino-header">Home <span class="sr-only">(current)</span></a></li>
								<li><a class="js-scroll-trigger" href="#menu-makanan">Pesan</a></li>
								<li><a class="js-scroll-trigger" href="#about">Tentang</a></li>
								<li><a class="js-scroll-trigger" href="#nino-map">Lokasi</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
						<ul class="nino-iconsGroup nav navbar-nav">
							<li style="top: 15px; right: 5px;"><span class="fa fa-shopping-cart my-cart-icon" style="color: white; cursor: pointer;"><span class="badge badge-notify my-cart-badge"></span></span></li>
						</ul>
					</div>
				</div><!-- /.container-fluid -->
			</nav>
 
			<section id="nino-slider" class="carousel slide container" data-ride="carousel" style="height: 200px;">
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<h2 class="nino-sectionHeading">
							<span class="nino-subHeading" style="font-family: 'Montserrat', sans-serif;">Selamat Datang</span>
						</h2>
					</div>
				</div>

				<!-- Indicators -->
			</section>
		</div>
	</header><!--/#header-->

  <!--Menu -->
  <section id="menu-makanan">
  <div class="container">
  	<br>

  	    		<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">Order Page</span>
				Pilih Menu Anda
			</h2>

        
               
<!--content-->
<div class="product">
	<div class="container ">
  
    <br>
    <br>

			<div class="tab-head ">
				<nav class="nav-sidebar">
					<center>
					<ul class="nav tabs">
					  <li class="active"><a href="#tab1" data-toggle="tab">Makanan</a></li>
					  <li class=""><a href="#tab2" data-toggle="tab">Minuman</a></li> 
					</ul>
					</center>
				</nav>
				<div class=" tab-content tab-content-t ">
					<div class="tab-pane active text-style" id="tab1">
						<?php $i=1; ?>
						<div class=" con-w3l ">
							<?php foreach($makanan as $menu): ?>
							<div class="col-md-3 m-wthree">
								
								<div class="col-m">								
									<a href="#" data-toggle="modal" data-target="#myModal<?=$i?>" class="offer-img">
										<img src="<?php echo base_url('assets/image/menu/ma1.jpg');?>" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="#"><?php echo $menu['nama_makanan']; ?></a></h6>							
										</div>
										<div class="mid-2">
											<p ><em class="#"><?php echo $menu['hrg_makanan']; ?></em></p>
											  
											<div class="clearfix"></div>
										</div>
										<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b " data-id="<?= $menu['kd_makanan'];?>" data-nama="<?php echo $menu['nama_makanan'];?>" data-summary="summary <?= $i ?>" data-price="<?php echo $menu['hrg_makanan']; ?>" data-quantity="1" data-image="<?php echo base_url('assets/image/menu/ma1.jpg');?>">Add to Cart</button>
										</div>	
									</div>
								</div>
							 
							</div>
							<?php $i = $i+1; ?>
							<?php endforeach; ?>
							<div class="clearfix"></div>
							
						 </div>
						 <br>
						 
					</div>
					<div class="tab-pane  text-style" id="tab2">
						<div class=" con-w3l">
							<?php $i=1; ?>
							<?php foreach($minuman as $menu): ?>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal<?=$i?>" class="offer-img">
										<img src="<?php echo base_url('assets/image/menu/mi1.jpg');?>" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="#"><?php echo $menu['nama_minuman']; ?></a></h6>							
										</div>
										<div class="mid-2">
											<p ><em class="item_price"><?php echo $menu['hrg_minuman']; ?></em></p>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="<?= $menu['kd_minuman'];?>" data-nama="<?php echo $menu['nama_minuman']; ?>" data-summary="summary <?=$i?>" data-price="<?php echo $menu['hrg_minuman']; ?>" data-quantity="1" data-image="<?php echo base_url('assets/image/menu/mi1.jpg');?>">Add to Cart</button>

										</div>

									</div>
								</div>
							</div>
							<?php $i = $i+1; ?>
							<?php endforeach; ?>
							<div class="clearfix"></div>
						 </div>		  
					</div>
							
					<div class="clearfix"></div>	 		 
				</div>
			</div>
		
	</div>
	</div>
	</div>
	</section>
	<!-- Menu Makanan=================================>

	<!-- Counting
    ================================================== -->
    <section id="counting">
    	<div class="container">
    		<div layout="row" class="verticalStretch">
    			<div class="item">
    				<img src="<?php echo base_url('assets/image/menu/ma1.jpg');?>" width="100px" height="90px">
    			</div>
    			<div class="item">
    				<img src="<?php echo base_url('assets/image/menu/ma4.jpg');?>" width="100px" height="90px">    			
    			</div>
    			<div class="item">
    				<img src="<?php echo base_url('assets/image/menu/mi3.jpg');?>" width="100px" height="90px">
    			</div>
    			<div class="item">
    				<img src="<?php echo base_url('assets/image/menu/ma1.jpg');?>" width="100px" height="90px">
    			</div>
    			<div class="item">
    				<img src="<?php echo base_url('assets/image/menu/ta4.jpg');?>" width="100px" height="90px">
    			</div>
    		</div>
    	</div>
    </section><!--/#nino-counting-->

    <!-- Story About Us
    ================================================== -->
	<section id="about">
		<div class="container">
			<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">Siapakah Kita?</span>
				About Us
			</h2>
			<div class="img-about" align="center">
    			<img src="<?php echo base_url('assets/image/logo/logo.png');?>" width="300px" height="210px" class="about-bg">
  			</div>
			<p class="nino-sectionDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
			<div class="sectionContent">
				<div class="row nino-hoverEffect">
					<div class="col-md-4 col-sm-4">
						<div class="item">
							<a class="overlay" href="#">
								<span class="content">
									<i class="mdi mdi-account-multiple nino-icon"></i>
									super team
								</span>
								<img src="<?php echo base_url('assets/images/story/img-1.jpg');?>" alt="">
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="item">
							<a class="overlay" href="#">
								<span class="content">
									<i class="mdi mdi-image-filter-center-focus-weak nino-icon"></i>
									Creativity
								</span>
								<img src="<?php echo base_url('assets/images/story/img-2.jpg');?>" alt="">
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="item">
							<a class="overlay" href="#">
								<span class="content">
									<i class="mdi mdi-airplay nino-icon"></i>
									Digital
								</span>
								<img src="<?php echo base_url('assets/images/story/img-3.jpg');?>" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</section><!--/#nino-story-->

	<!-- Testimonial
    ================================================== -->
    <section class="QUOTE">
    	<div class="container">
    		<div class="nino-testimonialSlider">
				<ul>
					<li>
						<div layout="row">
							<div class="nino-symbol fsr">
								<i class="mdi mdi-comment-multiple-outline nino-icon"></i>
							</div>
							<div>
								<p class="quote">"One cannot think well, love well, sleep well. If one has not dined well"</p>
								<span class="name">Virginia Woolf</span>
							</div>
						</div>
					</li>
					<li>
						<div layout="row">
							<div class="nino-symbol fsr">
								<i class="mdi mdi-wechat nino-icon"></i>	
							</div>
							<div>
								<p class="quote">"People who love to eat are always the best people."</p>
								<span class="name">Julia Child</span>
							</div>
						</div>
					</li>
					<li>
						<div layout="row">
							<div class="nino-symbol fsr">
								<i class="mdi mdi-message-text-outline nino-icon"></i>
							</div>
							<div>
								<p class="quote">"Marry the one who gives you the same feeling you get, when you see food coming at a Restaurant"</p>
								<span class="name">Bride</span>
							</div>
						</div>
					</li>
				</ul>
			</div>
    	</div>
    </section><!--/#nino-testimonial-->

    <!-- Map
    ================================================== -->
    <section id="nino-map">
    	<div class="container">
    		<h2 class="nino-sectionHeading">
			<span class="nino-subHeading">Map</span>
				Lokasi Kami
			</h2>
	<div id="map"></div>
    	<script>
      		function initMap() {
        		var uluru = {lat: -6.974832, lng: 107.5729671};
        		var map = new google.maps.Map(document.getElementById('map'), {
          		zoom: 10,
          		center: uluru
        		});
        		var marker = new google.maps.Marker
        		({
          		position: uluru,
          		map: map
        		});
      		}
    	</script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIbWttbcSz6g3_9MbxLfGOASucm5mH8q8&callback=initMap">
	</script>

	</div>

    </section><!--/#nino-map-->

    <!-- Footer
    ================================================== -->
    <div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grid">
			<h3>About Us</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
			</p>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Menu</h3>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="kitchen.html">About</a></li>
				<li><a href="care.html">Service</a></li>
				<li><a href="hold.html">Gallery</a></li>
				<li><a href="hold.html">Feedback</a></li>
				<li><a href="hold.html">Location</a></li>						 
			</ul>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Customer Services</h3>
			<ul>
				<li><a href="faqs.html">Faqs</a></li>
				<li><a href="contact.html">Contact</a></li>						 	 
			</ul>
		</div>
		<div class="clearfix"></div>
			<div class="footer-bottom">
            <a href="index.html"><img src="<?php echo base_url('assets/image/header.png');?>" height="70px" width="220px"></img></a>
				<p class="fo-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
				<ul class="social-fo">
					<li><a href="#" class=" face"><i class="mdi mdi-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" twi"><i class="mdi mdi-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" pin"><i class="mdi mdi-whatsapp" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" dri"><i class="mdi mdi-instagram" aria-hidden="true"></i></a></li>
				</ul>
				<div class=" address">
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-home" aria-hidden="true"></i>UNIKOM</p>
					</div>
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-phone" aria-hidden="true"></i>+6234 758 839 , +6273 748 730</p>	
					</div>
					<div class="col-md-4 fo-grid1">
						<p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>cs@email.unikom.ac.id</a></p>
					</div>
					<div class="clearfix"></div>
					
					</div>
			</div>
		<div class="copy-right">
			<p> &copy; 2017 Pisang Ijo. All Rights Reserved | Design by <b><u>US</u></b></p>
		</div>
	</div>
</div>
<!-- //footer-->

    <!-- Search Form - Display when click magnify icon in menu
    ================================================== -->
    <form action="" id="nino-searchForm">
    	<input type="text" placeholder="Search..." class="form-control nino-searchInput">
    	<i class="mdi mdi-close nino-close"></i>
    </form><!--/#nino-searchForm-->
	
    <!-- Scroll to top
    ================================================== -->
    <a href="#" id="nino-scrollToTop">Go to Top</a>

<!-- smooth scrolling -->
	
<script type="text/javascript" src="<?php echo base_url('assets/js/isotope.pkgd.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.prettyPhoto.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.hoverdir.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/modernizr.custom.97074.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.mCustomScrollbar.concat.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/unslider-min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/template.js');?>"></script>
<script src="<?php echo base_url('assets/js/easing.js');?>"></script>
<script src="<?php echo base_url('assets/js/scrolling-nav.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.cslider.js');?>"></script>
    <script type="text/javascript">
      $(function() {
      
        $('#da-slider').cslider({
          autoplay  : true,
          bgincrement : 450
        });
      
      });
    </script> 
	<script type="text/javascript">
		$(document).ready(function() {
									
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
<!-- //for bootstrap working -->
	<script type='text/javascript' src="<?php echo base_url('assets/js/jquery.mycart.js');?>"></script>
	<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
	<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script type="text/javascript">
  function getJumlah(){
        $.ajax({
            url:"<?php echo base_url('Pelanggan/getjmlpesan') ?>",
            method:"GET",
            success:function(data)
            {
                $('.my-cart-badge').text(data);
            }
        });
  		}

  $(document).ready(function(){
  	getJumlah();
  	//klik add
  	$(document).on('click','.my-cart-btn', function(){
  		var id = $(this).data('id');
  		var nama = $(this).data('nama');
  		var qty = $(this).data('quantity');
  		var harga = $(this).data('price');
  	
  		var data = {
  			id:id,
  			nama:nama,
  			qty:qty,
  			harga:harga
  		}

  		$.ajax({
            url:"<?php echo base_url('Pelanggan/order') ?>",
            method:"POST",
            data: data,
            success:function(data)
            {
           	  console.log(data);
			  getJumlah();
            }
  		});
  	});
  	
  });


  	function hapusOrder(id) {
  		getJumlah();
  		$.ajax({
            url:"<?php echo base_url('Pelanggan/hapusOrder') ?>",
            method:"POST",
            dataType : "json",
            data: {id: id},
            success: function(response){
            	console.log(response);
            	$('.'+response.rowid).fadeOut();
            	getJumlah();
            }
        });
  		
  	}



  //fungsi mychart
  $(document).on('click','.my-cart-icon', function(){
  	$('#my-cart-modal').modal('show');
      console.log('hai');
      $.ajax({
            url:"<?php echo base_url('Pelanggan/listpesan') ?>",
            method:"POST",
            dataType : "json",
            success:function(data)
            {
            	var html = '';
            	$('#my-cart-table').empty();
            	$.each(data, function() {
			        var total = this.qty * this.price;
			        var id = '' + this.rowid + '';
			        html += '<tr class="'+id+'" title="" data-id="' + id + '" data-price="' + this.price + '">';
			        html += '<td class="text-center" style="width: 30px;"><img width="30px" height="30px" src=""/></td>';
			        html += '<td>' + this.name + '</td>';
			        html += '<td title="Unit Price">Rp.' + this.price + '</td>';
			        html += '<td title="Quantity"><input type="number" min="1" style="width: 70px; height: 20px; font-size : 10px; text-align:center;" class="my-product-quantity" value="' + this.qty + '"/></td>';
			        html += '<td title="Total" class="my-product-total">Rp.' + total + '  rb</td>';
			        html += '<td title="Remove from Cart" class="text-center" style="width: 30px;"><button class="btn btn-xs btn-danger my-product-remove" onclick="hapusOrder(\'' + id + '\');">X</button></td>';
			        html += '</tr>';
		      	});
            $('#my-cart-table').append(html);
           	  console.log(data);
            }
  		});

  	});
  	//kirim data cart ke database
  	$(document).on('click','#confirm', function(){
  		$.ajax({
            url:"<?php echo base_url('Pelanggan/inspesan') ?>",
            method:"POST",
            dataType : "json",
            success: function(response){
            	swal({
                        title: "Pesanan Berhasil",
                        type: "success",
                    });
            }
        });
  	});  	


   </script>
  <!-- modal pesan -->
		<div class="modal fade" id="my-cart-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">' +
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="fa fa-shopping-cart"></span> My Cart</h4>
        </div>
        <div class="modal-body">
        <table class="table table-hover table-responsive" id="my-cart-table"></table>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" data-dismiss="modal" id="confirm">Confirm</button>
        </div>
        </div>
        </div>
        </div>
        
  <!-- /modal -->
  <!-- product -->
 <!--  <form method="POST" action="<?= base_url('Pelanggan/inspesan');?>"><button type="submit" class="btn btn-success" data-dismiss="modal" id="confirm">Confirm</button></form> -->
  
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="<?php echo base_url('assets/image/menu/ma1.jpg');?>" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Soto</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom ">Rp.15.000</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="1" data-name="Soto" data-summary="summary 1" data-price="15.000" data-quantity="1" data-image="<?php echo base_url('assets/image/menu/ma1.jpg');?>">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
<!-- product -->
			<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog dialog-head" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="<?php echo base_url('assets/image/menu/ma2.jpg');?>" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Nasi Bali</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom ">20.000</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="2" data-name="Nasi Bali" data-summary="summary 2" data-price="20.000" data-quantity="1" data-image="images/of1.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="<?php echo base_url('assets/image/menu/ma3.jpg');?>" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Steak</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom ">Rp.35.000</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="3" data-name="Steak" data-summary="summary 3" data-price="35.000" data-quantity="1" data-image="<?php echo base_url('assets/image/menu/ma3.jpg');?>">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="<?php echo base_url('assets/image/menu/ma4.jpg');?>" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Kare</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom ">Rp.25.000</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="4" data-name="Soya Chunks" data-summary="summary 4" data-price="25.000" data-quantity="1" data-image="<?php echo base_url('assets/image/menu/ma4.jpg');?>">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="<?php echo base_url('assets/image/menu/mi1.jpg');?>" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Orange Squash</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom ">Rp.12.000</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="5" data-name="Orange Squash" data-summary="summary 5" data-price="0.70" data-quantity="1" data-image="<?php echo base_url('assets/image/menu/mi1.jpg');?>">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="<?php echo base_url('assets/image/menu/mi2.jpg');?>" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Ice Lemon Honey</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom ">Rp.10.000</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="6" data-name="Ice Lemon Honey" data-summary="summary 6" data-price="0.70" data-quantity="1" data-image="<?php echo base_url('assets/image/menu/mi2.jpg');?>">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="<?php echo base_url('assets/image/menu/mi3.jpg');?>" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Ice Lemon Tea</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom ">Rp.8.000</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="7" data-name="Ice Lemon Tea" data-summary="summary 7" data-price="8.000" data-quantity="1" data-image="<?php echo base_url('assets/image/menu/mi3.jpg');?>">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="<?php echo base_url('assets/image/menu/mi4.jpg');?>" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Strawberry delight</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom ">Rp.15.000</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="8" data-name="Strawberry Delight" data-summary="summary 8" data-price="15.000" data-quantity="1" data-image="<?php echo base_url('assets/image/menu/mi4.jpg');?>">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="<?php echo base_url('assets/image/menu/ta1.jpg');?>" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Kerupuk (500gr)</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom ">Rp.15.000</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="9" data-name="Kerupuk" data-summary="summary 9" data-price="15.000" data-quantity="1" data-image="<?php echo base_url('assets/image/menu/ta1.jpg');?>">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="<?php echo base_url('assets/image/menu/ta2.jpg');?>" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Bawang Goreng (250gr)</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom ">Rp.5.000</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="10" data-name="Bawang" data-summary="summary 10" data-price="5.000" data-quantity="1" data-image="<?php echo base_url('assets/image/menu/ta2.jpg');?>">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="<?php echo base_url('assets/image/menu/ta3.jpg');?>" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Onion Ring</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom ">Rp.13.000</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="11" data-name="Bitter Gourd" data-summary="summary 11" data-price="13.000" data-quantity="1" data-image="<?php echo base_url('assets/image/menu/ta3.jpg');?>">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="<?php echo base_url('assets/image/menu/ta4.jpg');?>" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Kentang Goreng</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom ">Rp.15.000</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="12" data-name="Kentang Goreng" data-summary="summary 12" data-price="15.000" data-quantity="1" data-image="<?php echo base_url('assets/image/menu/ta4.jpg');?>">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>

<h1><?php 
$device = $this->session->userdata('device');
echo $device;
?></h1>
<h2><a href="<?php echo base_url('login/destroy'); ?>">Logout</a>
</h2>
</body>
</html>