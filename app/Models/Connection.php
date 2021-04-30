<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    use HasFactory;

    protected $fillable = [
        'uid1',
        'uid2',
        'status'
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User','id');
    }
}
