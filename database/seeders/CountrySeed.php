<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country_code')->insert([
            [
                'id' => '1',
                'code' => '+62',
                'country' => 'Indonesia'
            ],
            [
                'id' => '2',
                'code' => '+1',
                'country' => 'United States'
            ],
            [
                'id' => '3',
                'code' => '+65',
                'country' => 'Singapore'
            ],
            [
                'id' => '4',
                'code' => '+60',
                'country' => 'Malaysia'
            ],
            [
                'id' => '5',
                'code' => '+81',
                'country' => 'Japan'
            ]
        ]);
    }
}
