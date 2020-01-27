<?php

use Illuminate\Database\Seeder;
use App\Manage;

class car_man_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manage::insert([
            'cars_id'=>'1',
            'segments_id'=>'1',
            'user_id'=>'1',
            'date_from'=>'2017-01-01',
            'date_to'=>'2018-01-01'
        ]);
        Manage::insert([
            'cars_id'=>'1',
            'segments_id'=>'1',
            'user_id'=>'2',
            'date_from'=>'2018-01-01',
            'date_to'=>'2021-01-01'
        ]);
        Manage::insert([
            'cars_id'=>'2',
            'segments_id'=>'1',
            'user_id'=>'5',
            'date_from'=>'2016-01-01',
            'date_to'=>'2017-01-01'
        ]);
        Manage::insert([
            'cars_id'=>'2',
            'segments_id'=>'1',
            'user_id'=>'2',
            'date_from'=>'2018-01-01',
            'date_to'=>'2022-01-01'
        ]);
        Manage::insert([
            'cars_id'=>'3',
            'segments_id'=>'2',
            'user_id'=>'5',
            'date_from'=>'2018-01-01',
            'date_to'=>'2022-01-01'
        ]);
        Manage::insert([
            'cars_id'=>'4',
            'segments_id'=>'2',
            'user_id'=>'5',
            'date_from'=>'2017-01-01',
            'date_to'=>'2028-01-01'
        ]);
        Manage::insert([
            'cars_id'=>'3',
            'segments_id'=>'2',
            'user_id'=>'4',
            'date_from'=>'2017-01-01',
            'date_to'=>'2018-01-01'
        ]);
        Manage::insert([
            'cars_id'=>'4',
            'segments_id'=>'2',
            'user_id'=>'4',
            'date_from'=>'2015-01-01',
            'date_to'=>'2017-01-01'
        ]);
    }
}
