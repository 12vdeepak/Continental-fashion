<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'street',
        'zip_code',
        'city',
        'country',
        'phone_number',
        'gender',
        'first_name',
        'last_name',
        'supervisory',
        'email',
        'password',
        'vat_id_number',
        'business_registration_file',
        'note',
        'terms_accepted',
    ];
}
