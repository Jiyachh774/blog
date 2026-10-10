<?php

namespace App\Http\Controllers\Backend\Dashboards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class DashboardController extends Controller implements HasMiddleware

{
    public static function middleware(): array
    {
        return [
            new Middleware('role:admin', only: ['index']),

        ];
    }

    public function index()
    {
        return view('backend.dashboards.index');
    }
}
