<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;
use App\User;

class Tenant extends Model
{
    protected $fillable = ['subdomain', 'name'];

    public static function boot() {
        parent::boot();
        self::creating(function($model) {
            $model->uuid = Uuid::generate();
        });
    }

    public function users() {
        return $this->hasMany(User::class);
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }
}
