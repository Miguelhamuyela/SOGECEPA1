<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MadeInAngola extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'made_in_angolas';
    public $fillable = ['image','body'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

}
