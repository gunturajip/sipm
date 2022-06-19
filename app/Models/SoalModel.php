<?php

namespace App\Models;

use CodeIgniter\Model;

class SoalModel extends Model
{
    protected $table = "soal";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["deskripsi", "jawaban", "link", "materi_id"];
}
