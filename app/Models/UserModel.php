<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["nama", "email", "password", "tanggal_lahir", "jenis_kelamin", "foto_profil"];
}
