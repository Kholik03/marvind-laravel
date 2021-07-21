<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('menus')->insert([
        [
            'name' => 'SD Sederajat',
            'desc' => 'SD / MI',
        ], [
            'name' => 'SMP Sederajat',
            'desc' => 'SMP / MTS',
        ]
    
        ]);
    }
}
