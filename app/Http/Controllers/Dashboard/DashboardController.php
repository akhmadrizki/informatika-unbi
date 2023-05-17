<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Handle the dashboard page view.
     */
    public function __invoke(): View
    {
        return view('pages.admin.index');
    }
}
