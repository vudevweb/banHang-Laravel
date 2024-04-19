<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use App\Repositories\Interfaces\ProvinceRepositoryInterface as ProvinceService;

class UserController extends Controller
{
    protected $provinceRepository;

    public function __construct( ProvinceService $provinceRepository){
        $this-> provinceRepository = $provinceRepository;
    }   

    public function index() {
        $users = User::all();
        $title = 'Danh sách thành viên';
        $page='backend.page.user.index';
        return view('backend.layout', compact([
            'title',
            'page',
            'users'
        ]));
    }

    public function create() {
        $location = [
            'province' => $this-> provinceRepository -> all(),
        ];
        dd($location);
        $title = 'Tạo thành viên';
        $page='backend.page.user.create';
        return view('backend.layout', compact([
            'title',
            'page',
            // 'users'
        ]));
    }
}
