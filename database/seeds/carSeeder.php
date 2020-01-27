<?php

use Illuminate\Database\Seeder;
use App\Cars;

class carSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cars::insert([
            'number'=>'QHC177',
            'year_made'=>'2000-01-01',
            'model'=>'Subaru Impreza'
        ]);
        Cars::insert([
            'number'=>'ABC123',
            'year_made'=>'1995-01-01',
            'model'=>'WW Golf III'
        ]);
        Cars::insert([
            'number'=>'TTB602',
            'year_made'=>'2012-01-01',
            'model'=>'Audi A4'
        ]);
        Cars::insert([
            'number'=>'BUZ492',
            'year_made'=>'2011-01-01',
            'model'=>'Fiat Multipla'
        ]);
    }
}
