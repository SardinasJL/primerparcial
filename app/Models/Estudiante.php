<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = "estudiantes";
    protected $primaryKey = "id";
    protected $guarded = ["id"];

    public function relCarrera()
    {
        return $this->belongsTo(Carrera::class, "carreras_id", "id");
    }
}
