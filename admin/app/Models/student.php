<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable = ['std_name', 'std_email', 'std_phone', 'password'];

    protected $table = 'student';
    protected $primaryKey = 'std_id';
    public $timestamps = false;
}
