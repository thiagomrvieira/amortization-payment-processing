<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'amortization_id',
        'amount',
        'state',
        'profile_id',
    ];

    public function amortizations()
    {
        return $this->hasMany(Amortization::class);
    }

    public function promoter()
    {
        return $this->belongsTo(Promoter::class);
    }
}
