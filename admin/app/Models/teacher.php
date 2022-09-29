<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['tchr_name', 'tchr_email', 'tchr_phone', 'tchr_password', 'status'];

    protected $table = 'teacher';
    protected $primaryKey = 'tchr_id';
    public $timestamps = false;
}
