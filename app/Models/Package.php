<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'package_name',
        'description',
        'sharing',
        'quint',
        'quad',
        'triple',
        'double',
        'single',
        'months',
        'wednesday_dates',
        'note',
        'includes',
        'photo_path',
    ] ;

    protected $casts = [
        'wednesday_dates'=> 'array',
    ];

  /**
     * Set the months attribute as a comma-separated string.
     *
     * @param  array  $value
     * @return void
     */

     public function setMothsAttribute($value){
        $this->attributes['months'] = implode(',', $value);
     }

      /**
     * Get the months attribute as an array.
     *
     * @param  string  $value
     * @return array
     */

     public function getMothsAttribute($value){
        return explode(',', $value);
     }

       /**
     * Store the photo file and return the path.
     *
     * @param  \Illuminate\Http\UploadedFile  $photo
     * @return string
     */

     public static function storePhoto($photo){
        return $photo->store('package_photos','public');
     }
}
