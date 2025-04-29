<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EnergieAndWater extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'energie_and_waters';
    public $fillable = [
        'body'
    ];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
}
