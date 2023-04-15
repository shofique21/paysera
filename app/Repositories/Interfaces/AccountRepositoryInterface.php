<?php
namespace App\Repositories\Interfaces;

Interface AccountRepositoryInterface{
    
    public function allAccounts();
    public function storeAccount($data);
    public function findAccount($id);
    public function updateAccount($data, $id); 
    public function destroyAccount($id);
}