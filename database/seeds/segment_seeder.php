<?php

use Illuminate\Database\Seeder;
use App\Segments;

class segment_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Segments::insert([
            'name'=>'Kauno garazas'
        ]);
        Segments::insert([
            'name'=>'Vilniaus garazas'
        ]);
    }
}
