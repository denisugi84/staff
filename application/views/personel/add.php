 <!-- begin #content -->
    <div id="content" class="content">
      <!-- begin breadcrumb -->
      <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="<?php echo base_url()?>dashboard">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url()?>personel">Anggota</a></li>
        <li class="breadcrumb-item active">Tambah Anggota</li>
      </ol>
      <!-- end breadcrumb -->
      <!-- begin page-header -->
      <h1 class="page-header">Anggota</h1>
      <!-- end page-header -->
      <!-- begin row -->
      <div class="row">
        <!-- begin col-10 -->
        <div class="col-xl-8">
          <div class="panel panel-inverse">
            <!-- begin panel-heading -->
            <div class="panel-heading">
              <h4 class="panel-title">Tambah Anggota</h4>
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
                  <div class="alert alert-danger fade show m-b-40">
                    <span class="close" data-dismiss="alert">×</span>
                        <b><?php echo $message;?></b>
                  </div>
                </div>
              <?php }?>
                 <?php $attribute = array ('id'=>'accountForm','autocomplete'=>'off', 'class'=>'form-horizontal', 'data-parsley-validate'=>'true');
                echo form_open('personel/post',$attribute); ?>
                <fieldset>
                
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="inputId">No. Pegawai * :</label>
                  <div class="col-md-8 col-sm-8">
                    <input class="form-control" id="inputId" name="inputId" type="number" min="510000" max="999999" data-parsley-required="true" placeholder="Nomor Pegawai" value="<?php if(isset($_POST['inputId'])){ echo $_POST['inputId'];}?>">
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="inputId">No. Anggota * :</label>
                  <div class="col-md-8 col-sm-8">
                    <input class="form-control" id="inputIdAnggota" name="inputIdAnggota" type="number" min="200000" max="999999" data-parsley-required="true" placeholder="Nomor Anggota" value="<?php if(!empty($_POST['inputIdAnggota'])){ echo $_POST['inputIdAnggota'];}?>">
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="inputUuid">UUID * :</label>
                  <div class="col-md-8 col-sm-8">
                    <input class="form-control" id="inputUuid" name="inputUuid" type="text" placeholder="Nomor UUID" value="<?php if(isset($_POST['inputUuid'])){ echo $_POST['inputUuid'];}?>">
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="inputName">Nama Lengkap * :</label>
                  <div class="col-md-8 col-sm-8">
                     <input id="inputName" name="inputName" type="text" class="form-control" data-parsley-required="true" placeholder="Nama Lengkap" value="<?php if(isset($_POST['inputName'])){ echo $_POST['inputName'];}?>">
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="inputDinas">Dinas :</label>
                  <div class="col-md-8 col-sm-8">
                     <select id="inputDinas" name="inputDinas" class="form-control" data-parsley-required="true">
                        <option value="">Please Select</option>

                       

                         <?php foreach ($record->result() as $r) { ?>

                        <option value="<?php echo $r->DINAS?>"><?php echo $r->DINAS ?> </option>
                      
                      <?php } ?>

                    </select>
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="inputUnit">Unit :</label>
                  <div class="col-md-8 col-sm-8">
                     <select id="inputUnit" name="inputUnit" class="form-control" data-parsley-required="true">
                        <option value="">Please Select</option>
                     </select>
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="inputEmail">Email :</label>
                  <div class="col-md-8 col-sm-8">
                    <input id="inputEmail" name="inputEmail" type="email" class="form-control" placeholder="Alamat Email" data-parsley-email value="<?php if(isset($_POST['inputEmail'])){ echo $_POST['inputEmail'];}?>">
                  </div>
                </div>
                 <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="inputBirth">Tanggal Lahir :</label>
                  <div class="col-md-8 col-sm-8">
                    <input type="text" class="form-control" id="datepicker-default"  name="inputBirth" placeholder="Tanggal Lahir" data-parsley-date value="<?php if(isset($_POST['inputBirth'])){ echo $_POST['inputBirth'];}?>">
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="inputKpk">KPK :</label>
                  <div class="col-md-8 col-sm-8">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="inputKpkYes"  name="inputKpk" value="1" <?php if(isset($_POST['inputKpk'])&&$_POST['inputKpk']==1){ echo "checked";}?>/>
                      <label class="form-check-label" for="inputKpkYes">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="inputKpkNo"  name="inputKpk" value="0" data-parsley-required <?php if(isset($_POST['inputKpk'])&&$_POST['inputKpk']==0){ echo "checked";}?>/>
                      <label class="form-check-label" for="inputKpkNo">Tidak</label>
                    </div>
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="message">Koperasi :</label>
                  <div class="col-md-8 col-sm-8">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="inputKoperasiYes"  name="inputKoperasi" value="1" data-parsley-required <?php if(isset($_POST['inputKoperasi'])&&$_POST['inputKoperasi']==1){ echo "checked";}?>/>
                      <label class="form-check-label" for="inputKpkYes">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="inputKoperasiNo"  name="inputKoperasi" value="0" data-parsley-required <?php if(isset($_POST['inputKoperasi'])&&$_POST['inputKoperasi']==0){ echo "checked";}?>/>
                      <label class="form-check-label" for="inputKpkNo">Tidak</label>
                    </div>
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="inputEmail">ID Koperasi :</label>
                  <div class="col-md-8 col-sm-8">
                    <input id="inputIdKoperasi" name="inputIdKoperasi" type="text" class="form-control" placeholder="Nomor ID Koperasi" value="<?php if(isset($_POST['inputIdKoperasi'])){ echo $_POST['inputIdKoperasi'];}?>">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="col-md-4 col-sm-4 col-form-label" for="message">&nbsp;</label>
                    <div class="col-md-8 col-sm-8">
                      <button type="submit" class="btn btn-sm btn-primary m-r-5">Save</button>
                      <button type="reset" class="btn btn-sm btn-secondary m-r-5">Reset</button>
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
 
  <script src="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url();?>assets/js/demo/personel-detail-edit.js"></script>
  <script type='text/javascript'>
          $(document).ready(function(){
                
                // City change
                $('#inputDinas').change(function(){
                    var dinas = $(this).val();

                    // AJAX request
                    $.ajax({
                        url:'<?=base_url()?>personel/listUnit',
                        method: 'post',
                        data: {dinas: dinas},
                        dataType: 'json',
                        success: function(response){

                            // Remove options
                            $('#inputUnit').find('option').not(':first').remove();

                            // Add options
                            $.each(response,function(index,data){
                                $('#inputUnit').append('<option value="'+data['ID_UNIT']+'">'+data['UNIT']+'</option>');
                            });
                        }
                    });
                });  
                
            });
        </script>
  
  <!-- ================== END PAGE LEVEL JS ================== -->