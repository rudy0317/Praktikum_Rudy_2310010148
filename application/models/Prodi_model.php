<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi_model extends CI_Model
{
    public function lihatData()
    {
        return $this->db->get('prodi')->result();
    }

    public function metodeResult()
    {
        $query = $this->db->get('prodi');
        return $query->result();
    }
    public function metodeRow()
    {
        $query = $this->db->where('id_prodi',1);
        $query = $this->db->get('prodi');
        return $query->row();
    }

    public function metodeResultArray()
    {
        $query = $this->db->get('prodi');
        return $query->result_array();
    }

    public function metodeRowArray()
    {
        $query = $this->db->where('id_prodi',1);
        $query = $this->db->get('prodi');
        return $query->row_array();
    }

    public function simpan($data)
    {
        return $this->db->insert('prodi', $data);
    }

    public function getById($id)
    {
        $query = $this->db->get_where('prodi', ['id_prodi' => $id]);
        return $query->row();
    }

    public function perbaharui($id, $data)
    {
        return $this->db->update('prodi', $data, ['id_prodi' => $id]);
    }

    public function hapus($id)
    {
        return $this->db->delete('prodi', ['id_prodi' => $id]);
    }

}