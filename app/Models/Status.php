<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Status extends Model
{

    protected $table = 'statuses';

    protected $fillable = ['user_id', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}