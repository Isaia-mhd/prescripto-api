<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    use HasFactory;
    protected $fillable = [
        "doctor_id",
        "user_id",
        "date",
        "time"
    ];

    public function user(){
        return $this->belongsTo(User::class, "user_id");
    }
    public function doctor(){
        return $this->belongsTo(Doctor::class, "doctor_id");
    }
}
