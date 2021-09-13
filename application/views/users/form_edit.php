<!-- begin #content -->
    <div id="content" class="content">
      <!-- begin breadcrumb -->
      <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
        <li class="breadcrumb-item"><a href="users">Users</a></li>
        <li class="breadcrumb-item active">Edit User</li>
      </ol>
      <!-- end breadcrumb -->
      <!-- begin page-header -->
      <h1 class="page-header">Users</h1>
      <!-- end page-header -->
      <!-- begin row -->
      <div class="row">
        <!-- begin col-10 -->
        <div class="col-xl-6">
          <div class="panel panel-inverse">
            <!-- begin panel-heading -->
            <div class="panel-heading">
              <h4 class="panel-title">Edit User</h4>
              <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
              </div>
            </div>
            <!-- end panel-heading -->
       <!-- begin panel-body -->
            <div class="panel-body">
                            <?php 
                            $attribute = array ('class'=>'form-horizontal', 'data-parsley-validate'=>'true','autocomplete'=>'off');
                             echo form_open('users/edit'); ?>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="fullname">fullname * :</label>
                                    <div class="col-md-10 col-sm-10">
                                        <input class="form-control" type="text" id="id" name="id"  hidden value="<?php echo $record['idUser']?>" />
                                        <input class="form-control" type="text" id="nama" name="nama" placeholder="Required" data-parsley-required="true" value="<?php echo $record['nameUser']?>" />
                                    </div>
                                </div>
                                
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="inputSector">Username *  :</label>
                                    <div class="col-md-10 col-sm-10">
                                        <input class="form-control" type="text" id="username" name="username" placeholder="Required" data-parsley-required="true" value="<?php echo $record['idUser']?>" />
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="role">Role * :</label>
                                    <div class="col-md-10 col-sm-10">
                                        <select class="form-control" id="role" name="role" >
                                            <option value="<?php echo $record['groupUser']?>"><?php if ($record['groupUser']==4){echo 'Administrator';} elseif ($record['groupUser']==3){echo 'Manager';} elseif ($record['groupUser']==2){echo 'User';}  elseif ($record['groupUser']==5){echo 'User WB';} else { echo 'Guest';} ?></option>
                                            <option value="1">Guest</option>
                                            <option value="2">User</option>
                                            <option value="5">User WB</option>
                                            <option value="3">Manager</option>
                                            <option value="4">Administrator</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="password">Password  :</label>
                                    <div class="col-md-10 col-sm-10">
                                        <input class="form-control" type="password" id="password" name="password" placeholder="Password" />
                                    </div>
                                </div>
                                
                                <div class="form-group row m-b-0">
                                    <label class="col-md-2 col-sm-2 col-form-label">&nbsp;</label>
                                    <div class="col-md-10 col-sm-10">
                                        <button type="submit" class="btn btn-primary" name="submit">Save</button>
                                        <a class="btn btn-primary" class="btn btn-primary" onclick="javascript:window.history.back();" href="javascript:;">Back</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end panel-body -->
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end #content -->
        
       
        
        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->
    
  <!-- ================== BEGIN BASE JS ================== -->
  <script src="<?php echo base_url();?>assets/js/app.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/theme/default.min.js"></script>
  <!-- ================== END BASE JS ================== -->
  
  <!-- ================== BEGIN PAGE LEVEL JS ================== -->
  <script src="<?php echo base_url();?>assets/plugins/parsleyjs/dist/parsley.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/highlight.js/highlight.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/demo/render.highlight.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url();?>assets/js/demo/user-edit.js"></script>
  <!-- ================== END PAGE LEVEL JS ================== -->