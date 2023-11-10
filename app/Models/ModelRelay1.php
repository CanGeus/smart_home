<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRelay1 extends Model
{
    protected $table      = 'relay1';
    protected $primaryKey = 'id';

    protected $allowedFields = ['kondisi', 'date'];
}
