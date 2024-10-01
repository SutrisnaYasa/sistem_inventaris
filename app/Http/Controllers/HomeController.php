<?php

namespace App\Http\Controllers;

use App\BarcodeModel;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $inventaris_count = BarcodeModel::all()->count();
        return view('home', ['inventaris_count' => $inventaris_count]);
    }
}
