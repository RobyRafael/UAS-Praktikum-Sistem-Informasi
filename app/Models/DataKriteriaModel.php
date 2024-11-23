<?php
namespace App\Models;

use CodeIgniter\Model;

class DataKriteriaModel extends Model
{
    protected $table = 'data_kriteria';
    protected $primaryKey = 'id_kriteria';
    protected $allowedFields = ['kode_kriteria', 'nama_kriteria', 'nilai_kriteria', 'tipe_kriteria'];
}
?>