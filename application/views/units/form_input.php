<!-- begin #content -->
    <div id="content" class="content">
      <!-- begin breadcrumb -->
      <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
        <li class="breadcrumb-item"><a href="units">Units</a></li>
        <li class="breadcrumb-item active">Add Unit</li>
      </ol>
      <!-- end breadcrumb -->
      <!-- begin page-header -->
      <h1 class="page-header">Units</h1>
      <!-- end page-header -->
      <!-- begin row -->
      <div class="row">
        <!-- begin col-10 -->
        <div class="col-xl-6">
          <div class="panel panel-primary">
            <!-- begin panel-heading -->
            <div class="panel-heading">
              <h4 class="panel-title">Add Units</h4>
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
                             echo form_open('units/post'); ?>
                                                              
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="inputDinas">Dinas *  :</label>
                                    <div class="col-md-10 col-sm-10">
                                        <input class="form-control" type="text" id="inputDinas" name="inputDinas" placeholder="Dinas" data-parsley-required="true"  />
                                    </div>
                                </div>
                                
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="inputUnit">Unit  :</label>
                                    <div class="col-md-10 col-sm-10">
                                        <input class="form-control" type="text" id="inputUnit" name="inputUnit" placeholder="Unit" data-parsley-required="true"/>
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