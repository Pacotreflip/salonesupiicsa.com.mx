<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model {
    protected $table = 'materias';
    protected $primaryKey = 'id_materia';
    public $timestamps = false;
}