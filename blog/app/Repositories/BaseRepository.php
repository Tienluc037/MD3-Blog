<?php

namespace App\Repositories;

use App\Repositories\Impl\BaseInterface;


abstract class BaseRepository implements BaseInterface
{
    public $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    public abstract function getModel();


    public function getAll()
    {
        return $this->model::all();
    }


    public function getById($id)
    {
//        return $this->model::where('id', $id);
        return $this->model::findOrfail($id);
    }


    public function deleteById($id)
    {
//        $blog = Blog::findOrFail($id);
//        $blog->delete();
        $this->model::findOrfail($id);
        return $this->model::destroy($id);
    }
}
