<?php

namespace App\Http\Controllers;

use App\Account;
use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminpartials.admindashboard');
    }
    public function showAdminEditProfile(Request s$request)
    {
        $admin = $request->user()->get();

        return view('adminpartials.admineditprofile', compact('admin'));
    }
    public function showAdminEditAccount()
    {
        return view('adminpartials.admineditaccount');
    }
    public function showAdminCreateAccount()
    {
        return view('adminpartials.admincreateaccount');

        redirect('adminpartials.admindashboard');
    }
    public function updateAdminEditProfileUpdate()
    {
        redirect('adminpartials.admineditprofile');
    }
}
