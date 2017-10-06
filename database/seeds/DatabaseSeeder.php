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
    	//hl USERS
		DB::table('users')->insert([
			'username' => 'mathijn',
			'email' => 'mathijn@gmail.com',
			'password' => Hash::make('secret'),
			'created_at' => \Carbon\Carbon::now(),
			'updated_at' => \Carbon\Carbon::now()
		]);

		//hl PAGES -------------------------------------------------------
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
			'icon' 		=> 'fa fa-address-book-o',
			'url'		=> 'clients',
			'level'		=> '2',
			'color'		=> 'primary',
			'created_at'=> \Carbon\Carbon::now(),
			'updated_at'=> \Carbon\Carbon::now(),
		]);
		DB::table('pages')->insert([
			'name'		=> 'Emails',
			'icon' 		=> 'fa fa-envelope-o',
			'url'		=> 'emails',
			'level'		=> '4',
			'color'		=> 'green',
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
//		DB::table('pages')->insert([
//			'name'		=> 'CV Maken',
//			'icon' 		=> 'fa fa-id-card-o',
//			'url'		=> 'cv',
//			'level'		=> '9',
//			'color'		=> 'yellow',
//			'created_at'=> \Carbon\Carbon::now(),
//			'updated_at'=> \Carbon\Carbon::now(),
//		]);
		DB::table('pages')->insert([
			'name'		=> 'Employees',
			'icon' 		=> 'fa fa-users',
			'url'		=> 'employees',
			'level'		=> '9',
			'color'		=> 'yellow',
			'created_at'=> \Carbon\Carbon::now(),
			'updated_at'=> \Carbon\Carbon::now(),
		]);

		//hl COMPANIES -------------------------------------------------------

		$company1 = DB::table('companies')->insertGetId([
			'name'		=> 'FirstDayIT',
			'website'	=> 'https://www.firstdayit.nl',
			'street'	=> 'Albert Einsteinweg',
			'number'	=> '2a',
			'zipcode'	=> '1234YZ',
			'place'		=> 'Joure',
			'created_at'=> \Carbon\Carbon::now(),
			'updated_at'=> \Carbon\Carbon::now(),
		]);

		$company2 = DB::table('companies')->insertGetId([
			'name'		=> 'SportMonks',
			'website'	=> 'https://www.sportmonks.nl',
			'street'	=> 'XXXXXXXXXXXX',
			'number'	=> '1111',
			'zipcode'	=> '1234YZ',
			'place'		=> 'Stiens',
			'created_at'=> \Carbon\Carbon::now(),
			'updated_at'=> \Carbon\Carbon::now(),
		]);

		//hl CATEGORIES -------------------------------------------------------

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

		//hl CLIENTS -------------------------------------------------------

		$client = DB::table('clients')->insertGetId([
			'first_name'	=> 'Ronnie',
			'last_name'		=> 'Visser',
			'email'			=> 'XXXXXXXXXXXXXX',
			'phone'			=> '0612345678',
			'company_id'	=> $company2,
			'category_id'	=> $category,
			'created_at'	=> \Carbon\Carbon::now(),
			'updated_at'	=> \Carbon\Carbon::now(),
		]);

		$client2 = DB::table('clients')->insertGetId([
			'first_name'	=> 'Mathijn',
			'last_name'		=> 'van Dijk',
			'email'			=> 'mathijn@firstdayit.nl',
			'phone'			=> '0657637525',
			'company_id'	=> $company1,
			'category_id'	=> $category,
			'created_at'	=> \Carbon\Carbon::now(),
			'updated_at'	=> \Carbon\Carbon::now(),
		]);

		//hl ACTIONS -------------------------------------------------------

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

		//hl EMPLOYEES -------------------------------------------------------

		$employee1 = DB::table('employees')->insertGetId([
			'first_name'	=> 'Mathijn',
			'last_name'		=> 'van Dijk',
			'place'			=> 'Leeuwarden',
			'birth_date'	=> '1993-05-16',
			'driver_license'=> 'B',
			'job_title'		=> 'Junior Developer',
			'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra efficitur leo, a porta turpis mollis ac. Nunc ullamcorper dapibus lorem ac varius. Nullam sapien tortor, tristique non accumsan sed, luctus in tellus. Ut luctus purus in ex maximus, nec lobortis dui pretium. Quisque vulputate mi ligula, in viverra sem interdum a. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam rutrum malesuada metus quis egestas.',
			'created_at'	=> \Carbon\Carbon::now(),
			'updated_at'	=> \Carbon\Carbon::now()
		]);

		$employee2 = DB::table('employees')->insertGetId([
			'first_name'	=> 'Mathijs',
			'last_name'		=> 'van Dijk',
			'place'			=> 'Leeuwarden',
			'birth_date'	=> '1993-05-16',
			'driver_license'=> 'B',
			'job_title'		=> 'Junior Developer',
			'motivation'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra efficitur leo, a porta turpis mollis ac. Nunc ullamcorper dapibus lorem ac varius. Nullam sapien tortor, tristique non accumsan sed, luctus in tellus. Ut luctus purus in ex maximus, nec lobortis dui pretium. Quisque vulputate mi ligula, in viverra sem interdum a. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam rutrum malesuada metus quis egestas.',
			'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra efficitur leo, a porta turpis mollis ac. Nunc ullamcorper dapibus lorem ac varius. Nullam sapien tortor, tristique non accumsan sed, luctus in tellus. Ut luctus purus in ex maximus, nec lobortis dui pretium. Quisque vulputate mi ligula, in viverra sem interdum a. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam rutrum malesuada metus quis egestas.',
			'created_at'	=> \Carbon\Carbon::now(),
			'updated_at'	=> \Carbon\Carbon::now()
		]);

		//hl EXPERIENCES -------------------------------------------------------

		$experience1 = DB::table('experiences')->insertGetId([
			'employee_id'	=> $employee1,
			'company_id'	=> $company2,
			'subject'		=> 'Creating an API for sports data',
			'period_from'	=> '2017-06-15',
			'period_to'		=> '2017-09-15',
			'motivation'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra efficitur leo, a porta turpis mollis ac. Nunc ullamcorper dapibus lorem ac varius. Nullam sapien tortor, tristique non accumsan sed, luctus in tellus. Ut luctus purus in ex maximus, nec lobortis dui pretium. Quisque vulputate mi ligula, in viverra sem interdum a. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam rutrum malesuada metus quis egestas.',
			'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra efficitur leo, a porta turpis mollis ac. Nunc ullamcorper dapibus lorem ac varius. Nullam sapien tortor, tristique non accumsan sed, luctus in tellus. Ut luctus purus in ex maximus, nec lobortis dui pretium. Quisque vulputate mi ligula, in viverra sem interdum a. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam rutrum malesuada metus quis egestas.',
			'experiences'	=> 'PhP, Laravel',
			'created_at'	=> \Carbon\Carbon::now(),
			'updated_at'	=> \Carbon\Carbon::now(),
		]);

		$experience2 = DB::table('experiences')->insertGetId([
			'employee_id'	=> $employee1,
			'company_id'	=> $company1,
			'subject'		=> 'Creating an API for sports data',
			'period_from'	=> '2017-06-15',
			'period_to'		=> '2017-09-15',
			'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra efficitur leo, a porta turpis mollis ac. Nunc ullamcorper dapibus lorem ac varius. Nullam sapien tortor, tristique non accumsan sed, luctus in tellus. Ut luctus purus in ex maximus, nec lobortis dui pretium. Quisque vulputate mi ligula, in viverra sem interdum a. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam rutrum malesuada metus quis egestas.',
			'experiences'	=> 'PhP, Laravel',
			'created_at'	=> \Carbon\Carbon::now(),
			'updated_at'	=> \Carbon\Carbon::now(),
		]);

		$experience2 = DB::table('experiences')->insertGetId([
			'employee_id'	=> $employee1,
			'company_id'	=> $company2,
			'subject'		=> 'Creating an API for sports data',
			'period_from'	=> '2017-06-15',
			'period_to'		=> '2017-09-15',
			'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra efficitur leo, a porta turpis mollis ac. Nunc ullamcorper dapibus lorem ac varius. Nullam sapien tortor, tristique non accumsan sed, luctus in tellus. Ut luctus purus in ex maximus, nec lobortis dui pretium. Quisque vulputate mi ligula, in viverra sem interdum a. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam rutrum malesuada metus quis egestas.',
			'experiences'	=> 'PhP, Laravel',
			'created_at'	=> \Carbon\Carbon::now(),
			'updated_at'	=> \Carbon\Carbon::now(),
		]);

		//hl EDUCATION -------------------------------------------------------
		$education1 = DB::table('education')->insertGetId([
			'employee_id'	=> $employee1,
			'education'		=> 'JAVA SE 8 en OO Development Fast Track',
			'school'		=> 'Master IT',
			'date'			=> '2017-01-01',
			'created_at'	=> \Carbon\Carbon::now(),
			'updated_at'	=> \Carbon\Carbon::now()
		]);
		$education2 = DB::table('education')->insertGetId([
			'employee_id'	=> $employee1,
			'education'		=> 'HBO Business IT and Management',
			'school'		=> 'Noordelijke Hogeschool Leeuwarden',
			'date'			=> '2017-01-01',
			'created_at'	=> \Carbon\Carbon::now(),
			'updated_at'	=> \Carbon\Carbon::now()
		]);
		$education3 = DB::table('education')->insertGetId([
			'employee_id'	=> $employee1,
			'education'		=> 'Minor Masters of Change',
			'school'		=> 'Noordelijke Hogeschool Leeuwarden',
			'date'			=> '2016-01-01',
			'created_at'	=> \Carbon\Carbon::now(),
			'updated_at'	=> \Carbon\Carbon::now()
		]);
		$education4 = DB::table('education')->insertGetId([
			'employee_id'	=> $employee1,
			'education'		=> 'Stage Shanghai',
			'school'		=> 'Noordelijke Hogeschool Leeuwarden',
			'date'			=> '2015-01-01',
			'created_at'	=> \Carbon\Carbon::now(),
			'updated_at'	=> \Carbon\Carbon::now()
		]);
    }
}
