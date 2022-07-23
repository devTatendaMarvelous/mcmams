<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DependendAccount extends Model
{
    use HasFactory;

     protected $table='dependend_accounts';
    protected $fillable=[

       
            'member_id',
             'dependend_id',
            'suffix',
            'balance',
            'claimed',
            'status',
            'memberno',
    ];
}
