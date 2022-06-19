<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriModel extends Model
{
    protected $table = "materi";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["judul", "deskripsi", "link", "bab_id"];
}
