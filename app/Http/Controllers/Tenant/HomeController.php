<?php

namespace App\Http\Controllers\Tenant;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Tenant\User;

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
        $numberOfUsers = User::count();
        return view('tenant.home.home')->with(compact('numberOfUsers'));
    }
}
