<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.list',compact('blogs'));
    }

    public function show($id)
    {
        $blogs = Blog::all()->where('id', $id);
        return view('blog.detail',compact('blogs'));
    }
    public function create()
    {
        return view('blog.create');
    }

    public function store(BlogRequest $request)
    {
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->save();
        toastr()->success('Thêm mới thành công');
        return redirect()->route('blogs.index');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.update',compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->save();
        toastr()->success('Cập nhật thành công');
        return redirect()->route('blogs.index');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        toastr()->success('Xóa thành công');
        return redirect()->route('blogs.index');
    }

}
