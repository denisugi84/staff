<?php
class Model_dashboard extends ci_model{
    
    
     function tampil_data_ac()
    {      
       
        $this->db->select('
                            h.highlight_id AS h_id, 
                            a.acReg AS acReg, 
                            h.problem AS problem, 
                            c.class_desc  AS class, 
                            h.sector AS sector, 
                            s.status_desc AS status, 
                            h.highlight_remark AS remark,
                            h.classification AS h_class,
                            h.highlight_status AS h_status,
                            h.idCust AS idCust
                            
                         ');
        $this->db->from('highlight AS h');
        $this->db->join('aircrafts AS a', 'h.acId=a.acId');
        $this->db->join('classifications AS c', 'h.classification=c.class_id');
        $this->db->join('status AS s', 'h.highlight_status=s.status_id');
        $this->db->where('highlight_status <>', '5');
        $this->db->order_by('h.idCust', 'ASC');
        return $this->db->get();
    
    }
    
    
    
}