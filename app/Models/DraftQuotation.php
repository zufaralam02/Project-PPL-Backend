<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DraftQuotation extends Model
{
    use HasFactory;

    protected $table = 'draft_quotation';

    protected $fillable = [
        'user_id',
        'customer_id',
        'integrate_id',
        'aircraft_available_id',
        'flight_type',
        'departure_date',
        'return_date',
        'flight_route',
        'pax',
    ];

    /*
    |--------------------------------------------------------------------------
    | RELATION (optional, tapi bagus buat nanti)
    |--------------------------------------------------------------------------
    */

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
