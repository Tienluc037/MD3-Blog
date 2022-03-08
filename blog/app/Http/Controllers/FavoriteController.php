<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function showFavorite()
    {
        $blogs = session()->get("favorite") ?? [];
//        dd($blogs);
        return view('favorite.showFavorite', compact('blogs'));
    }


    public function addToFavorite($id)
    {

        $blog = Blog::findOrFail($id);
        $favorites = session('favorite', []);

        if (isset($favorites[$id])) {
            $favorites[$id] ['quantity']++;
        } else {
            $favorites[$id] = array(
                'id' => $blog->id,
                'title' => $blog->title,
                'content' => $blog->content,
                'quantity' => 1,
            );
        }
        session()->put('favorite', $favorites);
        return redirect()->back()->with('success', 'added to favorite successfully!');
    }
}
