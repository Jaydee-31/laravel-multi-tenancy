<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $tenantCount = Tenant::count();
        $recentTenants = Tenant::orderBy('created_at', 'desc')->take(5)->get();

        return view('dashboard', compact('tenantCount', 'recentTenants'));
    }
}
