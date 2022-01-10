<?php
class model_units extends CI_Model{
    
    
    function tampildata()
    {
        return $this->db->get('unit');
    }
    
    function listDinas()
    {
        $this->db->group_by('DINAS');
        return $this->db->get('unit');
    }

     // Get Unit
    function listUnit($postData){
        $response = array();
        
        // Select record
        $this->db->select('ID_UNIT,UNIT');
        $this->db->where('DINAS', $postData);
        $q = $this->db->get('unit');
        $response = $q->result_array();

        return $response;
    }

    function get_one($id)
    {
        $id=  $this->uri->segment(3);
        $param  =   array('ID_UNIT'=>$id);
        return $this->db->get_where('unit',$param);
    }

    function delete()
    {   
       
        $id=  $this->uri->segment(3);
        $this->db->where('idUser',$id);
        $this->db->delete('users');
    }

}