<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Confirmation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_ids',
        'priest_id',
        'baptism_id',
        'church',
        'church_address',
        'confirmed_date',
        'sponsors',
        'dated',
        'series_of',
        'number',
        'page'
    ];

    public function priest(){
        return $this->belongsTo(Priest::class);
    }

    public function baptism(){
        return $this->belongsTo(Baptism::class);
    }
}
