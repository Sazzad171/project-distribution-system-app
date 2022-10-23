<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;

    protected $table = 'semester';
    protected $primaryKey = 'sem_id';
    public $timestamps = false;

    // relationship with timeline
    public function timeline() {
        return $this->belongsTo(Semester::class);
    }
}