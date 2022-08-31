<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Priest extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'title',
    ];

    public function baptisms(){
        return $this->hasMany(Baptism::class);
    }

    public function confirmations(){
        return $this->hasMany(Confirmation::class);
    }

    public function marriages(){
        return $this->hasMany(Marriages::class);
    }
}
