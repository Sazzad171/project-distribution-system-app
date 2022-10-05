<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredFields extends Model
{
    use HasFactory;

    protected $fillable = ['fk_timeline_id', 'fk_fld_id'];
    protected $primaryKey = 'reg_fld_id';
    public $timestamps = false;
}
