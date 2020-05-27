<?php

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Plan::create([
          	'name' => 'test',
          	'url' => 'test',
          	'description' => 'test test',
        	]);

        
    
    }
}
