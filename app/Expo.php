<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expo extends Model
{/**
 * The attributes that are mass assignable.
 *
 * @var array
 */

    protected $table = "expos";

    protected $fillable = ['name'];

    public function picture() {
        return $this->belongsTo('App\ExpoPicture');
    }
}
