<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->insert([
			'username' => 'mathijn',
			'email' => 'mathijn@gmail.com',
			'password' => Hash::make('secret'),
			'created_at' => \Carbon\Carbon::now(),
			'updated_at' => \Carbon\Carbon::now()
		]);

		DB::table('pages')->insert([
			'name'		=> 'Dashboard',
			'icon' 		=> 'fa fa-tachometer',
			'url'		=> 'dashboard',
			'level'		=> '1',
			'color'		=> 'primary',
			'created_at'=> \Carbon\Carbon::now(),
			'updated_at'=> \Carbon\Carbon::now(),
		]);
		DB::table('pages')->insert([
			'name'		=> 'Clients',
			'icon' 		=> 'fa fa-users',
			'url'		=> 'clients',
			'level'		=> '2',
			'color'		=> 'primary',
			'created_at'=> \Carbon\Carbon::now(),
			'updated_at'=> \Carbon\Carbon::now(),
		]);
		DB::table('pages')->insert([
			'name'		=> 'Emails',
			'icon' 		=> 'fa fa-envelope',
			'url'		=> 'emails',
			'level'		=> '4',
			'color'		=> 'red',
			'created_at'=> \Carbon\Carbon::now(),
			'updated_at'=> \Carbon\Carbon::now(),
		]);
		DB::table('pages')->insert([
			'name'		=> 'Actions',
			'icon' 		=> 'fa fa-tasks',
			'url'		=> 'actions',
			'level'		=> '10',
			'color'		=> 'red',
			'created_at'=> \Carbon\Carbon::now(),
			'updated_at'=> \Carbon\Carbon::now(),
		]);

		$company = DB::table('companies')->insertGetId([
			'name'		=> 'FirstDayIT',
			'website'	=> 'https://www.firstdayit.nl',
			'street'	=> 'Albert Einsteinweg',
			'number'	=> '2a',
			'zipcode'	=> '1234YZ',
			'place'		=> 'Joure',
			'created_at'=> \Carbon\Carbon::now(),
			'updated_at'=> \Carbon\Carbon::now(),
		]);

		$event = DB::table('events')->insertGetId([
			'subject'	=> 'Added to system',
			'body'		=> 'Whatever',
			'created_at'=> \Carbon\Carbon::now(),
			'updated_at'=> \Carbon\Carbon::now()
		]);

		$category = DB::table('categories')->insertGetId([
			'name'		=> 'signed',
			'created_at'=> \Carbon\Carbon::now(),
			'updated_at'=> \Carbon\Carbon::now()
		]);

		$category2 = DB::table('categories')->insertGetId([
			'name'		=> 'lead',
			'created_at'=> \Carbon\Carbon::now(),
			'updated_at'=> \Carbon\Carbon::now()
		]);

		$client = DB::table('clients')->insertGetId([
			'first_name'	=> 'Mathijn',
			'last_name'		=> 'van Dijk',
			'email'			=> 'mvandijk@firstdayit.nl',
			'phone'			=> '0657637525',
			'company'		=> 'FirstDayIt',
			'category_id'	=> $category,
			'created_at'	=> \Carbon\Carbon::now(),
			'updated_at'	=> \Carbon\Carbon::now(),
		]);

		$client2 = DB::table('clients')->insertGetId([
			'first_name'	=> 'Kees',
			'last_name'		=> 'Ya Boy!',
			'email'			=> 'kees@kees.nl',
			'phone'			=> '0657637525',
			'company'		=> 'FirstDayIt',
			'category_id'	=> $category,
			'created_at'	=> \Carbon\Carbon::now(),
			'updated_at'	=> \Carbon\Carbon::now(),
		]);

		$action = DB::table('actions')->insertGetId([
			'subject'		=> 'Take Action now!',
			'body'			=> 'Relax....',
			'client_id'		=> $client,
			'created_at'	=> \Carbon\Carbon::now(),
			'updated_at'	=> \Carbon\Carbon::now()
		]);

		$action2 = DB::table('actions')->insertGetId([
			'subject'		=> 'Take Action now!',
			'body'			=> 'Relax....',
			'client_id'		=> $client,
			'created_at'	=> \Carbon\Carbon::now(),
			'updated_at'	=> \Carbon\Carbon::now()
		]);

		$action3 = DB::table('actions')->insertGetId([
			'subject'		=> 'Action 2',
			'body'			=> 'Relax....',
			'client_id'		=> $client2,
			'created_at'	=> \Carbon\Carbon::now(),
			'updated_at'	=> \Carbon\Carbon::now()
		]);
    }
}
