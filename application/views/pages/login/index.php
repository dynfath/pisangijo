<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <title>LOGIN</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="<?php echo base_url('assets/css/index.css');?>">
      <style type="text/css">
      body{
          background: gray;
          background-size: 100%;
      }
    </style>
  
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Pelanggan</a></li>
        <li class="tab"><a href="#login">Pegawai</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Login Device</h1>
          
          <form action="<?php echo base_url('login/signdevice'); ?>" method="post" name="signdevice">
          
            <div class="field-wrap">
              <label>
                <span class="req"></span>
              </label>
              <select class="no_me" name="device">
                <option>Pilih Meja</option>
                <option></option>
                <option value="device1">Meja 1</option>
                <option value="device2">Meja 2</option>
                <option value="device3">Meja 3</option>
                <option value="device4">Meja 4</option>
              </select>
            </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password"/>
          </div>
          
          <button type="submit" class="button button-block"/>LOGIN</button>
          
          </form>

          <?php if ($this->session->flashdata('result_login')) { ?>
                            <div class="alert alet-info animated fadeInDown" role="alert">
                                <?php echo validation_errors(); ?>
                                <?php echo $this->session->flashdata('result_login'); ?>
                            </div>
                          <?php } ?>

        </div>
        
        <div id="login">   
          <h1>Login Pegawai</h1>
          
          <form action="<?php echo base_url('login/signpegawai'); ?>" method="post" name="signpegawai">
          
            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="username"/>
          </div>

          <div class="field-wrap">
              <select class="pilih-staf" name="divisi">
                <option>Divisi</option>
                <option></option>
                <option value="CS">Customer Service</option>
                <option value="kasir">Kasir</option>
                <option value="koki">Koki</option>
                <option value="pelayan">Pelayan</option>
                <option value="pantry">Pantry</option>
              </select>
            </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password" />
          </div>
          
          <button class="button button-block" id="btnlogin" />Log In</button>
          
          </form>
          <?php if ($this->session->flashdata('result_login')) { ?>
                            <div class="alert alet-info animated fadeInDown" role="alert">
                                <?php echo validation_errors(); ?>
                                <?php echo $this->session->flashdata('result_login'); ?>
                            </div>
                          <?php } ?>
        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="<?php echo base_url('assets/js/index.js');?>"></script>

</body>
</html>
