<?php
class agenda extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_agenda');
        chek_session();
    }
    
    function index()
    {

        
        $data['record']=  $this->model_agenda->viewdata();
        $this->template->load('template','agenda/list',$data);
    
    }

    function detail()
    {

        $id=  $this->uri->segment(3);
        $data['absen']=  $this->model_agenda->get_one_personel($id);
        $data['record']=  $this->model_agenda->get_one($id);

        $this->template->load('template','agenda/detail',$data);
    
    }

      function post()
    {
        if ($this->session->userdata('level') != 'Manager'){
            redirect('dashboard');
        } elseif(isset($_POST['id'])){
            
            $id       =   $this->input->post('id');
            $name   =   $this->input->post('name');
            $email    =   $this->input->post('email');
            $amel      =   $this->input->post('amel');
            $cs     =   $this->input->post('cs');
            $ga     =   $this->input->post('ga');
            $title     =   $this->input->post('title');
            $validity     =   $this->input->post('validity');
            $data       =   array('idPers'=>$id,
                                'namePers'=>ucwords(strtolower($name)),
                                'email'=>strtolower($email),
                                'amelNo'=>$amel,
                                'csNo'=>$cs,
                                'gaNo'=>$ga,
                                'title'=>$title,
                                'validity'=>date('Y-m-d',strtotime($validity)),
                                'status'=>'1');
            $this->model_personel->post($data);
            redirect('personel');
        } 
        else{
            $this->template->load('template','personel/add');
        }
    }
    
    function edit()
    {
       if ($this->session->userdata('level') != 'Manager'){
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