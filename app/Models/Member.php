<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table='members';
    protected $fillable=[
        'name',
            'surname',
            'initials',
            'dob',
            'natId',
            'email',
            'phone',
            'sex',
            'ailments',
            'address',
             'photo',
             'product_id',
             'employeeNo',

    ];

    public function dependends(){

        return $this->hasMany(Dependend::class);

    }

    public function account()
    {
        return $this->hasOne(Account::class);
     
    }
}
