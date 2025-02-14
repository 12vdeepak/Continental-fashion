<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Promotional;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $promoCount = Promotional::count();
        $bannerCount = Banner::count();
        $categoryCount = Category::count();

        return view('backend.layouts.dashboard', compact('categoryCount', 'bannerCount',  'promoCount'));
    }
}
