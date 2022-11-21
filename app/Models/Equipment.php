<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'model',
        'serie_number',
        'manufacturer',
        'ufsm_code',
        'laboratory_code',
        'ncm_code',
        'locker',
        'type',
        'manual_link',
        'resources',
        'additional_information',
        'observation',
        'useful_links',
        'image',
        'active'
    ];

    protected $casts = [
        'useful_links' => 'array'
    ];

    public function bookings()
    {
        return $this->belongsToMany(Booking::class, 'booking_equipment', 'equipment_id', 'booking_id');
    }
}
