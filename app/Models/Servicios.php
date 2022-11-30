<?php

namespace App\Models;
use CodeIgniter\Model;

class Servicios extends Model
{
    protected $table = "SERVICIOS";
    protected $primaryKey = "ID_SERVICIOS";
    protected $allowedFields = [
        "PROPETARIO",
        "VACUNAS",
        "PELUQUERIA",
        "DESPARACITACION",
        "CASTRACION",
        "OPERACION",
        "HOSPITALIZACION"
    ];
}