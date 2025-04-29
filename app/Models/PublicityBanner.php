<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PublicityBanner extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'publicity_banners';
     public $fillable = [
        'image'
    ]; 
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


}
