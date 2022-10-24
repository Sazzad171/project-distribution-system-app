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

    // relationship with field
    public function field() {
        return $this->hasOne(Field::class, 'fld_id', 'fk_fld_id');
    }

    // relationship with timeline
    public function timeline() {
        return $this->hasOne(Timeline::class, 'tl_id', 'fk_timeline_id');
    }
}
