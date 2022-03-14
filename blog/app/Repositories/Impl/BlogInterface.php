<?php

namespace App\Repositories\Impl;

interface BlogInterface
{
    public function store($request);

    public function update($id,$request);

    public function getBlogOfUser($id);
}
