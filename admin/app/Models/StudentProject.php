<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentProject extends Model
{
    use HasFactory;

    protected $fillable = ['std_proj_name', 'fk_std_id', 'fk_teacher_id', 'status'];

    protected $table = 'std_project';
    protected $primaryKey = 'std_proj_id';
    public $timestamps = false;
}
