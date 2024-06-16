<?php

namespace App\Repositories;

use App\Models\District;
use App\Repositories\Interfaces\DistrictRepositoryInterface;

class DistrictRepository extends BaseRepository implements DistrictRepositoryInterface
{
    protected $model;

    public function __construct(District $model)
    {
        $this->model = $model;
    }

    public function findByProvince($province_code)
    {
        return $this->model->where('province_code', $province_code)->get();
    }
}
