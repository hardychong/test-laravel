<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Record;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		for ($i=1; $i<=50; $i++)
		{
			$curr = mt_rand(1,3);
			switch ($curr)
			{
				case 1:
					$currency = "MOP";
					break;
				case 2:
					$currency = "HKD";
					break;
				case 3:
					$currency = "CNY";
					break;
					
			}
			$record = Record::create([
				'account_id'	=> rand(1,10),
				'date'			=> date('Y-m-d', mt_rand(strtotime("2021-1-1"),strtotime("2022-3-3"))),
				'date'			=> date('Y-m-d', mt_rand(strtotime("2021-1-1"),strtotime("2022-3-3"))),
				'currency'		=> $currency,
				'amount'		=> mt_rand(-80000,100000),
				'created_at'	=> now(),
				'updated_at'	=> now(),				
			]);
		}		

    }
}
