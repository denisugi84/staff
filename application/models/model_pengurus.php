<?php
class Model_pengurus extends CI_Model{
    
    
    function tampildatadpp()
    {
        $this->db->select('*');
        $this->db->from('pengurus');
        $this->db->join('anggota','pengurus.NOPEG=anggota.NOPEG');
        $this->db->join('jabatan','pengurus.KODE_JABATAN=jabatan.KODE_JABATAN');
        $this->db->join('unit','anggota.ID_UNIT=unit.ID_UNIT');
        $this->db->where('LEVEL','DPP');
        $this->db->order_by('unit.DINAS','ASC');
        $this->db->order_by('unit.UNIT','ASC');

        return $this->db->get();
    }

    function tampildatadpd()
    {
        $this->db->select('*');
        $this->db->from('pengurus');
        $this->db->join('anggota','pengurus.NOPEG=anggota.NOPEG');
        $this->db->join('jabatan','pengurus.KODE_JABATAN=jabatan.KODE_JABATAN');
        $this->db->join('unit','anggota.ID_UNIT=unit.ID_UNIT');
        $this->db->where('LEVEL','DPD');
        $this->db->order_by('unit.DINAS','ASC');
        $this->db->order_by('unit.UNIT','ASC');

        return $this->db->get();
    }

    function tampildatadpc()
    {
        $this->db->select('*');
        $this->db->from('pengurus');
        $this->db->join('anggota','pengurus.NOPEG=anggota.NOPEG');
        $this->db->join('jabatan','pengurus.KODE_JABATAN=jabatan.KODE_JABATAN');
        $this->db->join('unit','anggota.ID_UNIT=unit.ID_UNIT');
        $this->db->where('LEVEL','DPC');
        $this->db->order_by('unit.DINAS','ASC');
        $this->db->order_by('unit.UNIT','ASC');

        return $this->db->get();
    }
    
    
    function listanggota()
    {   
        $this->db->select('*');
        $this->db->from('anggota');
        $this->db->join('unit','unit.ID_UNIT=anggota.ID_UNIT');
        $this->db->join('pengurus','pengurus.NOPEG=anggota.NOPEG','left');
        $this->db->where('STATUS','1');
        $this->db->order_by('anggota.NOPEG','ASC');
        return $this->db->get();
    }

     function listjabatan()
    {
        $this->db->select('*');
        $this->db->from('pengurus');
        $this->db->join('jabatan','jabatan.KODE_JABATAN=pengurus.KODE_JABATAN','right');
        $this->db->order_by('NAMA_JABATAN','ASC');
        return $this->db->get();
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