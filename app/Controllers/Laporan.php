<?php
namespace App\Controllers;

use App\Models\LaporanModel;

class Laporan extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new LaporanModel();
    }

    public function daftarKriteria()
    {
        $data['kriteria'] = $this->model->getDaftarKriteria();
        echo View('admin_header');
        echo View('admin_nav');
        echo View ('laporan/daftar_kriteria',$data); 
        echo View('admin_footer');
    }

    public function daftarPegawai()
    {
        $data['pegawai'] = $this->model->getDaftarPegawai();
        echo View('admin_header');
        echo View('admin_nav');
        echo View ('laporan/daftar_pegawai',$data);
        echo View('admin_footer');
    }

    public function bobotNormalisasi()
    {
        $data['bobot_normalisasi'] = $this->model->getBobotNormalisasi();
        echo View('admin_header');
        echo View('admin_nav');
        echo View ('laporan/bobot_normalisasi',$data);
        echo View('admin_footer');
    }

    public function vektorS()
    {
        $data['vektor_s'] = $this->model->getVektorS();
        echo View('admin_header');
        echo View('admin_nav');
        echo View ('laporan/vektor_s',$data);
        echo View('admin_footer');
    }

    public function nilaiV()
    {
        $data['nilai_v'] = $this->model->getNilaiV();
        echo View('admin_header');
        echo View('admin_nav');
        echo View ('laporan/nilai_v',$data);
        echo View('admin_footer');
    }

    public function rankingPegawai()
    {
        $data['ranking'] = $this->model->getRankingPegawai();
        echo View('admin_header');
        echo View('admin_nav');
        echo View ('laporan/ranking_pegawai',$data);
        echo View('admin_footer');
    }
}
?>