<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRelay2 extends Model
{
    protected $table      = 'relay2';
    protected $primaryKey = 'id';

    protected $allowedFields = ['kondisi', 'date'];
}
