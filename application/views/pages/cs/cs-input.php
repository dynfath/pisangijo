<!DOCTYPE HTML>
<html>
<head>
<title>Pisang Ijo | CS</title>
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
                <a class="navbar-brand" href="index.html">Customer Service</a>
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
                            <a href="pantry.html"><i class="fa fa-star-o nav_icon"></i>Penilaian</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="pantry-input.html"><i class="fa fa-pencil-square-o nav_icon"></i>Input Menu Baru</a>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                    <br><br>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
     <div class="xs">
     <h3>Menu Baru</h3>
    <div class="bs-example4" data-example-id="contextual-table">

              <form class="form-horizontal">
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Id Makanan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" id="focusedinput" placeholder="Id">
                  </div>
                  <div class="col-sm-2">
                    <p class="help-block" style="color: red;">*</p>
                  </div>
                </div>

                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Nama Menu</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" id="focusedinput" placeholder="Menu Baru">
                  </div>
                  <div class="col-sm-2">
                    <p class="help-block" style="color: red;">*</p>
                  </div>
                </div>

                <div class="form-group">
                <label for="selector1" class="col-sm-2 control-label">Jenis Menu</label>
                  <div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
                    <option>Pilih Salah Satu</option>
                    <option></option>
                    <option>Makanan</option>
                    <option>Minuman</option>
                  </select></div>
                  <div class="col-sm-2">
                    <p class="help-block" style="color: red;">*</p>
                  </div>
                </div>

                <div class="form-group">
                  <label for="txtarea1" class="col-sm-2 control-label">Deskripsi</label>
                  <div class="col-sm-8"><textarea name="txtarea1" id="txtarea1" placeholder="tentang menu" cols="50" rows="4" class="form-control1"></textarea></div>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Upload Gambar</label>
                  <input type="file" id="exampleInputFile">
                  <p class="help-block">Example block-level help text here.</p>
                </div>

              </form>

   </div>
  <div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive">
    </div><!-- /.table-responsive -->
  </div>
  </div>

  <div class="copy_layout">
            <p>Copyright &copy; 2017 Pisang Ijo. All Rights Reserved | Design by <a href="#" target="_blank">US</a> </p>
      </div>
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>
