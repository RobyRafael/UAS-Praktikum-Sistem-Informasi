<?php
namespace App\Controllers;

use App\Models\DataKriteriaModel;

class DataKriteria extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new DataKriteriaModel();
    }

    public function index()
    {
        $data['kriteria'] = $this->model->findAll();
        echo view('admin_header');
        echo view('admin_nav');
        echo view('data_kriteria/index', $data);
        echo view('admin_footer');
    }

    public function create()
    {
        echo view('admin_header');
        echo view('admin_nav');
        echo view('data_kriteria/create');
        echo view('admin_footer');
    }

    public function store()
    {
        $this->model->save([
            'kode_kriteria' => $this->request->getPost('kode_kriteria'),
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'nilai_kriteria' => $this->request->getPost('nilai_kriteria'),
            'tipe_kriteria' => $this->request->getPost('tipe_kriteria'),
        ]);

        return redirect()->to('/data-kriteria');
    }

    public function edit($id)
    {
        $data['kriteria'] = $this->model->find($id);
        echo view('admin_header');
        echo view('admin_nav');
        echo view('data_kriteria/edit', $data);
        echo view('admin_footer');
    }

    public function update($id)
    {
        $this->model->update($id, [
            'kode_kriteria' => $this->request->getPost('kode_kriteria'),
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'nilai_kriteria' => $this->request->getPost('nilai_kriteria'),
            'tipe_kriteria' => $this->request->getPost('tipe_kriteria'),
        ]);

        return redirect()->to('/data-kriteria');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return redirect()->to('/data-kriteria');
    }
}
?>