<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts_Tags extends Model
{
    protected $fillable = [
    	'post_id',
    	'tag_id'
    ];
}
