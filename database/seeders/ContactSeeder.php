<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('telepon')->insert([
            [
                'id' => '1',
                'nomor' => '0822334455',
                'nama_nomor' => 'Asep Surasep',
                'alamat' => 'Jl. Mana saja Blok U No 33',
                'deskripsi' => 'Nama saya Asep. Saya merupakan Asep Surasep.',
                'created_by_id' => '1',
                'country_code' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '2',
                'nomor' => '0877224681',
                'nama_nomor' => 'Kepin Djaya',
                'alamat' => 'Jl. Mana saja Blok Z No 22',
                'deskripsi' => 'Nama saya Kepin. Saya merupakan Kepin Djaya.',
                'created_by_id' => '2',
                'country_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '3',
                'nomor' => '0824571810',
                'nama_nomor' => 'Saya Siapa?',
                'alamat' => 'Jl. Mana saja Blok K No 99',
                'deskripsi' => 'Kamu Siapa? Saya Siapa? Saya dimana?.',
                'country_id' => '3',
                'created_by_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
