<?php

namespace App\Http\Controllers;

use Auth;
use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homepartials.homedashboard');
    }
    protected function validator(array $request)
    {
        return Validator::make($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',            
            'phone' => 'required'
        ]);
    }

    public function showHomeEditProfile(Request $request)
    {
        $user = $request->user()->get();
        return view('homepartials.homeeditprofile', compact('user'));
    }

    public function updateHomeEditProfile(Request $request)
    {
        $this->validator($request->all())->validate();
        if($user->fill($request->all())->save()){
            return $this->show($user);
        }
    }


    public function showHomeEditAccount()
    {
        return view('homepartials.homeeditaccount');
    }
    public function showHomeEditHours()
    {
        return view('homepartials.homeedithours');
    }
    public function showHomeEditContacts()
    {
        return view('homepartials.homeeditcontacts');
    }
}
