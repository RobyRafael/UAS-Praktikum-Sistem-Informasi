<?php
namespace App\Controllers;

use App\Models\KonversiPenilaianModel;
use App\Models\PegawaiModel;
use App\Models\DataKriteriaModel;

class KonversiPenilaian extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new KonversiPenilaianModel();
    }

    public function index()
    {
        $data['konversi'] = $this->model
            ->select('konversi_penilaian.*, pegawai.nama_karyawan, data_kriteria.nama_kriteria')
            ->join('pegawai', 'pegawai.id_pegawai = konversi_penilaian.id_pegawai')
            ->join('data_kriteria', 'data_kriteria.kode_kriteria = konversi_penilaian.kode_kriteria')
            ->findAll();

            echo view('admin_header');
            echo view('admin_nav');
            echo view('konversi_penilaian/index', $data);
            echo view('admin_footer');
    }

    public function create()
    {
        $pegawaiModel = new PegawaiModel();
        $kriteriaModel = new DataKriteriaModel();

        $data['pegawai'] = $pegawaiModel->findAll();
        $data['kriteria'] = $kriteriaModel->findAll();

        echo view('admin_header');
        echo view('admin_nav');
        echo view('konversi_penilaian/create', $data);
        echo view('admin_footer');
    }

    public function store()
    {
        $this->model->save([
            'id_pegawai' => $this->request->getPost('id_pegawai'),
            'kode_kriteria' => $this->request->getPost('kode_kriteria'),
            'nilai_kriteria' => $this->request->getPost('nilai_kriteria'),
        ]);

        return redirect()->to('/konversi-penilaian');
    }

    public function edit($id)
    {
        $pegawaiModel = new PegawaiModel();
        $kriteriaModel = new DataKriteriaModel();

        $data['pegawai'] = $pegawaiModel->findAll();
        $data['kriteria'] = $kriteriaModel->findAll();
        $data['konversi'] = $this->model->find($id);

        echo view('admin_header');
        echo view('admin_nav');
        echo view('konversi_penilaian/edit', $data);
        echo view('admin_footer');
    }

    public function update($id)
    {
        $this->model->update($id, [
            'id_pegawai' => $this->request->getPost('id_pegawai'),
            'kode_kriteria' => $this->request->getPost('kode_kriteria'),
            'nilai_kriteria' => $this->request->getPost('nilai_kriteria'),
        ]);

        return redirect()->to('/konversi-penilaian');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return redirect()->to('/konversi-penilaian');
    }
}
?>