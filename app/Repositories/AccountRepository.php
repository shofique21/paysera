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
        $account->slug = $data['slug'];
        $account->save();
    }

    public function destroyAccount($id)
    {
        $account = AccountUser::find($id);
        $account->delete();
    }
}