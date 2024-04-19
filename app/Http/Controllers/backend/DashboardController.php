<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $title = 'Dashboard';
        $page='backend.page.dashboard.index';
        return view('backend.layout', compact([
            'title',
            'page'
        ]));
    }
}
