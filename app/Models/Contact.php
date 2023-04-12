<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor' , 'email' , 'nama' ,
        'id_group' , 'id_profesi'
    ];

    function profesi(){
        return $this->belongsTo(Profesi::class , 'id_profesi');
    }

    function group(){
        return $this->belongsTo(Group::class , 'id_group');
    }
}
