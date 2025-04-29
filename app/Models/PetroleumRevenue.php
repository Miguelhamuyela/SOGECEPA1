<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetroleumRevenue extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
}
