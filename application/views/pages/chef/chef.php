<!DOCTYPE HTML>
<html>
<head>
<title>Pisang Ijo | Chef</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pisang Ijo" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url('assets/css/admin.css');?>" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="<?php echo base_url('assets/css/custom_admin.css');?>" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url('assets/js/metisMenu.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/custom.js');?>"></script>
<script type='text/javascript'>
    $(document).on('click','input[type=button]', function() {
               buttonVal = $(this).val();
    if(buttonVal == 'Pilih' )
    {
        $(this).prop("disabled", true);
        $('#closeButton').prop("disabled", false);
        $(this).prop("hidden", true);
        $('#closeButton').prop("hidden", false);
    }
    else
    {
         $('#closeButton').prop("disabled", true);
         $('#closeButton').prop("hidden", true);
         $('#openButton').prop("disabled", false);
         $('#openButton').prop("hidden", false);
    }
});

   var toggle = true;
        function changeColor()
        {
            document.getElementById('bID').style.background =
            toggle ? "red" : "green";
 
            toggle = !toggle;
        }

    $(document).ready(function() {
     $("#openButton").click(function() {
       $("#ket").text("NA");
     }) 
   });

    $(document).ready(function() {
     $("#closeButton").click(function() {
       $("#ket").text("Tersedia");
     }) 
   });
</script>
</head>

<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Chef</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><i class="fa fa-user"></i></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
						<li class="divider"></li>
						<li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <center>
                    <img class="gambar" src="<?php echo base_url('assets/image/logo/logo.png');?>" width="40%" height="50%">
                    </center>
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="chef.html"><i class="fa fa-hand-o-right nav_icon"></i>Daftar Pesan</a>
                        </li>
                    </ul>
                    <br><br>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
            <h3>Cek Meja</h3>
            <br>
     	<div class="row clearfix">
        	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red" align="center" id="bID">
                            <h3 class="ketersediaan" id="ket">
                                Tersedia
                            </h3>
                        </div>
                        <div class="body" align="center">
                            Meja 1
                            <br><br><br><br>
                            Kapasitas : 4 Orang
                        </div>
                        <br>
                        <center>
                        <input type="button" onclick="changeColor()" value="Pilih" id="openButton" name="openButton">
                        <input type="button" onclick="changeColor()" value="Buka" id="closeButton" name="closeButton" hidden="true" disabled="disabled">
                        </center>
                        <br>
                    </div>
                </div>
        	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red" align="center" id="bID">
                            <h3 class="ketersediaan" id="ket">
                                Tersedia
                            </h3>
                        </div>
                        <div class="body" align="center">
                            Meja 1
                            <br><br><br><br>
                            Kapasitas : 4 Orang
                        </div>
                        <br>
                        <center>
                        <input type="button" onclick="changeColor()" value="Pilih" id="openButton" name="openButton">
                        <input type="button" onclick="changeColor()" value="Buka" id="closeButton" name="closeButton" hidden="true" disabled="disabled">
                        </center>
                        <br>
                    </div>
                </div>
        	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red" align="center" id="bID">
                            <h3 class="ketersediaan" id="ket">
                                Tersedia
                            </h3>
                        </div>
                        <div class="body" align="center">
                            Meja 1
                            <br><br><br><br>
                            Kapasitas : 4 Orang
                        </div>
                        <br>
                        <center>
                        <BUTTON onClick="changeColor()" id="tombol">Non Aktifkan</BUTTON>
                        </center>
                        <br>
                    </div>
                </div>
        	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red" align="center" id="bID">
                            <h3 class="ketersediaan" id="ket">
                                Tersedia
                            </h3>
                        </div>
                        <div class="body" align="center">
                            Meja 1
                            <br><br><br><br>
                            Kapasitas : 4 Orang
                        </div>
                        <br>
                        <center>
                        <BUTTON onClick="changeColor()" id="tombol">Non Aktifkan</BUTTON>
                        </center>
                        <br>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red" align="center" id="bID">
                            <h3 class="ketersediaan" id="ket">
                                Tersedia
                            </h3>
                        </div>
                        <div class="body" align="center">
                            Meja 1
                            <br><br><br><br>
                            Kapasitas : 4 Orang
                        </div>
                        <br>
                        <center>
                        <BUTTON onClick="changeColor()" id="tombol">Non Aktifkan</BUTTON>
                        </center>
                        <br>
                    </div>
                </div>
        	<div class="clearfix"> </div>
     
	</div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>

		<div class="copy">
            <p>Copyright &copy; 2017 Pisang Ijo. All Rights Reserved | Design by <a href="#" target="_blank">US</a> </p>
	    </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>
