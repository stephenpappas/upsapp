<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:superadmin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('superadminpartials.superadmindashboard');
    }
    public function showSuperadminEditProfile()
    {
        return view('superadminpartials.superadmineditprofile');
    }
    public function showSuperadminCreateAccount()
    {
        return view('superadminpartials.superadmincreateaccount');
    }
    public function showSuperadminEditAccount()
    {
        return view('superadminpartials.superadmineditaccount');
    }
    public function showSuperadminCreateAdmin()
    {
        return view('superadminpartials.superadmincreateadmin');
    }
    public function showSuperadminUploadSchedule()
    {
        return view('superadminpartials.superadminuploadschedule');
    }
}
