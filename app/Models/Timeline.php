<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    use HasFactory;

    protected $table = 'timeline';
    protected $primaryKey = 'tl_id';
    public $timestamps = false;

    // relationship with semester
    public function semester() {
        return $this->hasOne(Semester::class, 'sem_id', 'fk_sem_id');
    }
}
