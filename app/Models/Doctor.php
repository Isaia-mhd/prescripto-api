<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public $incrementing = false;
    // Set the keyType to 'string' because the UUID is a string type
    protected $keyType = 'string';
    protected $guarded = [
        "id",
        "created_at",
        "updated_at",
    ];

    public function specialties(){
        $this->belongsTo(Specialty::class);
    }

    public function rdv(){
        $this->hasMany(Rdv::class);
    }
}
