<?php
class personel extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_personel');
        $this->load->model('model_units');

        chek_session();
    }
    
    function index()
    {

            $nopeg ='';
            $nama =''; 
            $jabatan = '';
            $noAnggota = '';
            $unit = '';
            $dinas = '';
            $kpk = '';
            $koperasi ='';

            if(isset($_POST['inputNopeg'])||isset($_POST['inputName'])||isset($_POST['inputJabatan'])||isset($_POST['inputNoAnggota'])||isset($_POST['inputUnit'])||isset($_POST['inputDinas'])||isset($_POST['inputKPK'])||isset($_POST['inputKoperasi'])){

                
                    if (isset($_POST['inputNopeg'])){
                        $nopeg = $_POST['inputNopeg'];
                    }
                     
                    if (isset($_POST['inputName'])){
                        $nama = $_POST['inputName'];                    
                    }
                        
                    if (isset($_POST['inputJabatan'])){
                        $jabatan = $_POST['inputJabatan'];
                    }
                    
                    if (isset($_POST['inputNoAnggota'])){
                        $noAnggota = $_POST['inputNoAnggota'];
                    }
                    
                    if (isset($_POST['inputUnit'])){
                        $unit = $_POST['inputUnit'];
                    }
                    
                    if (isset($_POST['inputDinas'])){
                        $dinas = $_POST['inputDinas'];
                    }
                    
                    if (isset($_POST['inputKPK'])){
                        $kpk = $_POST['inputKPK'];
                    }
                    
                    if (isset($_POST['inputKoperasi'])){
                        $koperasi = $_POST['inputKoperasi'];
                    }
                   

                }

       
        
        $data['record']=  $this->model_personel->viewdata($nopeg,$nama,$jabatan,$noAnggota,$unit,$dinas,$kpk,$koperasi);
        $this->template->load('template','personel/list',$data);
    
    }

      function post()
    {
        if ($this->session->userdata('level') != 'Staff' && $this->session->userdata('level') != 'Administrator'){
            redirect('dashboard');
        } elseif(isset($_POST['inputId'])){
            
            $id         =   $this->input->post('inputId');
            $name       =   $this->input->post('inputName');
            $unit       =   $this->input->post('inputUnit');
            $idAnggota  =   $this->input->post('inputIdAnggota');
            $uuid       =   $this->input->post('inputUuid');
            $email      =   $this->input->post('inputEmail');
            $lahir      =   $this->input->post('inputBirth');
            $kpk        =   $this->input->post('inputKpk');
            $koperasi   =   $this->input->post('inputKoperasi');
            $idKoperasi =   $this->input->post('inputIdKoperasi');
            $data       =   array(
                                'NOPEG'=>$id,
                                'NAMA'=>ucwords(strtolower($name)),
                                'UUID' => $uuid,
                                'NO_ANGGOTA' => $idAnggota,
                                'ID_UNIT' => $unit,
                                'EMAIL'=>strtolower($email),
                                'TANGGAL_LAHIR'=>$lahir,
                                'KPK'=>$kpk,
                                'KOPERASI'=>$koperasi,
                                'ID_KOPERASI'=>$idKoperasi,
                                'TANGGAL_DAFTAR'=>date('Y-m-d'),
                                'STATUS'=>'1');

            $datas['record']=  $this->model_units->listDinas();

            if ($this->model_personel->get_id($id)){

                $datas['message'] = "Duplicate Entry Nomor Pegawai ".$id;
                $this->template->load('template','personel/add',$datas);
           
            } elseif($this->model_personel->get_uuid($uuid)){

                $datas['message'] = "Duplicate Entry UUID ".$uuid;
                $this->template->load('template','personel/add',$datas);

            } elseif($this->model_personel->get_idAnggota($idAnggota)){

                $datas['message'] = "Duplicate Entry Nomor Anggota ".$idAnggota;
                $this->template->load('template','personel/add',$datas);

            } else {
               
                    $this->model_personel->post($data);
                    redirect('personel');  
            }

            
        } else{

            $data['record']=  $this->model_units->listDinas();
            $this->template->load('template','personel/add',$data);
        }
    }

    public function listUnit(){
        // POST data
        $postData = $this->input->post('dinas');

        // get data
        $data = $this->model_units->listUnit($postData);

        echo json_encode($data);
    }
    
    function edit()
    {
       if ($this->session->userdata('level')=='Staff' && $this->session->userdata('level')=='Administrator'){
            redirect('dashboard');
        } elseif(isset($_POST['id'])){
          
            $id         =   $this->input->post('id');
            $name       =   $this->input->post('name');
            $email      =   $this->input->post('email');
            $amel       =   $this->input->post('amel');
            $cs         =   $this->input->post('cs');
            $ga         =   $this->input->post('ga');
            $validity   =   $this->input->post('validity');
            $status     =   $this->input->post('status');
            $title     =   $this->input->post('title');
            $data       =   array('idPers'=>$id,
                                'namePers'=>ucwords(strtolower($name)),
                                'email'=>strtolower($email),
                                'amelNo'=>$amel,
                                'csNo'=>$cs,
                                'gaNo'=>$ga,
                                'validity'=>date('Y-m-d',strtotime($validity)),
                                'title'=>$title,
                                'status'=>$status);
            $this->model_personel->edit($data,$id);
            redirect('personel');
        }
        else{
            $id=  $this->uri->segment(3);
            
            $data['record']     =  $this->model_personel->get_one($id)->row_array();
            $this->template->load('template','personel/edit',$data);
        }
    }
    
    
}