<?php
class model_units extends CI_Model{
    
    
    function tampildata()
    {
        return $this->db->get('unit');
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