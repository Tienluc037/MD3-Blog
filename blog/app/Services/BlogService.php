<?php

namespace App\Services;

use App\Repositories\BlogRepository;

class BlogService extends BaseService
{
        public $blogRepository;
        public function __construct(BlogRepository $blogRepository)
        {
            $this->blogRepository = $blogRepository;
        }

    public function store($request)
    {

    }

    public function update($id, $request)
    {

    }

    public function getBlogOfUser($id)
    {

    }
}
