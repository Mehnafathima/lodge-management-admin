<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'manage_booking';

    protected $primaryKey = 'BK_Id';

    protected $fillable = [
        'CS_Id',
        'RM_Id',
        'NO_Of_Person',
        'NO_Of_Day',
        'BK_Date',
        'BK_Time',
        'Rent',
        'Advance',
        'Advance_mode',
        'Chk_Date',
        'Chk_Time',
    ];

    // Relationships
    public function customer()
    {
        return $this->belongsTo(ManageCustomer::class, 'CS_Id', 'CS_Id');
    }

    public function room()
    {
        return $this->belongsTo(ManageRoom::class, 'RM_Id', 'RM_Id');
    }

    // Additional model logic or relationships can be defined here
}
