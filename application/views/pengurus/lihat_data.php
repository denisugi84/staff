 <!-- begin #content -->
    <div id="content" class="content">
      <!-- begin breadcrumb -->
      <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
        <li class="breadcrumb-item"><a href="pengurus">Pengurus</a></li>
        <li class="breadcrumb-item active">List Pengurus</li>
      </ol>
      <!-- end breadcrumb -->
      <!-- begin page-header -->
      <h1 class="page-header">Pengurus</h1>
      <!-- end page-header -->
      <!-- begin row -->
      <div class="row">
        <!-- begin col-10 -->
        <div class="col-xl-12">
          <div class="panel panel-primary">
            <!-- begin panel-heading -->
            <div class="panel-heading">
              <h4 class="panel-title">List Pengurus</h4>
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
                    <a href="<?php echo base_url() ?>pengurus/post" class="btn btn-success pull-right">Add New</a>
                    <table id="data-table-combine" class="table table-striped table-bordered table-td-valign-middle">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No. Peg.</th>
                                <th>Nama</th>
                                <th>Dinas</th>
                                <th>Unit</th>
                                <th>Jabatan</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody> 
                        <?php $no=1; foreach ($record->result() as $r) { ?>
                        <tr id="<?php echo $r->NOPEG?>">
                            <td align="center"><?php echo $no?></td>
                            <td align="center" width="100"><?php echo $r->NOPEG ?></td>
                            <td align="center"><?php echo $r->NAMA ?></td>
                            <td align="center"><?php echo $r->DINAS ?></td>
                            <td align="center"><?php echo $r->UNIT ?></td>
                            <td align="center"><?php echo $r->NAMA_JABATAN ?></td>
                            <td align="center"><a href="<?php echo 'units/edit/'.$r->ID_UNIT;?>"><i class="fas fa-pencil-alt fa-fw"></i></a> | <a href="javascript:;" data-click="swal-danger"><span class="text-danger"><i class="fas fa-trash fa-fw"></i></span></a></td>
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

  <script src="<?php echo base_url();?>assets/js/demo/personel-detail-list.js"></script>