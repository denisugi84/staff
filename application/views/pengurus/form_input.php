<!-- begin #content -->
    <div id="content" class="content">
      <!-- begin breadcrumb -->
      <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
        <li class="breadcrumb-item"><a href="pengurus">Pengurus</a></li>
        <li class="breadcrumb-item active">Tambah Pengurus</li>
      </ol>
      <!-- end breadcrumb -->
      <!-- begin page-header -->
      <h1 class="page-header">Pengurus</h1>
      <!-- end page-header -->
      <!-- begin row -->
      <div class="row">
        <!-- begin col-10 -->
        <div class="col-xl-6">
          <div class="panel panel-primary">
            <!-- begin panel-heading -->
            <div class="panel-heading">
              <h4 class="panel-title">Tambah Pengurus</h4>
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
                            <?php if(!empty($message)){?>
                            <div class="form-group">
                              <div class="alert alert-<?php echo $alert;?> fade show m-b-40">
                                <span class="close" data-dismiss="alert">×</span>
                                    <b><?php echo $message;?></b>
                              </div>
                            </div>
                          <?php }?>

                            <?php 
                            $attribute = array ('class'=>'form-horizontal', 'data-parsley-validate'=>'true','autocomplete'=>'off');
                             echo form_open('pengurus/post'); ?>
                                                              
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="inputJabatan">Jabatan *  :</label>
                                    <div class="col-md-10 col-sm-10">
                                        <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="inputJabatan" id="inputJabatan" >
                                            <option value="">-- Please Select --</option>
                                            <?php foreach ($jabatan->result() as $j) {?>

                                                <?php if (!isset($j->NOPEG)){ ?>
                                                <option data-subtext="<?php echo $j->LEVEL?>" value="<?php echo $j->KODE_JABATAN; ?>"><?php echo $j->NAMA_JABATAN;?></option> 
                                                 <?php }?>
                                            <?php }?>
                                          </select> *menampilkan jabatan yang belum terisi
                                    </div>
                                </div>

                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="inputNopeg">Nopeg  :</label>
                                    <div class="col-md-10 col-sm-10">
                                        <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="inputNopeg" id="inputNopeg">
                                            <option value="">-- Please Select --</option>
                                            <?php foreach ($anggota->result() as $a) {?>
                                                <?php if (!isset($a->KODE_JABATAN)){ ?>
                                                <option value="<?php echo $a->NOPEG; ?>" data-subtext="<?php echo $a->NOPEG." / ".$a->UNIT; ?>" ><?php echo $a->NAMA;?></option> 
                                                <?php }?>
                                           <?php }?>
                                            
                                          </select> *menampilkan anggota yang belum menjabat
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
  <script src="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
  
  <script src="<?php echo base_url();?>assets/js/demo/pengurus-list.js"></script>
  <!-- ================== END PAGE LEVEL JS ================== -->