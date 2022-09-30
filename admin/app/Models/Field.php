<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $fillable = ['fld_name', 'fld_status'];

    protected $table = 'field';
    protected $primaryKey = 'fld_id';
    public $timestamps = false;
}
