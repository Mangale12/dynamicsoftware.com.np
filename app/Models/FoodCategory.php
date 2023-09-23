<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class FoodCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug'];
    public function category(){
        return $this->belongsTo(Food::class);
    }
}
