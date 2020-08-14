<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlbumFilterRequest;
use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(AlbumFilterRequest $request)
    {
        $category = Category::get();
        $getCategory = Category::where('name',$request->name)->first();
        $id = $getCategory->id;
        $albumQuery = Album::query();
        if($request->filled('name'))
        {

            $albumQuery->where('category_id','=',$id );
        }
        $photos = $albumQuery->paginate(3)->withPath("?" . $request->getQueryString());
        return view('layouts.album', compact('photos','category'));
    }
}
