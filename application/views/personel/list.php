    <!-- begin #content -->

    <div id="content" class="content">

      <!-- begin breadcrumb -->

      <ol class="breadcrumb float-xl-right">

        <li class="breadcrumb-item"><a href="<?php echo base_url()?>dashboard">Home</a></li>

        <li class="breadcrumb-item"><a href="<?php echo base_url()?>personel">Anggota</a></li>

        <li class="breadcrumb-item active">Daftar Anggota</li>

      </ol>

      <!-- end breadcrumb -->

      <!-- begin page-header -->

      <h1 class="page-header">Detail Anggota</h1>

      <!-- end page-header -->

      <!-- begin row -->

      <div class="row">

 <!-- begin col-10 -->
        <div class="col-xl-12">
          <div class="panel panel-primary">
            <!-- begin panel-heading -->
            <div class="panel-heading">
              <h4 class="panel-title">Cari Anggota</h4>
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
                  <?php $attribute = array ('id'=>'accountForm','autocomplete'=>'off', 'class'=>'form-horizontal', 'data-parsley-validate'=>'true');
                echo form_open('personel',$attribute); ?>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="inputNopeg">No Peg.</label>
                            <input type="text" class="form-control" id="inputNopeg" name="inputNopeg" placeholder="Nomor Pegawai" value="<?php if(isset($_POST['inputNopeg'])){echo $_POST['inputNopeg'];}?>">
                        </div>
                        <div class="col-sm-3">
                            <label for="inputName">Nama</label>
                            <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Nama" value="<?php if(isset($_POST['inputName'])){echo $_POST['inputName'];}?>">
                        </div>
                        
                        <div class="col-sm-3">
                            <label for="inputNoAnggota">No. Anggota</label>
                            <input type="text" class="form-control" id="inputNoAnggota"  name="inputNoAnggota" placeholder="Nomor Anggota" value="<?php if(isset($_POST['inputNoAnggota'])){echo $_POST['inputNoAnggota'];}?>">
                        </div>
                        <div class="col-sm-3">
                            <label for="inputUnit">Unit</label>
                            <input type="text" class="form-control" id="inputUnit" name="inputUnit" placeholder="Unit" value="<?php if(isset($_POST['inputUnit'])){echo $_POST['inputUnit'];}?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        
                        <div class="col-sm-3">
                            <label for="inputDinas">Dinas</label>
                            <input type="text" class="form-control" id="inputDinas" name="inputDinas" placeholder="Dinas" value="<?php if(isset($_POST['inputDinas'])){echo $_POST['inputDinas'];}?>">
                        </div>
                        <div class="col-sm-3">
                            <label for="inputKPK">KPK</label>
                            <select type="text" class="form-control" id="inputKPK" name="inputKPK">
                              <option value="">Please Select</option>
                              <?php if ($_POST['inputKPK']==='0'){ ?>
                              <option value="0" selected="">Tidak</option>
                              <?php } else {?>
                                <option value="0">Tidak</option>
                              <?php }  
                              if ($_POST['inputKPK']=='1'){ ?>
                              <option value="1" selected>Ya</option>
                              <?php } else {?>
                              <option value="1">Ya</option>
                              <?php } ?>

                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label for="inputKoperasi">Koperasi</label>
                            <select type="text" class="form-control" id="inputKoperasi" name="inputKoperasi">
                              <option value="">Please Select</option>
                              <?php if ($_POST['inputKoperasi']==='0'){ ?>
                              <option value="0" selected="">Tidak</option>
                              <?php } else {?>
                                <option value="0">Tidak</option>
                              <?php }  
                              if ($_POST['inputKoperasi']=='1'){ ?>
                              <option value="1" selected>Ya</option>
                              <?php } else {?>
                              <option value="1">Ya</option>
                              <?php } ?>

                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary px-4 ">Search</button>
                    <button type="button" class="btn btn-secondary px-4" data-click = "resetBtn">Reset</button>
                </form>
              </div>
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

              <h4 class="panel-title">Daftar Anggota</h4>

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

             <?php if ($this->session->userdata('level')=='Staff' || $this->session->userdata('level')=='Administrator'){?> <a href="<?php echo base_url() ?>personel/post" class="btn btn-danger pull-right">Add New</a> <?php } ?>

              <table id="data-table-combine" class="table table-striped table-bordered table-td-valign-middle">

                  <thead>

                    <tr>

                      <th width="1%">No</th>

                      <th class="text-nowrap">No. Peg.</th>

                      <th class="text-nowrap">Name</th>

                      <th class="text-nowrap">Jabatan</th>

                      <th class="text-nowrap">No. Anggota</th>

                      <th class="text-nowrap">Unit</th>

                      <th class="text-nowrap">Dinas</th>

                      <th class="text-nowrap">KPK</th>

                      <th class="text-nowrap">Kopkar</th>

                      <th class="text-nowrap">Email</th>
                      <?php if ($this->session->userdata('level')=='Staff' || $this->session->userdata('level')=='Administrator'){?>
                      <th class="text-nowrap">Action</th>
                    <?php }?>
                    </tr>

                  </thead>

              

                <tbody>

            <?php $no=1; foreach ($record->result() as $r) { ?>

              <tr>

                <td width="1%" class="f-s-600 text-inverse" align="center"><?php echo $no;?></td>

                <td align="center"><a href="<?php echo 'personel/detail/'.$r->NOPEG?>"><?php echo $r->NOPEG ?></a></td>

                <td><?php echo $r->NAMA ?></td>

                <td align="center"><?php if($r->JABATAN == "") { echo "<span class='badge badge-secondary'>Anggota</span>";} else{ echo"<span class='badge badge-warning'>".$r->JABATAN."</span>";} ?></td>

                <td align="center"><?php echo $r->NO_ANGGOTA ?></td>

                <td align="center"><?php echo $r->UNIT ?></td>

                <td align="center"><?php echo $r->DINAS ?></td>

                <td align="center"><?php if( $r->KPK == '0'){echo "<span class='badge badge-danger'>Tidak</span>";} else {echo "<span class='badge badge-primary'>Ya</span>";} ?></td>

                <td align="center"><?php if( $r->KOPERASI == '0'){echo "<span class='badge badge-danger'>Tidak</span>";} else { echo "<span class='badge badge-primary'>Ya</span>";} ?></td>

                <td align="left"><?php echo $r->EMAIL ?></td>
                <?php if ($this->session->userdata('level')=='Staff' || $this->session->userdata('level')=='Administrator'){?>
                <td align="center"><a href="<?php echo 'personel/edit/'.$r->NOPEG;?>"><i class="fas fa-pencil-alt fa-fw"></i></a></td>
                <?php } ?>

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

  <script src="<?php echo base_url();?>assets/js/demo/personel-detail-list.js"></script>

  <!-- ================== END PAGE LEVEL JS ================== -->
