<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marriages extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_ids',
        'priest_id',
        'husband_residence',
        'wife_residence',
        'place_of_marriage',
        'date_time_marriage',
        'marriage_license',
        'issued_date',
    ];

    public function priest(){
        return $this->belongsTo(Priest::class);
    }
}
