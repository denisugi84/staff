<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>GEC | Web Administration</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
<!-- ================== BEGIN BASE CSS STYLE ================== -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="<?php echo base_url() ?>assets/css/default/app.min.css" rel="stylesheet" />

  <!-- ================== END BASE CSS STYLE ================== -->
  
  <!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
  <link href="<?php echo base_url() ?>assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/plugins/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/plugins/%40danielfarrell/bootstrap-combobox/css/bootstrap-combobox.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/plugins/tag-it/css/jquery.tagit.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/plugins/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-fontawesome.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-glyphicons.css" rel="stylesheet" />
  <!-- ================== END PAGE LEVEL CSS STYLE ================== -->

     <style id="compiled-css" type="text/css">
      .carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

table.dataTable.table-striped.DTFC_Cloned tbody tr:nth-of-type(odd) {
    background-color: #F3F3F3;
}
table.dataTable.table-striped.DTFC_Cloned tbody tr:nth-of-type(even) {
    background-color: white;
}
table.dataTable.table-striped.DTFC_Cloned thead {
    background-color: white;
}

</style>
</head>

<body>
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show"><span class="spinner"></span></div>
    <!-- end #page-loader -->
    
    <!-- begin #page-container -->
    <div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">
        <!-- begin #header -->
        <div id="header" class="header navbar-default">
            <!-- begin navbar-header -->
            <div class="navbar-header">
                <a href="<?php echo base_url() ?>dashboard" class="navbar-brand"><span class="navbar-logo"></span> <b>GMF</b>Employees Club</a>
                <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- end navbar-header -->
            
            <!-- begin header-nav -->
            <ul class="navbar-nav navbar-right">
                <li>
                    <form class="navbar-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter keyword" />
                            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </li>
                <li class="dropdown navbar-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url() ?>assets/img/user/<?php echo $this->session->userdata('username');?>.jpg" alt="" /> 
                        <span class="d-none d-md-inline"><?php echo $this->session->userdata('fullname');?></span> <b class="caret"></b>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:;" class="dropdown-item">Edit Profile</a>
                        <a href="javascript:;" class="dropdown-item">Setting</a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo base_url() ?>auth/logout" class="dropdown-item">Log Out</a>
                    </div>
                </li>
            </ul>
            <!-- end header navigation right -->
        </div>
        <!-- end #header -->
        
        <!-- begin #sidebar -->
        <div id="sidebar" class="sidebar">
            <!-- begin sidebar scrollbar -->
            <div data-scrollbar="true" data-height="100%">
                <!-- begin sidebar user -->
                <ul class="nav">
                    <li class="nav-profile">
                        <a href="javascript:;" data-toggle="nav-profile">
                            <div class="cover with-shadow"></div>
                            <div class="image">
                                <img src="<?php echo base_url() ?>assets/img/user/<?php echo $this->session->userdata('username');?>.jpg" alt="" />
                            </div>
                            <div class="info">
                                <b class="caret pull-right"></b>
                                <?php echo $this->session->userdata('fullname');?>   
                                <small><?php echo $this->session->userdata('level');?></small>
                            </div>
                        </a>
                    </li>
                    <li>
                        <ul class="nav nav-profile">
                            <li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
                            <li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- end sidebar user -->
                <!-- begin sidebar nav -->
                <ul class="nav">
                    <li class="nav-header">Navigation</li>
                    <li class="has-sub" id="dashboard1">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-th-large"></i>
                            <span>Dashboard</span>
                        </a>
                        <ul class="sub-menu">
                            <li id="dashboard2"><a href="<?php echo base_url() ?>dashboard">Main</a></li>
                        </ul>
                    </li>
                    <li class="has-sub" id="personel">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-user"></i> 
                            <span>Anggota</span>
                        </a>
                        <ul class="sub-menu">
                            <li id="detail"><a href="<?php echo base_url() ?>personel">Daftar Anggota</a></li>
                            <li id="agenda"><a href="<?php echo base_url() ?>agenda">Agenda Meeting</a></li>
                        </ul>
                    </li>
                    
                     <?php if ($this->session->userdata('level')=='Administrator'){?>
                    <li class="has-sub" id="admin">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-key"></i> 
                            <span>Administrator</span>
                        </a>
                        <ul class="sub-menu">
                            <li id="users"><a href="<?php echo base_url() ?>users">Users</a></li>
                            <li id="email"><a href="<?php echo base_url() ?>email">Mailing List</a></li>
                        </ul>
                    </li>
                <?php }?>
                    
                    <!-- begin sidebar minify button -->
                    <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
                    <!-- end sidebar minify button -->
                </ul>
                <!-- end sidebar nav -->
            </div>
            <!-- end sidebar scrollbar -->
        </div>
        <div class="sidebar-bg"></div>
        <!-- end #sidebar -->
        
        <!-- begin #content -->
    
            <?php echo $contents;?>
       
        <!-- end #content -->
        <!-- begin #footer -->
        <div id="footer" class="footer">
            &copy; 2021 GMF EMployees Club Web Administration. All Rights Reserved
        </div>
        <!-- end #footer -->
    
</body>
</html>
