<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentProjects extends Model
{
    use HasFactory;

    protected $fillable = ['std_proj_name', 'fk_std_id', 'fk_teacher_id', '	fk_sem_id', 'public_project', 'status'];

    protected $table = 'std_project';
    protected $primaryKey = 'std_proj_id';
    public $timestamps = false;


    // relationship with teacher(one)
    public function teacher() {
        return $this->hasOne(Teacher::class, 'tchr_id', 'fk_teacher_id');
    }

    // relationship with semester(one)
    public function semester() {
        return $this->hasOne(Semester::class, 'sem_id', 'fk_sem_id');
    }
}
