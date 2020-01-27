<?php

use Illuminate\Database\Seeder;
use App\Status;

class stat_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::insert([
            'name'=>'Brand New',
            'parent_id'=>'1'
        ]);
        Status::insert([
            'name'=>'Damaged',
            'parent_id'=>'1'
        ]);
        Status::insert([
            'name'=>'Used',
            'parent_id'=>'1'
        ]);
        Status::insert([
            'name'=>'Out of commission',
            'parent_id'=>'1'
        ]);
    }
}
