<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>GEC | Web Administrations</title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  
  <!-- ================== BEGIN BASE CSS STYLE ================== -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="<?php echo base_url()?>assets/css/default/app.min.css" rel="stylesheet" />
  <!-- ================== END BASE CSS STYLE ================== -->
  
</head>
<body class="pace-top">
  <!-- begin #page-loader -->
  <div id="page-loader" class="fade show">
    <span class="spinner"></span>
  </div>
  <!-- end #page-loader -->
  
  <!-- begin login-cover -->
  <div class="login-cover">
    <div class="login-cover-image" style="background-image: url(<?php echo base_url()?>assets/img/login-bg/login-bg-15.jpg)" data-id="login-cover-image"></div>
    <div class="login-cover-bg"></div>
  </div>
  <!-- end login-cover -->
  
  <!-- begin #page-container -->
  <div id="page-container" class="fade">
    <!-- begin login -->
    
    <div class="login login-v2" data-pageload-addclass="animated fadeIn">
      <!-- begin brand -->
      <div class="form-group m-b-20">
            <div class="alert alert-danger fade show m-b-20">
              <span class="close" data-dismiss="alert">×</span>
              <b>For the best compatibility please use <a href="https://www.google.com/chrome/?brand=CHBD&gclid=Cj0KCQjw6sHzBRCbARIsAF8FMpU5zPfkq2hiX3GYM9vJMtytzVc0nuXPFMhQJNEy3wBCKqqTuNaf-EsaAonbEALw_wcB&gclsrc=aw.ds" target="_blank" class="alert-link"> Chrome Browser</a></b>
            </div>
      </div>
      <div class="login-header">
        <div class="brand">
          <span class="logo"></span> <b>GMF</b> Employees Club
          <small>Web Administration</small>
        </div>

        
      </div>
      <!-- end brand -->
      <!-- begin login-content -->

      <div class="login-content">
        <!-- with right icon -->
          
          <?php 
                $attribute = array ('class'=>'login-form', 'id'=>'sign_in','autocomplete'=>'off');
                echo form_open('auth/login',$attribute); ?>
          
          <div class="form-group m-b-20">
            <input type="text" class="form-control form-control-lg" placeholder="Username" required name="username" id="username" value="543210" />
          </div>
          <div class="form-group m-b-20">
            <input type="password" class="form-control form-control-lg" placeholder="Password" required name="password" id="password" value="aeroasia" />
          </div>
          
          <div class="login-buttons">
            <button type="submit" class="btn btn-danger btn-block btn-lg" name="submit">Log in</button>
          </div>
          
        </form>

      </div>
      <!-- end login-content -->

    </div>
    
    <!-- end login -->
    
    <!-- begin login-bg -->
    <ul class="login-bg-list clearfix">
      <li class="active"><a href="javascript:;" data-click="change-bg" data-img="../assets/img/login-bg/login-bg-17.jpg" style="background-image: url(../assets/img/login-bg/login-bg-17.jpg)"></a></li>
      <li><a href="javascript:;" data-click="change-bg" data-img="<?php echo base_url()?>assets/img/login-bg/login-bg-16.jpg" style="background-image: url(<?php echo base_url()?>assets/img/login-bg/login-bg-16.jpg)"></a></li>
      <li><a href="javascript:;" data-click="change-bg" data-img="<?php echo base_url()?>assets/img/login-bg/login-bg-15.jpg" style="background-image: url(<?php echo base_url()?>assets/img/login-bg/login-bg-15.jpg)"></a></li>
      <li><a href="javascript:;" data-click="change-bg" data-img="<?php echo base_url()?>assets/img/login-bg/login-bg-14.jpg" style="background-image: url(<?php echo base_url()?>assets/img/login-bg/login-bg-14.jpg)"></a></li>
      <li><a href="javascript:;" data-click="change-bg" data-img="<?php echo base_url()?>assets/img/login-bg/login-bg-13.jpg" style="background-image: url(<?php echo base_url()?>assets/img/login-bg/login-bg-13.jpg)"></a></li>
      <li><a href="javascript:;" data-click="change-bg" data-img="<?php echo base_url()?>assets/img/login-bg/login-bg-12.jpg" style="background-image: url(<?php echo base_url()?>assets/img/login-bg/login-bg-12.jpg)"></a></li>
    </ul>
    <!-- end login-bg -->
    
    
    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
  </div>
  <!-- end page container -->
  
  <!-- ================== BEGIN BASE JS ================== -->
  <script src="<?php echo base_url()?>assets/js/app.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/theme/default.min.js"></script>
  <!-- ================== END BASE JS ================== -->
  
  <!-- ================== BEGIN PAGE LEVEL JS ================== -->
  <script src="<?php echo base_url()?>assets/js/demo/login-v2.demo.js"></script>
  <!-- ================== END PAGE LEVEL JS ================== -->
</body>
</html>
