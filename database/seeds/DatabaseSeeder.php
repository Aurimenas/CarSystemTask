<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(car_man_seeder::class);
         $this->call(car_stat_seeder::class);
         $this->call(carSeeder::class);
         $this->call(segment_seeder::class);
         $this->call(stat_seeder::class);
         $this->call(user_seeder::class);
    }
}
