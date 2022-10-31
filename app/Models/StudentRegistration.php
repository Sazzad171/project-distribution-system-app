<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRegistration extends Model
{
    use HasFactory;

    protected $fillable = ['field1', 'field2', 'field3', 'field4', 'field5', 'field6', 
        'field7', 'field8', 'field9', 'field10', 'field11', 'field12', 'field13', 'field14', 'field15', 
        'fk_std_id', 'fk_tl_id', 'fk_sem_id', 'std_reg_status'];

    protected $table = 'std_registration';
    protected $primaryKey = 'std_reg_id';
    public $timestamps = false;
}
