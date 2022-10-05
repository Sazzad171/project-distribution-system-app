<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    use HasFactory;

    protected $fillable = ['tl_start', 'tl_end', 'fk_sem_id', 'tl_status'];

    protected $table = 'timeline';
    protected $primaryKey = 'tl_id';
    public $timestamps = false;

    // relationship with semester
    public function semester() {
        return $this->hasOne(Semester::class, 'sem_id', 'fk_sem_id');
    }
}
