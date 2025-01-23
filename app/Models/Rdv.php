<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    use HasFactory;

    public $incrementing = false;
    // Set the keyType to 'string' because the UUID is a string type
    protected $keyType = 'string';
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
