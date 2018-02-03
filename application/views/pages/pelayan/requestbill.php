<!DOCTYPE HTML>
<html>
<head>
<title>Pisang Ijo | Pelayan</title>
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
                <a class="navbar-brand" href="<?php echo base_url('pesanan');?>">Pelayan</a>
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
            <li class="m_2"><a href="<?php echo base_url('login/destroy'); ?>"><i class="fa fa-lock"></i> Logout</a></li> 
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
                            <a href="<?php echo base_url('pelayan');?>"><i class="fa fa-check-square-o nav_icon"></i>Cek Meja</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('pelayan/pesanan');?>"><i class="fa fa-hand-o-right nav_icon"></i>Pesanan</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('pelayan/requestbill');?>"><i class="fa fa-hand-o-right nav_icon"></i>Bill Request</a>
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
  	 <h3>PESANAN</h3>
  	<div class="bs-example4" data-example-id="contextual-table">
    <table class="table" id="bill">
      <thead>
        <tr>
          <th>Request From</th>
          <th>Keterangan</th>
          <th>Done?</th>
        </tr>
      </thead>
      <tbody id="reqbill">
        
      </tbody>
    </table>
   </div>
	<div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive">
    </div><!-- /.table-responsive -->
  </div>
  </div>
<br><br><br><br><br><br>

    <div class="copy">
            <p>Copyright &copy; 2017 Pisang Ijo. All Rights Reserved | Design by <a href="#" target="_blank">US</a> </p>
      </div>


    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript">
      var interval=5000;
      function getBill(){
        $.ajax({
            url : "<?php echo base_url('Pelayan/showReqbill');?>",
            dataType : "json",
            success:function(response){
              console.log(response);
              $(".table #reqbill").empty();
              $.each(response,function(i){
                 var id = response[i].device;
                 $("<tr id='"+id+"'>").append(
                 $("<td id='"+i+"'>").text(response[i].device),
                 $("<td id='keterangan"+i+"'>").text(response[i].deskripsi),
                 $("<td><input type='button' class='btn btn-success' id='doit' onclick=doit(\""+id+"\") value='Confirm'>")
                 ).appendTo("#reqbill")

               });
            },
            complete:function(response){
              setTimeout(getBill,interval);
            }
        });
      }
      setTimeout(getBill,interval);
      
      function doit(id){
        $("#"+id).fadeOut();
         $.ajax({
            url : "<?php echo base_url('Pelayan/takebill');?>",
            method : "POST",
            dataType : "json",
            data:{id:id},
            success:function(response){
              console.log(response); 
            }
        });
      }

      $(document).on('ready', function(){
        getBill();

      });
    </script>
</body>
</html>