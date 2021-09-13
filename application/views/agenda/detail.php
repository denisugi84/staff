    <!-- begin #content -->

    <div id="content" class="content">

      <!-- begin breadcrumb -->

      <ol class="breadcrumb float-xl-right">

        <li class="breadcrumb-item"><a href="<?php echo base_url()?>dashboard">Home</a></li>

        <li class="breadcrumb-item"><a href="<?php echo base_url()?>agenda">Agenda</a></li>

        <li class="breadcrumb-item active">Detail Agenda</li>

      </ol>

      <!-- end breadcrumb -->

      <!-- begin page-header -->

      <h1 class="page-header">Detail Meeting</h1>

      <!-- end page-header -->

      <!-- begin row -->

      <div class="row">

         <!-- begin col-10 -->
        <div class="col-xl-12">
          <div class="panel panel-inverse">
            <!-- begin panel-heading -->
            <div class="panel-heading">
              <h4 class="panel-title">Notulen Meeting</h4>
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
                <div class="col-md-12 mx-auto">
                  <?php $no=1; foreach ($record->result() as $r) { ?>
                  <?php $attribute = array ('id'=>'accountForm','autocomplete'=>'off', 'class'=>'form-horizontal', 'data-parsley-validate'=>'true');
                echo form_open('agenda',$attribute); ?>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="inputFirstname">Tanggal Meeting</label>
                            <div class="input-group input-daterange">
                                <input type="text" class="form-control" readonly value="<?php echo $r->DATE_MEETING ?>">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="inputLastname">Perihal</label>
                            <input type="text" class="form-control" readonly value="<?php echo $r->TITLE_MEETING ?>">
                        </div>
                        <div class="col-sm-3">
                            <label for="inputLastname">Mulai Pukul</label>
                            <input type="text" class="form-control" readonly value="<?php echo $r->START_MEETING ?>">
                        </div>
                        <div class="col-sm-3">
                            <label for="inputLastname">Selesai Pukul</label>
                            <input type="text" class="form-control" readonly value="<?php echo $r->END_MEETING ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label for="inputFirstname">Notulen</label>
                            <textarea class="form-control" rows = "6" readonly><?php echo $r->NOTULEN ?></textarea>
                        </div>
                      
                    </div>
                    <button type="submit" class="btn btn-danger px-4 " >Kembali</button>
                </form>
              </div>
            </div>
            <?php $no++; }?>
            <!-- end panel-body -->
          </div>
        </div>
        <!-- end col-10 -->

        <!-- begin col-10 -->

        <div class="col-xl-12">

          <div class="panel panel-danger">

            <!-- begin panel-heading -->

            <div class="panel-heading">

              <h4 class="panel-title">Daftar Peserta</h4>

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

             <?php if ($this->session->userdata('level')=='Manager'){?> <a href="<?php echo base_url() ?>personel/post" class="btn btn-danger pull-right">Add New</a> <?php } ?>

              <table id="data-table-combine" class="table table-striped table-bordered table-td-valign-middle">

                  <thead>

                    <tr>

                      <th width="1%">No</th>

                      <th class="text-nowrap">No. Pegawai</th>

                      <th class="text-nowrap">Nama</th>

                      <th class="text-nowrap">Unit</th>

                      <th class="text-nowrap">Dinas</th>

                      <th class="text-nowrap">Present</th>


                    </tr>

                  </thead>

              

                <tbody>

            <?php $no=1; foreach ($absen->result() as $a) { ?>

              <tr>

                <td width="1%" class="f-s-600 text-inverse" align="center"><?php echo $no;?></td>

                <td><?php echo $a->NOPEG ?></td>

                <td align="center"><?php echo $a->NAMA ?></td>

                <td align="center"><?php echo $a->UNIT ?></td>

                <td align="center"><?php echo $a->DINAS ?></td>

                <td align="center"><?php echo $a->PRESENT ?></td>

              </tr>

          <?php $no++; }?>

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

  <script src="<?php echo base_url();?>assets/js/demo/agenda-detail-list.js"></script>

  <!-- ================== END PAGE LEVEL JS ================== -->
