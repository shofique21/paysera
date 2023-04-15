<?php
namespace App\Repositories;

use App\Repositories\Interfaces\AccountRepositoryInterface;
use App\Models\AccountUser;

class AccountRepository implements AccountRepositoryInterface
{

    public function allAccounts()
    {
        return AccountUser::latest()->paginate(10);
    }

    public function storeAccount($data)
    {
        return AccountUser::create($data);
    }

    public function findAccount($id)
    {
        return AccountUser::find($id);
    }

    public function updateAccount($data, $id)
    {
        $account = AccountUser::where('id', $id)->first();
        $account->name = $data['name'];
        $account->email = $data['email'];
        $account->phone = $data['phone'];
        $account->street = $data['street'];
        $account->state = $data['state'];
        $account->postCode = $data['postCode'];
        $account->country = $data['country'];
        $account->profession = $data['profession'];
        $account->date_of_birth = $data['date_of_birth'];
        $account->account_type = $data['account_type'];
        $account->pinCode = $data['pinCode'];
        $account->balance = $data['balance'];
        $account->currency = $data['currency'];
        $account->status = $data['status'];
        $account->save();
    }

    public function destroyAccount($id)
    {
        $account = AccountUser::find($id);
        $account->delete();
    }
}