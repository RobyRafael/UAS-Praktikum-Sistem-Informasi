<?php
namespace App\Models;

use CodeIgniter\Model;

class KonversiPenilaianModel extends Model
{
    protected $table = 'konversi_penilaian';
    protected $primaryKey = 'id_konversi';
    protected $allowedFields = ['id_pegawai', 'kode_kriteria', 'nilai_kriteria'];
}
?>