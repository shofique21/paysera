<?php

namespace App\Http\Controllers;

use App\Models\AccountUser;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $allAccountUsers = AccountUser::all();
        return view('allAccount', compact('allAccountUsers'));
    }
    public function private_account(){
        $privateAccount = AccountUser::where('account_type','Private')->get();
        return view('privateAccount', compact('privateAccount'));
    }
    public function business_account(){
        $businessAccount = AccountUser::where('account_type','Business')->get();
        return view('businessAccount', compact('businessAccount'));
    }
}
