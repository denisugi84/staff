<?php
class Dashboard extends CI_Controller{
     function __construct() {
        parent::__construct();
        $this->load->model('model_dashboard');
        chek_session();
    }
    
    function index(){
    	//$data['highlight'] = $this->model_dashboard->tampil_data_ac();
        $this->template->load('template','dashboard/v_dashboard');
    }
}