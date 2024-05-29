<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;

class DashboardController extends Controller
{
    public function index()
    {
        $tenantCount = Tenant::count();
        $recentTenants = Tenant::join('domains', 'tenants.id', '=', 'domains.tenant_id')
            ->select('tenants.*', 'domains.domain as domain_name', 'domains.tenant_id as asd')
            ->orderBy('tenants.created_at', 'desc')
            ->take(5)
            ->get();

        foreach ($recentTenants as $tenant) {
            $tenant->domain_name = strtolower(str_replace(' ', '', $tenant->domain_name) . '.localhost');
            $tenant->date = date_format($tenant->created_at, 'M d, Y');
        }

        // $users = DB::connection('mysql')->table('users')->get();

        // // $tenant->domain_name = str_replace(' ', '', $tenant->domain_name) . '.localhost';
        // dd($users);

        return view('dashboard', compact('tenantCount', 'recentTenants'));
    }
}
