<?php

namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa extends Model
{
    protected $table      = 'mahasiswa';
    protected $returntype = 'array';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nim', 'nama', 'umur']; 

    public function getMahasiswa($id = false)
    {
        return ($id === false) ? $this->findAll() : $this->find($id);
    }

    public function saveMahasiswa($mahasiswa)
    {
        $input=$this->db->table($this->table);
        return $input->insert($mahasiswa);
    }

    public function editMahasiswa($data,$id)
    {
        $edit=$this->db->table($this->table);
        $edit->where('id',$id);
        return $edit->update($data);
    }
}

