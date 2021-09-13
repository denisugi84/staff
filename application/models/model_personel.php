<?php
class model_personel extends CI_Model{
    
    
    function viewdata()
    {

        $this->db->select(' 
                            a.NOPEG as NOPEG,
                            a.NAMA as NAMA,
                            a.NO_ANGGOTA as NO_ANGGOTA,
                            a.KPK as KPK,
                            a.KOPERASI as KOPERASI,
                            a.EMAIL as EMAIL,
                            j.NAMA_JABATAN as JABATAN,
                            u.UNIT as UNIT,
                            u.DINAS as DINAS

                            ');
        $this->db->from('pengurus as p');
        $this->db->join('jabatan as j', 'p.KODE_JABATAN=j.KODE_JABATAN');
        $this->db->join('anggota as a','p.NOPEG=a.NOPEG','right');
        $this->db->join('unit as u','a.ID_UNIT=u.ID_UNIT');
        $this->db->where('STATUS','1');
        $this->db->order_by('NO_ANGGOTA','DESC');

        return $this->db->get();
    }
    
    function post($data)
    {
        $this->db->insert('personel',$data);
    }

     function get_one($id)
    {
        $param  =   array('idPers'=>$id);
        return $this->db->get_where('personel',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('idPers',$id);
        $this->db->update('personel',$data);
    }

}