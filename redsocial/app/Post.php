<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'text',
        'image_path',
        'user_id',
    ];
    public function user()
    {
       return $this->belongsTo('\App\User');
    }
    public function categories()
    {
        return $this->belongsToMany('\App\Category');
    }
}
