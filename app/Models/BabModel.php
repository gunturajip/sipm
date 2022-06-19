<?php

namespace App\Models;

use CodeIgniter\Model;

class BabModel extends Model
{
    protected $table = "bab";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["nama", "admin_id"];
}
