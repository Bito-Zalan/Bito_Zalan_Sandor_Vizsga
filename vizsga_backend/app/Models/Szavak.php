<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Szavak extends Model
{
    //
    protected $table = 'szavak';
    protected $fillable = ['angol','magyar','temaId'];

    /*public function tema(){
        return $this->belongsTo(Tema::class,'temaId');
    }*/
}
