<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'code'];
    public function albums()
    {
        return $this->hasMany(Album::class);
    }
}
