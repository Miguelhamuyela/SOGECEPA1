<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Angosat extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'angosats';
    public $fillable = [
       'body'
   ];
   /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
   protected $dates = ['deleted_at'];

}
