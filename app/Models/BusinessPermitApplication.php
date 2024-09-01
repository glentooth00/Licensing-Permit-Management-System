<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessPermitApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_application',
        'classification_cottage',
        'amendment',
        'date_of_application',
        'DTI_SEC_CDA_registration_No',
        'date_business_started',
        'DTI_SEC_CDA_date_of_Registration',
        'type_of_org',
        'ctc_no',
        'TIN',
        'last_name',
        'first_name',
        'middle_name',
        'business_name',
        'trade_name_franchise',
        'business_building_name',
        'owners_building_name',
        'business_street',
        'owners_street',
        'business_barangay',
        'owners_barangay',
        'business_city_municipality',
        'owners_city_municipality',
        'business_province',
        'owners_province',
        'business_Tel_No_Mobile',
        'owners_Tel_No_Mobile',
        'mode_of_payment',
        'transfer',
        'status',
        'business_type'
        // Add more fields as needed
    ];
}
