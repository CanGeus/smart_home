<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelStatus extends Model
{
    protected $table      = 'status';
    protected $primaryKey = 'id';

    protected $allowedFields = ['kondisi', 'date'];
}
