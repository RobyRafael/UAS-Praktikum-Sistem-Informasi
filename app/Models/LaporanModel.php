<?php
namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function getDaftarKriteria()
    {
        return $this->db->query("SELECT * FROM daftar_kriteria")->getResult();
    }

    public function getDaftarPegawai()
    {
        return $this->db->query("SELECT * FROM daftar_pegawai")->getResult();
    }
    
    public function getBobotNormalisasi()
    {
        return $this->db->query("SELECT * FROM normalisasi_bobot")->getResult();
    }

    public function getVektorS()
    {
        return $this->db->query("SELECT * FROM vektor_s")->getResult();
    }

    public function getNilaiV()
    {
        return $this->db->query("SELECT * FROM nilai_v")->getResult();
    }

    public function getRankingPegawai()
    {
        return $this->db->query("SELECT * FROM ranking_pegawai")->getResult();
    }

}
?>