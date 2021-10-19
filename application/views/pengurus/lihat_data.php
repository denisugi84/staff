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
              <h4 class="panel-title">List Pengurus DPP</h4>
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
                                <?php if ($this->session->userdata('level')=='Staff' || $this->session->userdata('level')=='Administrator'){?>
                                <th>Action</th>
                                <?php } ?>
                                
                            </tr>
                        </thead>
                        <tbody> 
                        <?php $no=1; foreach ($DPP->result() as $DPP) { ?>
                        <tr id="<?php echo $DPP->NOPEG?>">
                            <td align="center"><?php echo $no?></td>
                            <?php if ($this->session->userdata('level')=='Staff' || $this->session->userdata('level')=='Administrator'){?>
                            <td align="center" width="100"><a href="<?php echo base_url()?>pengurus/detail/<?php echo $DPP->NOPEG;?>"> <?php echo $DPP->NOPEG;?></td>  
                            <?php } else { ?>
                            <td align="center" width="100"><?php echo $DPP->NOPEG ?></td>
                            <?php } ?>
                            <td align="center"><?php echo $DPP->NAMA ?></td>
                            <td align="center"><?php echo $DPP->DINAS ?></td>
                            <td align="center"><?php echo $DPP->UNIT ?></td>
                            <td align="center"><?php echo $DPP->NAMA_JABATAN ?></td>
                            <?php if ($this->session->userdata('level')=='Staff' || $this->session->userdata('level')=='Administrator'){?>

                            <td align="center"><a href="<?php echo 'units/edit/'.$DPP->ID_UNIT;?>"><i class="fas fa-pencil-alt fa-fw"></i></a> | <a href="javascript:;" data-click="swal-danger"><span class="text-danger"><i class="fas fa-trash fa-fw"></i></span></a></td>
                          <?php }?>
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

        <!-- begin col-10 -->
        <div class="col-xl-12">
          <div class="panel panel-inverse">
            <!-- begin panel-heading -->
            <div class="panel-heading">
              <h4 class="panel-title">List Pengurus DPD</h4>
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
                    <table id="data-table-combine-1" class="table table-striped table-bordered table-td-valign-middle">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No. Peg.</th>
                                <th>Nama</th>
                                <th>Dinas</th>
                                <th>Unit</th>
                                <th>Jabatan</th>
                                <?php if ($this->session->userdata('level')=='Staff' || $this->session->userdata('level')=='Administrator'){?>
                                <th>Action</th>
                                <?php } ?>
                                
                            </tr>
                        </thead>
                        <tbody> 
                        <?php $no=1; foreach ($DPD->result() as $DPD) { ?>
                        <tr id="<?php echo $DPD->NOPEG?>">
                            <td align="center"><?php echo $no?></td>
                            <?php if ($this->session->userdata('level')=='Staff' || $this->session->userdata('level')=='Administrator'){?>

                            <td align="center" width="100"><a href="<?php echo base_url()?>pengurus/detail/<?php echo $DPD->NOPEG;?>"> <?php echo $DPD->NOPEG ?></td>  
                            <?php } else { ?>
                            <td align="center" width="100"><?php echo $DPD->NOPEG ?></td>
                            <?php } ?>
                            <td align="center"><?php echo $DPD->NAMA ?></td>
                            <td align="center"><?php echo $DPD->DINAS ?></td>
                            <td align="center"><?php echo $DPD->UNIT ?></td>
                            <td align="center"><?php echo $DPD->NAMA_JABATAN ?></td>
                            <?php if ($this->session->userdata('level')=='Staff' || $this->session->userdata('level')=='Administrator'){?>

                            <td align="center"><a href="<?php echo 'units/edit/'.$DPD->ID_UNIT;?>"><i class="fas fa-pencil-alt fa-fw"></i></a> | <a href="javascript:;" data-click="swal-danger"><span class="text-danger"><i class="fas fa-trash fa-fw"></i></span></a></td>
                          <?php }?>
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

        <!-- begin col-10 -->
        <div class="col-xl-12">
          <div class="panel panel-warning">
            <!-- begin panel-heading -->
            <div class="panel-heading">
              <h4 class="panel-title">List Pengurus DPC</h4>
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
                    <table id="data-table-combine-2" class="table table-striped table-bordered table-td-valign-middle">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No. Peg.</th>
                                <th>Nama</th>
                                <th>Dinas</th>
                                <th>Unit</th>
                                <th>Jabatan</th>
                                <?php if ($this->session->userdata('level')=='Staff' || $this->session->userdata('level')=='Administrator'){?>
                                <th>Action</th>
                                <?php } ?>
                                
                            </tr>
                        </thead>
                        <tbody> 
                        <?php $no=1; foreach ($DPC->result() as $DPC) { ?>
                        <tr id="<?php echo $DPC->NOPEG?>">
                            <td align="center"><?php echo $no?></td>
                            <?php if ($this->session->userdata('level')=='Staff' || $this->session->userdata('level')=='Administrator'){?>

                            <td align="center" width="100"><a href="<?php echo base_url()?>pengurus/detail/<?php echo $DPC->NOPEG;?>"> <?php echo $DPC->NOPEG ?></td>  
                            <?php } else { ?>
                            <td align="center" width="100"><?php echo $DPC->NOPEG ?></td>
                            <?php } ?>
                            <td align="center"><?php echo $DPC->NAMA ?></td>
                            <td align="center"><?php echo $DPC->DINAS ?></td>
                            <td align="center"><?php echo $DPC->UNIT ?></td>
                            <td align="center"><?php echo $DPC->NAMA_JABATAN ?></td>
                            <?php if ($this->session->userdata('level')=='Staff' || $this->session->userdata('level')=='Administrator'){?>

                            <td align="center"><a href="<?php echo 'units/edit/'.$DPC->ID_UNIT;?>"><i class="fas fa-pencil-alt fa-fw"></i></a> | <a href="javascript:;" data-click="swal-danger"><span class="text-danger"><i class="fas fa-trash fa-fw"></i></span></a></td>
                          <?php }?>
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

  <script src="<?php echo base_url();?>assets/js/demo/pengurus-list.js"></script>