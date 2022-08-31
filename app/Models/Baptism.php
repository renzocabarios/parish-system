<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Baptism extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_ids',
        'priest_id',
        'date_baptised',
        'church',
        'church_address',
        'sponsors',
        'dated',
        'series_of',
        'number',
        'page',
        'purpose'
    ];

    public function priest(){
        return $this->belongsTo(Priest::class);
    }

    public function confirmation(){
        return $this->hasOne(Confirmation::class);
    }
}
