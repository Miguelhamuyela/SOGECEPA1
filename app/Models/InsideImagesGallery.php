<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InsideImagesGallery extends Model
{
    use HasFactory, SoftDeletes;


    protected $table = 'inside_images_galleries';
     public $fillable = [
        'path',
        'title',
        'description',
        'fk_idInsideGallery'
    ];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];




}
