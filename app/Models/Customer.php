<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'manage_customer';

    protected $primaryKey = 'CS_Id';

    protected $fillable = [
        'CS_Name',
        'CS_ID_Type',
        'CS_ID_No',
        'CS_Phone',
        'CS_Country',
        'CS_Status',
        'CS_Address',
    ];

}
