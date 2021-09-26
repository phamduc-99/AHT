<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Oder extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function orderdetail(){
        return $this->HasMany(OderDetail::class,'order_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
