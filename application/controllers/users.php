<?php
class users extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_users');
        chek_session();
    }
    
    function index()
    {
         if ($this->session->userdata('level') != 'Staff' && $this->session->userdata('level') != 'Administrator'){
            redirect('dashboard');} else {
        $data['record']=  $this->model_users->tampildata();
        $this->template->load('template','users/lihat_data',$data);
            }
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses data
            $nama       =  $this->input->post('nama',true);
            $username   =  $this->input->post('username',true);
            $password   =  $this->input->post('password',true);
            $role       =  $this->input->post('role',true);
            $data       =  array(   'nameUser'=>ucwords(strtolower($nama)),
                                    'idUser'=>$username,
                                    'groupUser'=>$role,
                                    'statusUser'=>'1',
                                    'passUser'=>md5('aeroasia')); 
            $this->db->insert('users',$data);
            redirect('users');
        }
        else{
            $this->template->load('template','users/form_input');
        }
    }
    
    function edit()
    {
        if(isset($_POST['submit'])){
           
            $id         =  $this->input->post('id',true);
            $nama       =  $this->input->post('nama',true);
            $username   =  $this->input->post('username',true);
            $password   =  $this->input->post('password',true);
            $role       =  $this->input->post('role',true);
            if(empty($password)){
                 $data  =  array(   'nameUser'=>ucwords(strtolower($nama)),
                                    'idUser'=>$username,
                                    'groupUser'=>$role);
            }
            else{
                  $data =  array(   'nameUser'=>ucwords(strtolower($nama)),
                                    'idUser'=>$username,
                                    'groupUser'=>$role,
                                    'passUser'=>md5($password));   
            }
             $this->db->where('idUser',$id);
             $this->db->update('users',$data);
             redirect('users');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_users->get_one($id)->row_array();
            $this->template->load('template','users/form_edit',$data);
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