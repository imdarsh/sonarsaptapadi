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

    public function friend() {
        return $this->hasOne(User::class, 'uid2', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getUser() {
        return $this->user();
    }
}
