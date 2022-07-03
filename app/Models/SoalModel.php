<?php

namespace App\Models;

use CodeIgniter\Model;

class SoalModel extends Model
{
    protected $table = "soal";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["deskripsi", "link_soal", "jawaban", "link_jawaban", "kunci_jawaban", "materi_id"];
}
