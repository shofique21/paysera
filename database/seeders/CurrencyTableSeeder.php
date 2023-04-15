<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Currency::create([
            'name' => 'USD',
            'description' => 'Currency of the United States',
        ]);
        Currency::create(
            [
                'name' => 'EUR',
                'description' => 'Euro',
            ]
        );
        Currency::create(
            [
                'name' => 'AUD',
                'description' => 'Australian dollar',
            ]
        );
        Currency::create(
            [
                'name' => 'JPY',
                'description' => 'Japanese yen',
            ]
        );
        Currency::create(
            [
                'name' => 'INR',
                'description' => 'Indian rupee',
            ]
        );
        Currency::create(
            [
                'name' => 'KRW',
                'description' => 'South Korean won',
            ]
        );
        Currency::create(
            [
                'name' => 'KPW',
                'description' => 'North Korean won',
            ]
        );
        Currency::create(
            [
                'name' => 'KWD',
                'description' => 'Kuwaiti dinar',
            ]
        );
    }
}
