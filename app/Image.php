<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected $dates = [
        'created_at', 'updated_at',
    ];
    protected $fillable = [
        'name', 'path','portfolio_id'
    ];
    public function portfolio()
    {
        return $this->hasMany(\App\Portfolio::class,'portfolio_id');
    }
}
