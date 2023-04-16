<?php

namespace App\Http\Controllers;

use App\Imports\TransactionsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Transaction;
use App\Models\AccountUser;
use App\Models\Currency;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create_transaction()
    {
        $allAccounts = AccountUser::all();
        $currencies = Currency::all();
        return view('transactionForm', compact('allAccounts', 'currencies'));
    }
    public function transaction_submit(Request $request)
    {

        $identityNo = $request->get('identity_number');
        $accountInfo = AccountUser::where('identity_number', $identityNo)->first();
        if ($request->operation_type == 'deposit') {
            //calculations for commission
            $commission = $request->operation_amount * (3 / 1000);
            $currentBalance = $accountInfo->balance + $request->operation_amount - $commission;
        } elseif ($request->operation_type == 'withdraw' &&  $accountInfo->account_type == 'private' && $accountInfo->balance > $request->operation_amount) {

            //calculations for commission
            $commission = $request->operation_amount * (3 / 1000);
            $currentBalance = $accountInfo->balance - $request->operation_amount - $commission;
        } elseif ($request->operation_type == 'withdraw' && $accountInfo->account_type == 'business' && $accountInfo->balance > $request->operation_amount) {

            //calculations for commission
            $commission = $request->operation_amount * (5 / 1000);
            $currentBalance = $accountInfo->balance - $request->operation_amount - $commission;
        }

        $data = $request->all();
        $data['account_type'] = $accountInfo->account_type;
        $data['commission_amount'] = $commission;
        $data['amount_balance'] = $currentBalance;

        AccountUser::where('identity_number', $identityNo)->update(['balance' => $currentBalance]);
        Transaction::create($data);
        return redirect()->back()->with('success', 'Transaction was created successfully!');
    }
    public function index()
    {
        $allTransaction = Transaction::all();
        return view('allTransaction', compact('allTransaction'));
    }
    public function withdrawTransaction()
    {
        $withdrawTransaction = Transaction::where('operation_type', 'withdraw')->get();
        return view('withdrawTransaction', compact('withdrawTransaction'));
    }
    public function depositTransaction()
    {
        $depositTransaction = Transaction::where('operation_type', 'deposit')->get();
        return view('depositeTransaction', compact('depositTransaction'));
    }
    public function import()
    {
        Excel::import(new TransactionsImport, request()->file('file'));
        return redirect()->back()->with('success', 'Your upload data inserted successfully!');
    }
}
