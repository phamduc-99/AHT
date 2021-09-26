<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OderDetail extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function order(){
        return $this->belongsTo(Oder::class,'order_id');
    }
}
