<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredFields extends Model
{
    use HasFactory;

    protected $table = 'registered_fields';
    protected $primaryKey = 'reg_fld_id';
    public $timestamps = false;
}
