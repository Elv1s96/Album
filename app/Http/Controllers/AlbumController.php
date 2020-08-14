<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::get();
        $photos = Album::paginate(6);
        return view('layouts.album', compact('photos', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('album.download', compact('categories'));
        //dd('hi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlbumRequest $request)
    {
        //        $request->validate([   правила перенесены в AlbumRequest rules()
//            'name' =>'required',
//            'album_category_name' =>'required'
//        ]);
        //$getCategoryId = Category::where('name',$request->category_name)->first()->id;

        $params = $request->all();

        unset($params['image']);
        if ($request->has('image')) {
            $params['image'] = $request->file('image')->store('album');
        }
        // dd($params);
        Album::create($params);
        return redirect()->route('album.index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Album $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        return view('album.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Album $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        $categories = Category::get();
        return view('album.edit', compact('album', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Album $album
     * @return \Illuminate\Http\Response
     */
    public function update(AlbumRequest $request, Album $album)
    {

        $params = $request->all();
        //dd($params);
        /*
        $categories = Category::get();
        $final = '';
        foreach ($categories as $category) {
            if (isset($params[$category->code])) {
                $cat[] = $category->id;

            }
        }
        $final = implode(",", $cat);
        $album->category_id = $final;
        */
        // dd($final);
        if (isset($params['image'])) {
            Storage::delete($album->image);
            unset($params['image']);
            if ($request->has('image')) {
                $params['image'] = $request->file('image')->store('album');
            }
        }
        //dd($params);
        $album->update($params);
        return redirect()->route('album.index');
        //dd('update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Album $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->route('album.index');
        //dd('destroy');
    }
}
