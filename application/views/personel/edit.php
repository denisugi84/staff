 <!-- begin #content -->
    <div id="content" class="content">
      <!-- begin breadcrumb -->
      <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="<?php echo base_url()?>dashboard">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url()?>personel">Personel</a></li>
        <li class="breadcrumb-item active">View List</li>
      </ol>
      <!-- end breadcrumb -->
      <!-- begin page-header -->
      <h1 class="page-header">Edit Personel</h1>
      <!-- end page-header -->
      <!-- begin row -->
      <div class="row">
        <!-- begin col-10 -->
        <div class="col-xl-8">
          <div class="panel panel-inverse">
            <!-- begin panel-heading -->
            <div class="panel-heading">
              <h4 class="panel-title">Update</h4>
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
              
                 <?php $attribute = array ('id'=>'accountForm','autocomplete'=>'off', 'class'=>'form-horizontal', 'data-parsley-validate'=>'true');
                echo form_open('personel/edit',$attribute); ?>
                <fieldset>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="fullname">ID Number * :</label>
                  <div class="col-md-8 col-sm-8">
                    <input class="form-control" id="id" name="id" type="number" min="510000" max="999999" data-parsley-required="true" value="<?php echo $record['idPers'];?>" readonly>
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="email">Name * :</label>
                  <div class="col-md-8 col-sm-8">
                     <input id="name" name="name" type="text" class="form-control" data-parsley-required="true" placeholder="Full Name" value="<?php echo $record['namePers'];?>">
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="website">Present Title :</label>
                  <div class="col-md-8 col-sm-8">
                     <select id="title" name="title" class="form-control">
                        <option value="<?php echo $record['title'];?>"><?php echo $record['title']; ?></option>
                        <option value="AMT">AMT</option>
                        <option value="SAMT">SAMT</option>
                        <option value="AME">AME</option>
                        <option value="SAME">SAME</option>

                    </select>
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="message">Email :</label>
                  <div class="col-md-8 col-sm-8">
                    <input id="email" name="email" type="email" class="form-control" placeholder="Email Address" value="<?php echo $record['email'];?>">
                  </div>
                </div>
                 <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="message">AMEL Number :</label>
                  <div class="col-md-8 col-sm-8">
                   <input id="amel" name="amel" type="number" class="form-control" min="1000" max="99999" value="<?php echo $record['amelNo'];?>" placeholder="AMEL Number">
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="message">CS Number :</label>
                  <div class="col-md-8 col-sm-8">
                    <input id="cs" name="cs" type="number" class="form-control" min="10000" max="99999"  data-parsley-range="[10000,99999]" placeholder="Certifying Staff Number" value="<?php echo $record['csNo'];?>">
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="message">GA Number :</label>
                  <div class="col-md-8 col-sm-8">
                     <input id="ga" name="ga" type="number" class="form-control"  min="1000" max="9999" value="<?php echo $record['gaNo'];?>" placeholder="GA Auth. Number">
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="message">Validity :</label>
                  <div class="col-md-8 col-sm-8">
                    <input type="text" class="form-control" id="datepicker-default"  name="validity" placeholder="Select Date" value="<?php echo $record['validity'];?>">
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="message">Status :</label>
                  <div class="col-md-8 col-sm-8">
                    <select id="status" name="status" class="form-control">
                        <option value="<?php echo $record['status'];?>"><?php if ($record['status'] ==1){echo 'Active';} else { echo 'Inactive';}?></option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-4 col-sm-4 col-form-label" for="message">&nbsp;</label>
                    <div class="col-md-8 col-sm-8">
                      <button type="submit" class="btn btn-sm btn-primary m-r-5">Update</button>
                      <a class="btn btn-sm btn-default" href="<?php echo base_url()?>personel">Cancel</a>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
            

            <!-- end panel-body -->

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
  <script src="<?php echo base_url();?>assets/js/demo/personel-detail-edit.js"></script>
  <!-- ================== END PAGE LEVEL JS ================== -->