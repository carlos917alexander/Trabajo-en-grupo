<?php

namespace App\Models;
use CodeIgniter\Model;

class Mascota extends Model
{
    protected $table = "MASCOTA";
    protected $primaryKey = "ID_MASCOTA";
    protected $allowedFields = [
        "PROPETARIO",
        "MASCOTA",
        "RAZA",
        "CARNET_VACUNA"
    ];
}