<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    //
    protected $table ='tema';
    protected $fillable = ['temanev'];

   /*public function szavak(){
        return $this ->hashMany(Szavak::class,'temaId');
    }*/
}
