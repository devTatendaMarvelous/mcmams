<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependend extends Model
{
    use HasFactory;
    protected $table="dependends";
    public function member(){
        return $this->belongsTo(Member::class);
        
    }
}
