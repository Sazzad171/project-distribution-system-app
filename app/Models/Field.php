<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $table = 'field';
    protected $primaryKey = 'fld_id';
    public $timestamps = false;

    // relationship with registered_fields
    public function registeredFields() {
        return $this->hasMany(registeredFields::class, 'fk_fld_id', 'fld_id');
    }
}
