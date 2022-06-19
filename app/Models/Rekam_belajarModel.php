<?php

namespace App\Models;

use CodeIgniter\Model;

class Rekam_belajarModel extends Model
{
    protected $table = "rekam_belajar";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["user_id", "materi_id"];
}
