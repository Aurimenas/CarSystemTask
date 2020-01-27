<?php

use Illuminate\Database\Seeder;
use App\Users;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::insert([
            'name'=>'Tomas Tomauskas',
            'segment_id'=>1
        ]);
        Users::insert([
            'name'=>'Andrius Andriauskas',
            'segment_id'=>1
        ]);
        Users::insert([
            'name'=>'Vytas Vytenis',
            'segment_id'=>1
        ]);
        Users::insert([
            'name'=>'Rokas Rokauskas',
            'segment_id'=>2
        ]);
        Users::insert([
            'name'=>'Gintas Gintautas',
            'segment_id'=>2
        ]);
    }
}
