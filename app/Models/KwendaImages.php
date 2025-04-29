<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KwendaImages extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'kwenda_images';
     public $fillable = [
        'path',
        'fk_idKwenda'
    ];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
