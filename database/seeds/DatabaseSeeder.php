<?php
//use App\Login;
//use App\Information;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(SampleSiteSeeder::class);

    }

}
class SampleSiteSeeder extends Seeder 
	{
		public function run()
		{
			//DB::table('portfolios')->delete();
			//DB::table('portfoliotags')->delete();
			
			// Login::create(array(
			// 	'username'	=>	'admin',
			// 	'password'	=>	Hash::make('admin'),
			// 	'stat'	=>	'admin'
			// ));
			// Information::create(array(
			// 	'fname'		=> 'richard',
			// 	'mname'		=> 'gulpane',
			// 	'lname'		=> 'lacasandile',
			// 	'address'	=> '83 iba st qc',
			// 	'login_id' 	=> 1

			// ));

			DB::table('logins')->insert([
				'username'	=>	'admin',
				'password'	=>	Hash::make('admin'),
				'role'	=>	'admin'
				]);
			
			DB::table('informations')->insert([
				'fname'		=> 'richard',
				'mname'		=> 'gulpane',
				'lname'		=> 'lacasandile',
				'address'	=> '83 iba st qc',
				'login_id' 	=> 1
				]);
			

			DB::table('logins')->insert([
				'username'	=>	'gigi',
				'password'	=>	Hash::make('gigi'),
				'role'	=>	'employee'
				]);
			DB::table('informations')->insert([
				'fname'		=> 'fname',
				'mname'		=> 'mname',
				'lname'		=> 'lname',
				'address'	=> '83 iba st qc',
				'login_id' 	=> 2
				]);
			DB::table('employees')->insert([
				'login_id' => 2,
				'information_id' => 2,
				]);

			DB::table('departments')->insert([
				'name'	=> 'CS'
				]);
			DB::table('departments')->insert([
				'name'	=> 'IT'
				]);

			DB::table('buildings')->insert(
				[
					'building_name' => 'Main College Building'
				]);
			DB::table('buildings')->insert(
				[
					'building_name' => 'Academic Building'
				]);
			DB::table('buildings')->insert(
				[
					'building_name' => 'Dormitory'
				]);
			DB::table('buildings')->insert(
				[
					'building_name' => 'Gymnasium'
				]);
			DB::table('buildings')->insert(
				[
					'building_name' => 'Canteen'
				]);
			DB::table('buildings')->insert(
				[
					'building_name' => 'Center for Student Affairs'
				]);
			DB::table('buildings')->insert(
				[
					'building_name' => 'Bookstore'
				]);
			DB::table('buildings')->insert(
				[
					'building_name' => 'Athletic Office'
				]);
			DB::table('buildings')->insert(
				[
					'building_name' => 'Guard House'
				]);
			DB::table('buildings')->insert(
				[
					'building_name' => 'Maintenance Office'
				]);
			DB::table('buildings')->insert(
				[
					'building_name' => 'Soccer Field'
				]);
			DB::table('buildings')->insert(
				[
					'building_name' => 'Power House'
				]);
			DB::table('buildings')->insert(
				[
					'building_name' => 'Basketball Court'
				]);
			DB::table('buildings')->insert(
				[
					'building_name' => 'Tennis Court'
				]);
			DB::table('buildings')->insert(
				[
					'building_name' => 'Botanical Garden'
				]);
			DB::table('buildings')->insert(
				[
					'building_name' => 'Bus Garage'
				]);

			$this->command->info('Seed okay!');

		}
	}
