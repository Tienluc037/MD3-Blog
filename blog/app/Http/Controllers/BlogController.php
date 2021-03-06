<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Repositories\BlogRepository;
use App\Services\BlogService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    protected $blogService;
    protected $blogRepository;

    public function __construct(BlogService $blogService,BlogRepository $blogRepository)
    {
        $this->blogService = $blogService;
        $this->blogRepository = $blogRepository;
    }

    public function index()
    {
        $blogs = $this->blogService->getAll();
        return view('blog.list',compact('blogs'));
    }

    public function show($id)
    {
        $blog = $this->blogService->getById($id);
        return view('blog.detail',compact('blog'));
    }
    public function create()
    {
        return view('blog.create');
    }

    public function store(BlogRequest $request)
    {
     $this->blogService->store($request);
        toastr()->success('Thêm mới thành công');
        return redirect()->route('blogs.index');
    }

    public function edit($id)
    {
        $blog = $this->blogService->getById($id);
        return view('blog.update',compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $this->blogService->update($id,$request);
        toastr()->success('Cập nhật thành công');
        return redirect()->route('blogs.index');
    }

    public function destroy($id)
    {
        $this->blogRepository->deleteById($id);
        toastr()->success('Xóa thành công');
        return redirect()->route('blogs.index');
    }

}
