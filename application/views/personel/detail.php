    <!-- begin #content -->

    <div id="content" class="content">

      <!-- begin breadcrumb -->

      <ol class="breadcrumb float-xl-right">

        <li class="breadcrumb-item"><a href="<?php echo base_url()?>dashboard">Home</a></li>

        <li class="breadcrumb-item"><a href="<?php echo base_url()?>personel">Anggota</a></li>

        <li class="breadcrumb-item active">Detail Anggota</li>

      </ol>

      <!-- end breadcrumb -->

      <!-- begin page-header -->

      <h1 class="page-header">Detail Anggota</h1>

      <!-- end page-header -->

      <!-- begin row -->

      <div class="row">

 
        <!-- begin col-10 -->

        <div class="col-xl-6">

          <div class="panel panel-inverse">

            <!-- begin panel-heading -->

            <div class="panel-heading">

              <h4 class="panel-title">Detail Anggota</h4>

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
<div class="d-flex">
<a class="w-lg-250px w-100px center" href="javascript:;">
<img src="https://talentlead.gmf-aeroasia.co.id/images/avatar/<?php echo $record['NOPEG'];?>.jpg" alt="" class="mw-100 rounded" width="200" >
</a>

</div>
<hr class="bg-white-transparent-2">
<div class="d-flex">

<div class="flex-1 ps-3">

<h2 ><?php echo $record['NAMA'];?></h2>
<h4 ><font color="#eb8034"><?php echo $record['NOPEG'];?> / <?php echo $record['UNIT'];?></font></h4>
<h5 class="mb-1"><?php if(isset($record['NAMA_JABATAN'])){echo "<span class='badge badge-primary'>".$record['NAMA_JABATAN']."</span>";} else {echo "<span class='badge badge-secondary'>Anggota</span>";}?></h5>
</div>
</div>
<hr class="bg-gray-500">
<div class="d-flex">
<div class="flex-1 ps-3">
<font size="2" ><b>
<table cellpadding="2">
  <tr>
    <td>No Anggota </td>
    <td> : </td>
    <td><?php echo $record['NO_ANGGOTA'];?></td>
  </tr>
  <tr>
    <td>Email </td>
    <td> : </td>
    <td><?php echo strtolower($record['EMAIL']);?></td>
  </tr>
  <tr>
  <tr>
    <td>Tanggal Lahir </td>
    <td> : </td>
    <td><?php echo date('d F Y',strtotime($record['TANGGAL_LAHIR']));?></td>
  </tr>
  <tr>
    <td>Tanggal Daftar </td>
    <td> : </td>
    <td><?php echo date('d F Y', strtotime($record['TANGGAL_DAFTAR']));?></td>
  </tr>
</table>
</b>
</font>
</div>
</div>
<hr class="bg-gray-500">
<div class="d-flex">

<div class="flex-1 ps-3">
<font size="2" ><b>
<table cellpadding="2">
  <tr>
    <td>Anggota KPK </td>
    <td> : </td>
    <td><?php if ($record['KPK']==1){echo "<span class='badge badge-primary'>Ya</span>";} else { echo "<span class='badge badge-danger'>Tidak</span>";}?></td>
  </tr>
  <tr>
    <td>Anggota Koperasi </td>
    <td> : </td>
    <td><?php if ($record['KOPERASI']==1){echo "<span class='badge badge-primary'>Ya</span>";} else { echo "<span class='badge badge-danger'>Tidak</span>";}?></td>
  </tr>
  <tr>
  <tr>
    <td>ID Koperasi </td>
    <td> : </td>
    <td><?php if(!empty($record['ID_KOPERASI'])){
                  echo $record['ID_KOPERASI'];
                } else { 
                  echo "-";
                }?>
    </td>
  </tr>
</table>
</b>
</font>
</div>
</div>
<hr class="bg-gray-500">
<div class="d-flex">
<button class="btn btn-sm btn-primary" onclick="window.history.back();">Kembali</button>
<div class="flex-1 ps-3">
</div>
</div>
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
  <script src="<?php echo base_url();?>assets/js/vendor.min.js"></script>

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

  <!-- <img src="http://mcc-portal/aog/img/<?php echo $r->idPers;?>.jpg" class="img-rounded height-30" /> -->