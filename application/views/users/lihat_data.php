 <!-- begin #content -->
    <div id="content" class="content">
      <!-- begin breadcrumb -->
      <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
        <li class="breadcrumb-item"><a href="users">Users</a></li>
        <li class="breadcrumb-item active">View List</li>
      </ol>
      <!-- end breadcrumb -->
      <!-- begin page-header -->
      <h1 class="page-header">Users</h1>
      <!-- end page-header -->
      <!-- begin row -->
      <div class="row">
        <!-- begin col-10 -->
        <div class="col-xl-12">
          <div class="panel panel-inverse">
            <!-- begin panel-heading -->
            <div class="panel-heading">
              <h4 class="panel-title">User List</h4>
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
                    <a href="<?php echo base_url() ?>users/post" class="btn btn-success pull-right">Add New</a>
                    <table id="data-table-combine" class="table table-striped table-bordered table-td-valign-middle">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Full Name</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th>Last Login</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody> 
                        <?php $no=1; foreach ($record->result() as $r) { ?>
                        <tr id="<?php echo $r->idUser?>">
                            <td align="center" width="30"><?php echo $no ?></td>
                            <td align="left"><?php echo $r->nameUser ?></td>
                            <td align="left"><?php echo $r->idUser ?></td>
                            <td align="center"><?php if ($r->groupUser==4){echo 'Administrator';} elseif ($r->groupUser==3){echo 'Manager';} elseif ($r->groupUser==2){echo 'User';} elseif ($r->groupUser==5){echo 'User WB';}else { echo 'Guest';} ?></td>
                            <td align="center"><?php echo $r->last_login ?></td>
                            
                            <td align="center"><a href="<?php echo 'users/edit/'.$r->idUser;?>"><i class="fas fa-pencil-alt fa-fw"></i></a> | <a href="javascript:;" data-click="swal-danger"><span class="text-danger"><i class="fas fa-trash fa-fw"></i></span></a></td>
                        </tr>
                        <?php $no++; } ?>
                        </tr> 
                        </tbody>
                    </table>
           </div>
            <!-- end panel-body -->
          </div>
        </div>
        <!-- end col-10 -->
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
  <script src="<?php echo base_url();?>assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/datatables.net-select/js/dataTables.select.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/pdfmake/build/pdfmake.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/pdfmake/build/vfs_fonts.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/jszip/dist/jszip.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/demo/user-list.js"></script>