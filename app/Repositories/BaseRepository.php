<?php

namespace App\Repositories;

use App\Repositories\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    // public function findByCode( $code , $columns = ['*'] , $relations = [];)
    // {
    //     return $this->model->select($columns)->with($relations)->firstOrFail($code);
    // }
}
