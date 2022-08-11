<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\AppInfo;

class AppInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AppInfo::create([
            'name' => 'DevTest',
            'hq_address' => 'Nigeria',
            'phone1' => '09029292929',
            'phone2' => '09029292929',
            'sales_email' => 'hello@devtest.com',
            'motto' => 'Where glory exist',
        ]);
    }
}
