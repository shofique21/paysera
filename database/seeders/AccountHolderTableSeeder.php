<?php

namespace Database\Seeders;
use App\Models\AccountUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountHolderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AccountUser::truncate();
        $accountUser = [
            [
                'name' => 'Abdevilurs',
                'identity_number' => '34201',
                'email' => 'abdevilurs@gmail.com',
                'phone' => '0558965487',
                'street' => '1425 Creech Rd',
                'state' => 'Florida',
                'postCode' => '2313',
                'country' => 'USA',
                'profession' => 'Business Development',
                'date_of_birth' => '1993-12-01',
                'account_type' => 'private',
                'pinCode' => bcrypt('070707'),
                'balance' => '450000',
                'currency' => 'USD',
                'status' => 'Active',
                'created_by' => 'Admin',
            ],
            [
                'name' => 'Jon doe',
                'identity_number' => '34202',
                'email' => 'jondoe@gmail.com',
                'phone' => '0568945643',
                'street' => '1425 Creech Rd',
                'state' => 'Califonia',
                'postCode' => '6745',
                'country' => 'USA',
                'profession' => 'Enginner',
                'date_of_birth' => '1977-09-25',
                'account_type' => 'private',
                'pinCode' => bcrypt('050505'),
                'balance' => '500000',
                'currency' => 'USD',
                'status' => 'Active',
                'created_by' => 'Admin',
            ],
            [
                'name' => 'Alex Home',
                'identity_number' => '34203',
                'email' => 'alexhome@gmail.com',
                'phone' => '0568949087',
                'street' => '1425 Creech Rd',
                'state' => 'Califonia',
                'postCode' => '9856',
                'country' => 'USA',
                'profession' => 'Service holder',
                'date_of_birth' => '1985-05-15',
                'account_type' => 'private',
                'pinCode' => bcrypt('040404'),
                'balance' => '650000',
                'currency' => 'USD',
                'status' => 'Active',
                'created_by' => 'Admin',
            ],
            [
                'name' => 'Alex Home',
                'identity_number' => '34204',
                'email' => 'alexhome@gmail.com',
                'phone' => '0568949767',
                'street' => '1425 Creech Rd',
                'state' => 'Califonia',
                'postCode' => '5632',
                'country' => 'USA',
                'profession' => 'Service holder',
                'date_of_birth' => '1990-05-15',
                'account_type' => 'business',
                'pinCode' => bcrypt('040404'),
                'balance' => '400000',
                'currency' => 'USD',
                'status' => 'Active',
                'created_by' => 'Admin',
            ],
            [
                'name' => 'Mikel helx',
                'identity_number' => '34205',
                'email' => 'mikel@gmail.com',
                'phone' => '0568949087',
                'street' => '1425 Creech Rd',
                'state' => 'Califonia',
                'postCode' => '5632',
                'country' => 'USA',
                'profession' => 'Professor',
                'date_of_birth' => '1995-05-15',
                'account_type' => 'business',
                'pinCode' => bcrypt('040404'),
                'balance' => '750000',
                'currency' => 'USD',
                'status' => 'active',
                'created_by' => 'Admin',
            ],
            
        ];
        
        foreach ($accountUser as $key => $value) {
            AccountUser::create($value);
        }
    }
}
