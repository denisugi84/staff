<?php

class auth extends CI_Controller{

    

    function __construct() {

        parent::__construct();

        $this->load->model('model_users');

    }

    

    function login()

    {

        if(isset($_POST['submit'])){

            

            // proses login disini

            

            $username   =   $this->input->post('username');

            $password   =   $this->input->post('password');

            $hasil=  $this->model_users->login($username,$password);

            $datarole = $this->model_users->logindata($username,$password)->result();

            if($hasil==1)

            {   



                // update last login

                $this->db->where('idUser',$username);

                $this->db->update('users',array('last_login'=>date('Y-m-d')));

                foreach($datarole as $roles){

                $role = $roles->groupUser;

                if ($role == 4){

                    $role = 'Administrator';

                } else if ($role == 3) {

                    $role = 'Staff';

                } else if ($role == 2) {

                    $role = 'Pengurus';

                }  else {

                    $role = 'User';

                }

                $fullname = $roles->nameUser;

                }

                $this->session->set_userdata(array('status_login'=>'oke','username'=>$username,'level'=>$role,'fullname'=>$fullname));

                redirect('dashboard');

            }

            else{

                redirect('auth/login');

            }

        }

        else{

            chek_session_login();

            $this->load->view('form_login');

        }

    }

    

    

    function logout()

    {

        $this->session->sess_destroy();

        redirect('auth/login');

    }

    function redirect()

    {

        $this->load->view('errors/404');

    }

}