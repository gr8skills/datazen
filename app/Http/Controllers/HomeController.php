<?php

namespace App\Http\Controllers;

use App\Models\DashboardData;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = DashboardData::orderBy('id', 'ASC')->first();
//        dd($data);
        return view('dashboard', compact('data'));
    }
}
