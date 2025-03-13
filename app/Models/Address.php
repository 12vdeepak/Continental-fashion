<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'company_name',
        'street',
        'zip_code',
        'city',
        'country',
        'phone_number',
    ];

    public function user()
    {
        return $this->belongsTo(CompanyRegistration::class, 'user_id');
    }
}
