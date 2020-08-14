<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['name', 'album_category_name', 'image','category_id'];
    public function getCategory()
    {
        //$category = Category::where('id',$this->category_id)->find();
        $category = Category::find($this->category_id);
        return $category;
    }
    public function test1()
    {
        $category = Category::where('name', 'тест')->first();
        return $category;
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
