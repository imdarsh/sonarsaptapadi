<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    use HasFactory;

    protected $fillable = [
        'party1',
        'party2',
        'match'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
