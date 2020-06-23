<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    // USE DATABASE TABLE
    protected $table = 'contracts';

    // FILL COLUMNS
    protected $fillable =
        [
            'contract_number',
            'place',
            'date',
            'seller_full_name',
            'seller_place_of_residence',
            'seller_date_of_birth',
            'seller_phone_number',
            'buyer_full_name',
            'buyer_company_name',
            'buyer_personal_code',
            'buyer_place_of_residence',
            'buyer_phone_number',
            'plot_goal',
            'cadastral_number',
            'address',
            'plot_area',
            'sum',
            'bank_name',
            'invoice_number',
            'fine_sum',
        ];
}
