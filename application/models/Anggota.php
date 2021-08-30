<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Model {
    public function getDataAnggota(){
        $this->db->select('*');
        $this->db->from('anggota');
        $query = $this->db->get();
        return $query->result();
    }
    public function insertDataAnggota($data){
        $this->db->insert('anggota', $data);
    }
    public function editDataAnggota($data, $id){
        $this->db->where('nip', $id);
        $this->db->update('anggota', $data);
    }
    public function getDataAnggotaDetail($id){
        $this->db->where('nip', $id);
        $query = $this->db->get('anggota');
        return $query->row();
    }
    public function deleteData($id){
        $this->db->where('nip', $id);
        $this->db->delete('anggota');
    }
}

?>