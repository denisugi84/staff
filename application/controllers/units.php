<?php
class units extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_units');
        chek_session();
    }
    
    function index()
    {
         if ($this->session->userdata('level') != 'Staff' && $this->session->userdata('level') != 'Administrator'){
            redirect('dashboard');
        } else {
        $data['record']=  $this->model_units->tampildata();
        $this->template->load('template','units/lihat_data',$data);
        }
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses data
            $unit       =  $this->input->post('inputUnit',true);
            $dinas      =  $this->input->post('inputDinas',true);
            $data       =  array(   'UNIT'=>ucwords(strtoupper($unit)),
                                    'DINAS'=>ucwords(strtoupper($dinas)),
                                    
                                    ); 
            $this->db->insert('unit',$data);
            redirect('units');
        }
        else{
            $this->template->load('template','units/form_input');
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