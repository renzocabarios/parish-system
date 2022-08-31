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

    public function baptism(){
        return $this->hasMany(Baptism::class);
    }

    public function confirmation(){
        return $this->hasMany(Confirmation::class);
    }

    public function marriage(){
        return $this->hasMany(Marriages::class);
    }
}
