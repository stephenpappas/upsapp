<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $accounts = Account::orderBy('accountname', 'desc')->get();

        return view('adminpartials.admindashboard', compact('accounts'));

        // return view('adminpartials.admindashboard')->with("accounts" => $account);
        // }
        // else
        // {
        //     return view('adminpartials.admindashboard')->with("accounts" => false]);
        // }
    }

    protected function validator(array $request)
    {
        return Validator::make($request, [
            'accountname' => 'required',
            'address1' => 'required',
            'address2' => 'required',

        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpartials.admincreateaccount');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        if(Auth::user()->account()->Create($request->all())){
            return $this->index();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        return view('adminpartials.admindashboard', compact('accounts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        return view('adminpartials.adminEditaccount', compact('accounts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        $this->validator($request->all())->validate();
        if($account->fill($request->all())->save()){
            return $this->show($account);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        if($account->delete()){
            return back();
        }
    }
}
