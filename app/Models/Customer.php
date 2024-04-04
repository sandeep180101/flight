<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customers";
    protected $fillable = [
        'name',
        'email',
        'age',
        'dob',
        'address',
        'id_proof_number',
    ];

    protected $dates = [
        'dob',
    ];
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
