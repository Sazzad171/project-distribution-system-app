<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['std_name', 'std_varsity_id', 'std_email', 'std_phone', 'password', 'fk_std_project', 'fk_std_registration', 'std_status', 'fk_teacher_id'];

    protected $table = 'student';
    protected $primaryKey = 'std_id';
    public $timestamps = false;

    // relationship with studentRegistration
    // public function studentRegistration() {
    //     return $this->hasOne(StudentRegistration::class, 'std_reg_id', 'fk_std_registration');
    // }

    // relationship with student_project
    public function studentProject() {
        return $this->hasOne(StudentProjects::class, 'std_proj_id', 'fk_std_project');
    }
}
