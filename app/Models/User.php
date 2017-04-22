<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password', 'created_at', 'updated_at'
    ];

    public function roles() {
        return $this->belongsToMany(Role::class);
    }
}
