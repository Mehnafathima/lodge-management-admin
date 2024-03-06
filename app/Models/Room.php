<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = 'manage_room';

    protected $primaryKey = 'RM_Id';

    protected $fillable = [
        'RM_Name',
        'RM_Status',
    ];

}
