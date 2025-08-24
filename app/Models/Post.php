<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;


class Post extends Model
{
    //
    protected $fillable = ['title', 'description', 'image'];

    public function getRouteKeyName() {
        return 'slug';
    }
}
