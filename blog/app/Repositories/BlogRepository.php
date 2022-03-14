<?php

namespace App\Repositories;

use App\Models\Blog;
use App\Repositories\Impl\BaseInterface;
use App\Repositories\Impl\BlogInterface;

class BlogRepository extends BaseRepository implements BaseInterface
{

    public $table = 'blog';
    public function getModel()
    {
        return Blog::class;
    }
}
