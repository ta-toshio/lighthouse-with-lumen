<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $table = 'comments';

    protected $fillable = ['reply'];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

}