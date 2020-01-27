<?php

use Illuminate\Database\Seeder;
use App\CarStatus;

class car_stat_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarStatus::insert([
        'cars_id'=>1,
        'status_id'=>1,
        'date_from'=>'2018-01-01',
        'date_to'=>'2022-01-01'
        ]);
        CarStatus::insert([
            'cars_id'=>2,
            'status_id'=>3,
            'date_from'=>'2018-01-01',
            'date_to'=>'2022-01-01'
        ]);
        CarStatus::insert([
            'cars_id'=>3,
            'status_id'=>1,
            'date_from'=>'2018-01-01',
            'date_to'=>'2022-01-01'
        ]);
        CarStatus::insert([
            'cars_id'=>4,
            'status_id'=>1,
            'date_from'=>'2018-01-01',
            'date_to'=>'2022-01-01'
        ]);
    }
}
