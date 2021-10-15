<?php
class model_pengurus extends CI_Model{
    
    
    function tampildata()
    {
        $this->db->select('*');
        $this->db->from('pengurus');
        $this->db->join('anggota','pengurus.NOPEG=anggota.NOPEG');
        $this->db->join('jabatan','pengurus.KODE_JABATAN=jabatan.KODE_JABATAN');
        $this->db->join('unit','anggota.ID_UNIT=unit.ID_UNIT');
        $this->db->order_by('unit.DINAS','ASC');
        return $this->db->get();
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