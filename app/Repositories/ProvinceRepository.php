<?php
namespace App\Repositories;
use App\Models\Province;
use App\Repositories\Interfaces\ProvinceRepositoryInterface;

     class ProvinceRepository implements ProvinceRepositoryInterface {
          public function all(){
               return Province::all();
          }
     }

?>