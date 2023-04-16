<?php

namespace App\Http\Controllers;

use App\Models\AccountUser;
use App\Models\AccountType;
use App\Models\Currency;
use Illuminate\Http\Request;
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
        $data['identity_number'] = 54000 + AccountUser::latest()->first()->id;
        $this->accountRepository->storeAccount($data);
        return redirect()->route('accounts.index')->with('success', 'Account Created Successfully');
    }
 
    public function show($id){
        $accountType = AccountType::all();
        $currencies = Currency::all();
        $accountDtails = $this->accountRepository->findAccount($id);
        return view('accountDetails', compact('accountDtails','accountType', 'currencies'));
    }
    public function update(Request $request, $id){
        $data = $request->all();
        if($request->pinCode != null){
          $data['pinCode'] = bcrypt($request->pinCode);
        }
        $this->accountRepository->updateAccount($data,$id);
        return redirect()->route('accounts.index')->with('success', 'Account Updated Successfully');
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
