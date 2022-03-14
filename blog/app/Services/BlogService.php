<?php

namespace App\Services;

use App\Models\Blog;
use App\Repositories\BlogRepository;


class BlogService extends BaseService
{
        public $blogRepository;
        public function __construct(BlogRepository $blogRepository)
        {
            $this->blogRepository = $blogRepository;
        }

    public function getAll()
    {
        return $this->blogRepository->getAll();
    }

    public function store($request)
    {
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->save();

    }

    public function update($id, $request)
    {
//        $blog = Blog::findOrFail($id);
        $blog = $this->blogRepository->getById($id);
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->save();
    }

    public function getById($id)
    {
        return $this->blogRepository->getById($id);
    }
    public function getBlogOfUser($id)
    {

    }
}
