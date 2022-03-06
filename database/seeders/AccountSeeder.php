<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Account;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		for ($i=1; $i<=10; $i++)
		{
			$account = Account::create([
				'name'		=> Str::random(10),
				'no'		=> rand(1000000000,9999999999),
				'note'		=> Str::random(30),
				'created_at'	=> now(),
				'updated_at'	=> now(),
				
			]);
		}
    }
}
