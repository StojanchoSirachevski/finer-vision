<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'dob',
        'phone_number',
        'gender',
        'comments'
    ];

    public function getDobAttribute()
    {
        return Carbon::parse($this->attributes['dob'])->format('d/m/Y');
    }

    public function setDobAttribute($value)
    {
        $this->attributes['dob'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    }
}
