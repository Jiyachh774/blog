<?php

namespace App\Http\Controllers\Backend\Dashboards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.dashboards.index');
    }
}
