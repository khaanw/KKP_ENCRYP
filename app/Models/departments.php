<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class departments extends Model
{
    // use HasFactory;
    // // protected $table='departments';
    // protected $primaryKey='idDepartment';
    // // protected $guarded=[];

    public function setnamaDepartment($value){
        $this->attributes['namaDepartment']=Crypt::encryptString($value);
    }
}
