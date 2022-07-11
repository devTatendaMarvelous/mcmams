<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table='accounts';
    protected $fillable=[

       
            'member_id',
            'suffix',
            'balance',
            'claimed',
            'status',
            'memberno',
    ];

     public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function members(){
        return $this->belongsTo(Member::class);
    }
    public function dependends()
    {
        return $this->belongsTo(Dependend::class);
    }


}
