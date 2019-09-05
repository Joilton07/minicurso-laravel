<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    //

    protected $fillable = [
        "numero", 
        "user_id",
    ];

    public function User (){
        return $this->belongsTo(User::class, "user_id", "id");
    }
}
