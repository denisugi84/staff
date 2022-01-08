<?php
class Pengurus extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_pengurus');
        chek_session();
    }
    
    function index()
    {
        
        $data['DPP']=  $this->model_pengurus->tampildatadpp();
        $data['DPD']=  $this->model_pengurus->tampildatadpd();
        $data['DPC']=  $this->model_pengurus->tampildatadpc();
        $this->template->load('template','pengurus/lihat_data',$data);
        
    }


    function post()
    {
        if(isset($_POST['submit'])){
            // proses data
            $nopeg       =  $this->input->post('inputNopeg',true);
            $jabatan      =  $this->input->post('inputJabatan',true);
            $data       =  array(   'NOPEG'=>$nopeg,
                                    'KODE_JABATAN'=>$jabatan
                                    
                                    ); 
            $sql = $this->db->insert('pengurus',$data);
            if ($sql){
            
            $data['message'] = "Data pengurus berhasil disimpan";
            $data['alert'] = "success";
            $data['anggota'] = $this->model_pengurus->listanggota();
            $data['jabatan'] = $this->model_pengurus->listjabatan();
            $this->template->load('template','pengurus/form_input',$data);

            } else {

            $data['message'] = "Data pengurus gagal disimpan";
            $data['alert'] = "danger";
            $data['anggota'] = $this->model_pengurus->listanggota();
            $data['jabatan'] = $this->model_pengurus->listjabatan();
            $this->template->load('template','pengurus/form_input',$data);
            }
        }
        else{
            $data['anggota'] = $this->model_pengurus->listanggota();
            $data['jabatan'] = $this->model_pengurus->listjabatan();
            $this->template->load('template','pengurus/form_input',$data);
        }
    }
    
    function edit()
    {
        if(isset($_POST['submit'])){
           
            $id         =  $this->input->post('inputId',true);
            $unit       =  $this->input->post('inputUnit',true);
            $dinas      =  $this->input->post('inputDinas',true);
            $data       =  array(   'UNIT'=>ucwords(strtoupper($unit)),
                                    'DINAS'=>ucwords(strtoupper($dinas)),
                                    
                                    );
            
             $this->db->where('ID_UNIT',$id);
             $this->db->update('unit',$data);
             redirect('units');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_units->get_one($id)->row_array();
            $this->template->load('template','units/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('idUser',$id);
        $this->db->delete('users');
        redirect('users');
    }
}