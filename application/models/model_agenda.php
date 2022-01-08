<?php
class Model_agenda extends CI_Model{
    
    
    function viewdata()
    {

        $this->db->select(' 
                            m.ID_MEETING as ID_MEETING,
                            m.DATE_MEETING as DATE_MEETING,
                            m.TITLE_MEETING as TITLE_MEETING,
                            m.NOTULEN as NOTULEN,
                            m.START_MEETING as START_MEETING,
                            m.END_MEETING as END_MEETING,
                            m.CREATED_AT as CREATED_AT,
                            m.UPDATED_AT as UPDATED_AT
                         
                            ');
        $this->db->from('agenda as m');
       // $this->db->join('detail_agenda as d', 'm.ID_MEETING=d.ID_MEETING');

        return $this->db->get();
    }
    
    function post($data)
    {
        $this->db->insert('personel',$data);
    }

 function get_one($id)
    {

        $this->db->select(' 
                            m.ID_MEETING as ID_MEETING,
                            m.DATE_MEETING as DATE_MEETING,
                            m.TITLE_MEETING as TITLE_MEETING,
                            m.NOTULEN as NOTULEN,
                            m.START_MEETING as START_MEETING,
                            m.END_MEETING as END_MEETING,
                            m.CREATED_AT as CREATED_AT,
                            m.UPDATED_AT as UPDATED_AT
                         
                            ');
        $this->db->from('agenda as m');
       // $this->db->join('detail_agenda as d', 'm.ID_MEETING=d.ID_MEETING');

        return $this->db->get();
    }

     function get_one_personel($id)
    {
        $this->db->select(' 
                            
                            a.NOPEG as NOPEG,
                            a.NAMA as NAMA,
                            d.PRESENT as PRESENT,
                            u.UNIT as UNIT,
                            u.DINAS as DINAS

                            ');
        $this->db->from('detail_agenda as d');
        $this->db->join('anggota as a','d.NOPEG=a.NOPEG');
        $this->db->join('unit as u','a.ID_UNIT=u.ID_UNIT');
        $this->db->where('ID_MEETING',$id);

        return $this->db->get();



    }
    
    function edit($data,$id)
    {
        $this->db->where('idPers',$id);
        $this->db->update('personel',$data);


    }

}