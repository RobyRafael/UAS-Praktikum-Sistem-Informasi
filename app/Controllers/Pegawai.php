<?php
namespace App\Controllers;

use App\Models\PegawaiModel;

class Pegawai extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new PegawaiModel();
    }

    public function index()
    {
        $data['pegawai'] = $this->model->findAll();
        
        echo view('admin_header');
        echo view('admin_nav');
        echo view('pegawai/index', $data);
        echo view('admin_footer');
    }

    public function create()
    {
        echo view('admin_header');
        echo view('admin_nav');
        echo view('pegawai/create');
        echo view('admin_footer');
    }

    public function store()
    {
        $this->model->save([
            'nama_karyawan' => $this->request->getPost('nama_karyawan'),
        ]);

        return redirect()->to('/pegawai');
    }

    public function edit($id)
    {
        $data['pegawai'] = $this->model->find($id);

        echo view('admin_header');
        echo view('admin_nav');
        echo view('pegawai/edit', $data);
        echo view('admin_footer');
    }

    public function update($id)
    {
        $this->model->update($id, [
            'nama_karyawan' => $this->request->getPost('nama_karyawan'),
        ]);

        return redirect()->to('/pegawai');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return redirect()->to('/pegawai');
    }
}
?> 