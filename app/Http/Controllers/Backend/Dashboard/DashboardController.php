<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Backend\BackendController;

class DashboardController extends BackendController
{
    // Dashboard - Analytics
    public function dashboardAnalytics()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('/content/dashboard/dashboard-analytics', ['pageConfigs' => $pageConfigs]);
    }

    // Dashboard - Ecommerce
    public function dashboardEcommerce()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('backend.dashboard', ['pageConfigs' => $pageConfigs]);
    }
}
