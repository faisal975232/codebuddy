<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subcategories;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function subcategories(){
       return $this->hasMany(Subcategories::class);
    }
}
