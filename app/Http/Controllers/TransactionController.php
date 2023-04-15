<?php

namespace App\Http\Controllers;

use App\Imports\TransactionsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $allTransaction = Transaction::all();
        return view('allTransaction', compact('allTransaction'));
    }
    public function withdrawTransaction(){
        $withdrawTransaction = Transaction::where('operation_type','withdraw')->get();
        return view('withdrawTransaction', compact('withdrawTransaction'));
    }
    public function depositTransaction(){
        $depositTransaction = Transaction::where('operation_type','deposit')->get();
        return view('depositeTransaction', compact('depositTransaction'));
    }
    public function import() 
    {
        Excel::import(new TransactionsImport,request()->file('file'));
        return redirect()->back()->with('success', 'Your upload data inserted successfully!');    
    }
}
