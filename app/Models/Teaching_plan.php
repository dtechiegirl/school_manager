<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teaching_plan extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];
    
    public function getuser(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
    public function getsubject(){
        return $this->belongsTo(Subject::class, 'subject_id', 'subject_id');
    }

}
