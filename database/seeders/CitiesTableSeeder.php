<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Jakarta',
                'created_at' => '2024-10-05 07:53:05',
                'updated_at' => '2024-10-05 07:53:05',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Surabaya',
                'created_at' => '2024-10-05 07:53:05',
                'updated_at' => '2024-10-05 07:53:05',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Medan',
                'created_at' => '2024-10-05 07:53:05',
                'updated_at' => '2024-10-05 07:53:05',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Malang',
                'created_at' => '2024-10-05 07:53:05',
                'updated_at' => '2024-10-05 07:53:05',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Bekasi',
                'created_at' => '2024-10-05 07:53:05',
                'updated_at' => '2024-10-05 07:53:05',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Bekasi Kota',
                'created_at' => '2024-10-05 07:53:05',
                'updated_at' => '2024-10-05 07:53:05',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Tangerang',
                'created_at' => '2024-10-05 07:53:05',
                'updated_at' => '2024-10-05 07:53:05',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Depok',
                'created_at' => '2024-10-05 07:53:05',
                'updated_at' => '2024-10-05 07:53:05',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Semarang',
                'created_at' => '2024-10-05 07:53:05',
                'updated_at' => '2024-10-05 07:53:05',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Palembang',
                'created_at' => '2024-10-05 07:53:05',
                'updated_at' => '2024-10-05 07:53:05',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Sangereng',
                'created_at' => '2024-10-05 07:53:05',
                'updated_at' => '2024-10-05 07:53:05',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Makassar',
                'created_at' => '2024-10-05 07:53:05',
                'updated_at' => '2024-10-05 07:53:05',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Bagam',
                'created_at' => '2024-10-05 07:53:05',
                'updated_at' => '2024-10-05 07:53:05',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Sumedang',
                'created_at' => '2024-10-05 07:53:05',
                'updated_at' => '2024-10-05 07:53:05',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Batam Centre',
                'created_at' => '2024-10-05 07:53:05',
                'updated_at' => '2024-10-05 07:53:05',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Cilacap',
                'created_at' => '2024-10-05 07:53:05',
                'updated_at' => '2024-10-05 07:53:05',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Bandar Lampung',
                'created_at' => '2024-10-05 07:53:05',
                'updated_at' => '2024-10-05 07:53:05',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Bogor',
                'created_at' => '2024-10-05 07:53:05',
                'updated_at' => '2024-10-05 07:53:05',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Gubeng',
                'created_at' => '2024-10-05 07:53:05',
                'updated_at' => '2024-10-05 07:53:05',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Cakung',
                'created_at' => '2024-10-05 07:53:05',
                'updated_at' => '2024-10-05 07:53:05',
            ),
        ));
        
        
    }
}