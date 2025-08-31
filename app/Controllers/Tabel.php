<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Mahasiswa;

class Tabel extends BaseController
{
    public function view()
    {
    $kopomacet=new Mahasiswa;
    $mahasiswa['getMahasiswa']=$kopomacet ->getMahasiswa();
    echo view('katapangmacet', $mahasiswa);
    }

    public function detail($id)
    {
    $kopomacet=new Mahasiswa;
    $mahasiswa['mahasiswa']=$kopomacet ->find($id);
    echo view('displaytugas', $mahasiswa);
    }

    public function tambah()
    {
    echo view('tambah');
    }

    public function add()
    {
    $kopomacet=new Mahasiswa;
        $data=[
        'nim'=>$this->request->getPost('nim'),
        'nama'=>$this->request->getPost('nama'),
        'umur'=>$this->request->getPost('umur')
        ];
    $kopomacet->insert($data);
    return redirect()->to(base_url('mahasiswa'));
    }

    public function update()
    {
    $kopomacet=new Mahasiswa;
    $id=$this->request->getPost('id');
    $data=array(
        'nim'=>$this->request->getPost('nim'),
        'nama'=>$this->request->getPost('nama'),
        'umur'=>$this->request->getPost('umur')
    );
    $kopomacet->editMahasiswa($data,$id);
    return redirect()->to(base_url('mahasiswa'));
    }

    public function edit($id)
    {
    $model = new Mahasiswa;
        $getMahasiswa = $model->find($id);
        if(isset($getMahasiswa))
        {
            $data['mahasiswa'] = $getMahasiswa;
            // $data['title']  = 'Edit '.$getMahasiswa->nama;
            echo view('edit', $data);
        }else{
        return redirect()->to(base_url('mahasiswa'))->with('error', "ID Mahasiswa {$id} Tidak Ditemukan");
    };
 }

     public function hapus($id)
    {
    $model = new Mahasiswa;
        $getMahasiswa = $model->find($id);
        if(isset($getMahasiswa))
        {
        $model->delete ($id);
            return redirect()->to(base_url('mahasiswa'))->with('error', "ID Mahasiswa {$id} Tidak Ditemukan");
        }else{
            return redirect()->to(base_url('mahasiswa'))->with('error', "ID Mahasiswa {$id} Tidak Ditemukan");
    };
 }
}
