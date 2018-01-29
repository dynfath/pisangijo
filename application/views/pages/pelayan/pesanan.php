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
    <table class="table" id="order">
      <thead>
        <tr>
          <th>No</th>
          <th>Request</th>
          <th>Keterangan</th>
          <th>Done?</th>
        </tr>
      </thead>
        <!-- <?php $i = 1; foreach($pesanan as $pesanan) { ?>
        <tr>
          <th><?=$i?></th>
          <td><?= $pesanan->kd_pesanan ?></td>
          <td><?= $pesanan->nama ?></td>
          <td><i class="fa fa-check-square tambah"></td>
        </tr>
        <?php $i++; } ?> -->
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

      <div class="modal fade" id="detil-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">' +
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="fa fa-shopping-cart"></span> Detil</h4>
        </div>
        <div class="modal-body">
        <table class="table table-hover table-responsive" id="detil-table"></table>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </div>
        </div>
        </div>

    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript">
      var interval=5000;
      function getPesanan(){
        $.ajax({
            url : "<?php echo base_url('Pelayan/tampilmenu');?>",
            dataType : "json",
            success:function(response){
              $(".table #pesanan").remove();
              $.each(response,function(i){
                 var id = response[i].id_order;
                 $("<tr id='pesanan'>").append(
                 $("<td id='"+response[i].id_order+"'>").text(response[i].id_order),
                 $("<td id='detil"+i+"'>").text(response[i].device),
                 $("<td id='total_harga"+i+"'>").text(response[i].total_harga),
                 $("<td><input type='button' class='btn btn-success' id='detilpesan' onclick=detilmenu(\""+id+"\") value='Detil'>")
                 ).appendTo("#order")

               });
            },
            complete:function(response){
              setTimeout(getPesanan,interval);
            }
        });
      }
      setTimeout(getPesanan,interval);
      
      function detilmenu(id){
       
        $('#detil-modal').modal('show');
        $.ajax({
            url : "<?php echo base_url('Pelayan/tampildetilmenu');?>",
            method : "POST",
            dataType : "json",
            data : {id : id},
            success:function(response){
              console.log(response)
              $("#detil-table #pesan").remove();
                 $("<tr id='pesan'>").append(
                 $("<td id='apa'>").text("Kode Menu"),
                 $("<td id='detil'>").text("Nama Menu"),
                 $("<td id='total_harga'>").text("Jumlah"),
                 ).appendTo("#detil-table")
              $.each(response,function(i){
                 $("<tr id='pesan'>").append(
                 $("<td id='kd_pesan'>").text(response[i].kd_pesanan),
                 $("<td id='detil"+i+"'>").text(response[i].nama),
                 $("<td id='total_harga"+i+"'>").text(response[i].qty),
                 ).appendTo("#detil-table")

               });
            }
        });  
      }

      $(document).on('ready', function(){
        getPesanan();

      });

      /*$(document).on('click', '#detilpesan', function(){
        $('#detil-modal').modal('show');
        $.ajax({
            url : "<?php echo base_url('Pelayan/tampilmenu');?>",
            dataType : "json",
            success:function(response){
              $(".table #pesanan").remove();
              $.each(response,function(i){
                 $("<tr id='pesanan'>").append(
                 $("<td id='"+response[i].id_order+"'>").text(response[i].id_order),
                 $("<td id='detil"+i+"'>").text(response[i].device),
                 $("<td id='total_harga"+i+"'>").text(response[i].total_harga),
                 $("<td><input type='button' class='btn btn-success' id='detilpesan' value='Detil'>")
                 ).appendTo(".table")

               });
            }
        });  
      });*/
    </script>
</body>
</html>