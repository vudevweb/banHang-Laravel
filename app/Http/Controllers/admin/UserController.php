<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
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
        return view('admin.page.user.index', compact([
            'title',
            'users'
        ]));
    }

    public function create() {
        $provinces = $this -> provinceRepository -> all();
        $title = 'Tạo thành viên';
        $css = 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css';
        $js = 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js';
        return view('admin.page.user.create', compact([
            'title',
            'provinces',
            'css',
            'js'
        ]));
    }

    public function store(StoreUserRequest $request){
        $requestData = $request->except('_token', 'passwordC', 'role');
        $requestData['password'] = Hash::make($request->input('password'));
        $user = User::create($requestData);
        if($user) {
            return redirect()->route('admin.user')->with('success', 'Tạo thành viên thành công');
        } else {
            return redirect()->route('admin.user')->with('error', 'Tạo thành viên thất bại');
        }
    }

    public function edit(Request $request, $id){
        $user = User::find($id);
        $user->birthday = \Carbon\Carbon::parse($user->birthday)->format('Y-m-d');
        $provinces = $this -> provinceRepository -> all();
        $title = 'Chỉnh sửa thành viên';
        $css = 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css';
        $js = 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js';
        return view('admin.page.user.edit', compact([
            'title',
            'user',
            'provinces',
            'css',
            'js'
        ]));
    }

    public function update(Request $request){
        $user = User::find($request->input('id'));
        $user->fullName = $request->input('fullName');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->province_id = $request->input('province_id');
        $user->district_id = $request->input('district_id');
        $user->ward_id = $request->input('ward_id');
        $user->save();
        return redirect()->route('admin.user')->with('success', 'Cập nhật thành viên thành công');
    }


}
