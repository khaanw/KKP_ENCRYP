<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class tests extends Model
{
    public function setCardNoAttribute($value)
    {
        $this->attributes['card_no'] = Crypt::encryptString($value);
    }

    public function setExpMonthAttribute($value)
    {
        $this->attributes['exp_month'] = Crypt::encryptString($value);
    }

    public function setExpYearAttribute($value)
    {
        $this->attributes['exp_year'] = Crypt::encryptString($value);
    }

    public function setCvvAttribute($value)
    {
        $this->attributes['cvv'] = Crypt::encryptString($value);
    }
}
