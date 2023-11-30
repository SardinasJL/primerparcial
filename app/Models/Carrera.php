<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;

    protected $table = "carreras";
    protected $primaryKey = "id";
    protected $guarded = ["id"];

    public function relEstudiantes()
    {
        return $this->hasMany(Estudiante::class, "carreras_id", "id");
    }
}
