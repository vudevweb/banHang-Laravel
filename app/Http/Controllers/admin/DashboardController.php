<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $title = 'Dashboard';
        $page='admin.page.dashboard.index';
        return view('admin.layout', compact([
            'title',
            'page'
        ]));
    }
}
