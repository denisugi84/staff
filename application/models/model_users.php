<?php
class model_users extends CI_Model{
    
    
    
   function login($username,$password)
    {
        $chek=  $this->db->get_where('users',array('idUser'=>$username,'passUser'=>  md5($password)));
        if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    } 

     function logindata($username,$password)
    {
       return  $this->db->get_where('users',array('idUser'=>$username,'passUser'=>  md5($password)));
    }
    
    
    function tampildata()
    {
        return $this->db->get('users');
    }
    
    function get_one($id)
    {
        $param  =   array('idUser'=>$id);
        return $this->db->get_where('users',$param);
    }

    function delete()
    {   
       
        $id=  $this->uri->segment(3);
        $this->db->where('idUser',$id);
        $this->db->delete('users');
    }

}