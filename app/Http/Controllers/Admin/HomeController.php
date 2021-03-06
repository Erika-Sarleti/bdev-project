<?php

namespace App\Http\Controllers\Admin;
      use App\Http\Controllers\Controller;
      use App\User;
      use Illuminate\Http\Request;
      class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $dev)
    {
        return view('admin.home', compact('dev'));
    }
}
