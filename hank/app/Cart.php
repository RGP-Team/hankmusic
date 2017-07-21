<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';

    protected $fillable = [
        'user_id', 'music_id'
    ];

    public $timestamps = false;

    public function music()
    {
    	return $this->belongsTo('\App\Music','music_id');
    }
}
