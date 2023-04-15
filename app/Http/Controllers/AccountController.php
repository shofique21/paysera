<?php

namespace App\Http\Controllers;

use App\Models\AccountUser;
use Illuminate\Http\Request;
use App\Models\AccountType;
use App\Models\Currency;
use App\Repositories\Interfaces\AccountRepositoryInterface;

class AccountController extends Controller
{
    private $accountRepository;
    public function __construct(AccountRepositoryInterface $accountRepository)
    {
        $this->middleware('auth');
        $this->accountRepository = $accountRepository;
    }

    public function index()
    {
        $allAccountUsers =  $this->accountRepository->allAccounts();
        return view('accountList', compact('allAccountUsers'));
    }

    public function create()
    {
        $accountType = AccountType::all();
        $currencies = Currency::all();
        return view('createAccount', compact('accountType', 'currencies'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['pinCode'] = bcrypt($request->pinCode);
        $data['identity_number'] = 5400 + AccountUser::latest()->first()->id;
        $this->accountRepository->storeAccount($data);
        return redirect()->route('accounts.index')->with('success', 'Account Created Successfully');
    }

    public function private_account()
    {
        $privateAccount = AccountUser::where('account_type', 'private')->get();
        return view('privateAccount', compact('privateAccount'));
    }

    public function business_account()
    {
        $businessAccount = AccountUser::where('account_type', 'business')->get();
        return view('businessAccount', compact('businessAccount'));
    }
}
