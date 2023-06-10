<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promoter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
