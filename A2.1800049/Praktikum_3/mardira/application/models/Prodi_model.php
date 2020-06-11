<?php

class Prodi_model extends CI_model
{
    function lihat_data()
    {
        return $this->db->get('prodi')->result();
    }
}