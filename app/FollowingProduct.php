<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FollowingProduct extends Model
{
    protected $fillable = [
		'user_id', 'product_id', 'product_slug', 'status',
	];
}
