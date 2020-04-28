<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Tenant extends Model
{
    protected $fillable = ['subdomain', 'name'];

    public function users() {
        return $this->hasMany(User::class);
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }
}
