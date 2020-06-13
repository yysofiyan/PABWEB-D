<?php

class Prodi_model extends CI_Model
{
    public function lihat_data()
    {
        return $this->db->get('prodi')->result();
    }

    public function insert_data($data)
    {
        return $this->db->insert('prodi', $data);
    }

    public function get_row($id)
    {
        return $this->db->where('id_prodi', $id)->get('prodi');
    }

    public function update_data($id, $data)
    {
        return $this->db->where('id_prodi', $id)->update('prodi', $data);
    }

    public function delete_data($id)
    {
        return $this->db->where('id_prodi', $id)->delete('prodi');
    }

}
