<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
	        	'plan_id' => 1,
	        	'name' => 'test',
	        	'email' => 'admin@admin.com',
	        	'password' => bcrypt('qweqweqweqwe'),

	        	'created_at' => Carbon::now()->toDateTimeString(),
           		'updated_at' => Carbon::now()->toDateTimeString(),
	        ]);
	    
	        User::create([
	        	'plan_id' => 1,
	        	'name' => 'test',
	        	'email' => 'test.resr@gmail.com',
	        	'password' => bcrypt('123456'),

	        	'created_at' => Carbon::now()->toDateTimeString(),
           		'updated_at' => Carbon::now()->toDateTimeString(),
	        ]);
	       
    	
    }
}
