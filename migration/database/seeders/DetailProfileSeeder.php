<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data ke tabel pegawai
        DB::table('detail_profile')->insert([
            'address' => 'jember',
            'nomor_tlp' => '085607357512',
            'ttl' => '2002-06-12',
            'foto' => 'picture.png'
        ]);
    }
}
