<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['msg_text', 'fk_stdnt_id', 'fk_teacher_id', 'status'];

    protected $table = 'message';
    protected $primaryKey = 'msg_id';
    public $timestamps = true;

    // protected $dates = ['expired_at'];
}
