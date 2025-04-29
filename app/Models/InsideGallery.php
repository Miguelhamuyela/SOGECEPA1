<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InsideGallery extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'inside_galleries';
    public $fillable = [
       'category',
       'cover',
       'fk_idGallery'
   ];
   /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
   protected $dates = ['deleted_at'];

   public function images(){

    return $this->hasMany(InsideImagesGallery::class, 'fk_idInsideGallery');
}

}
