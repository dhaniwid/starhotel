<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BookingEngineTableSeeder extends Seeder {

	public function run()
	{
		$countries = array('country_id' => 'ID',
			'country_name' => 'Indonesia',
			'country_name1' => ' ',
			'country_name2' => ' ',
			'country_province_alias' => ' ',
			'country_shortname' => 'IDN',
			'country_prefix_number' => '+62',
			'country_last_update' => '2013-05-27 11:25:33.409447');
		DB::table('countries')->insert($countries);

		$groups = array('id'=>'1',
			'name' => 'Admin',
			'permissions' => '{"superuser":1}',
			'created_at' => '2014-12-09',
			'updated_at' => '2014-12-09'
			);
		DB::table('groups')->insert($groups);

		$occupancies = array(
			array(
				'occupancy_id'=> '1',
				'occupancy_description' => 'Single'),
			array(
				'occupancy_id'=> '2',
				'occupancy_description' => 'Double'),
			array(
				'occupancy_id'=> '3',
				'occupancy_description' => 'Triple'),
			array(
				'occupancy_id'=> '4',
				'occupancy_description' => 'Quadruple'),
			array(
				'occupancy_id'=> '5',
				'occupancy_description' => 'Quintuple'),
			array(
				'occupancy_id'=> '6',
				'occupancy_description' => 'Sextuple'),
			array(
				'occupancy_id'=> '7',
				'occupancy_description' => 'Septuple'),
			array(
				'occupancy_id'=> '8',
				'occupancy_description' => 'Octuple'),
			array(
				'occupancy_id'=> '9',
				'occupancy_description' => 'Nonuple'),
			array(
				'occupancy_id'=> '10',
				'occupancy_description' => 'Decuple'),
			array(
				'occupancy_id'=> '11',
				'occupancy_description' => 'Undecuple'),
			array(
				'occupancy_id'=> '12',
				'occupancy_description' => 'Duodecuple')
		);
		DB::table('occupancies')->insert($occupancies);

		$permissions = array(
			array('id' => '1',
				'name' => 'Super User',
				'value' => 'superuser',
				'description' => 'All permissions',
				'created_at' => '2014-12-09 07:21:23',
				'updated_at' => '2014-12-09 07:21:23'
				),
			array('id' => '2',
				'name' => 'List Users',
				'value' => 'view-users-list',
				'description' => 'View the list of users',
				'created_at' => '2014-12-09 07:21:23',
				'updated_at' => '2014-12-09 07:21:23'
				),
			array('id' => '3',
				'name' => 'Create User',
				'value' => 'create-user',
				'description' => 'Create new user',
				'created_at' => '2014-12-09 07:21:23',
				'updated_at' => '2014-12-09 07:21:23'
				),
			array('id' => '4',
				'name' => 'Delete User',
				'value' => 'delete-user',
				'description' => 'Delete a user',
				'created_at' => '2014-12-09 07:21:23',
				'updated_at' => '2014-12-09 07:21:23'
				),
			array('id' => '5',
				'name' => 'Update User',
				'value' => 'update-user-info',
				'description' => 'Update a user profile',
				'created_at' => '2014-12-09 07:21:23',
				'updated_at' => '2014-12-09 07:21:23'
				),
			array('id' => '6',
				'name' => 'Update user group',
				'value' => 'user-group-management',
				'description' => 'Add/Remove a user in a group',
				'created_at' => '2014-12-09 07:21:23',
				'updated_at' => '2014-12-09 07:21:23'
				),
			array('id' => '7',
				'name' => 'Groups management',
				'value' => 'groups-management',
				'description' => 'Manage group (CRUD)',
				'created_at' => '2014-12-09 07:21:23',
				'updated_at' => '2014-12-09 07:21:23'
				),
			array('id' => '8',
				'name' => 'Permissions management',
				'value' => 'permissions-management',
				'description' => 'Manage permissions (CRUD)',
				'created_at' => '2014-12-09 07:21:23',
				'updated_at' => '2014-12-09 07:21:23'
				),
			array('id' => '9',
				'name' => 'Rooms management',
				'value' => 'rooms-management',
				'description' => 'Manage rooms(CRUD)',
				'created_at' => '2014-12-09 07:21:23',
				'updated_at' => '2014-12-09 07:21:23'
				)
			);
		DB::table('permissions')->insert($permissions);

		$roomcontents = array(
			array('roomfeature_id' => '1',
				'roomtype_id' => 'R61318',
				'checked' => 't'
				),
			array('roomfeature_id' => '2',
				'roomtype_id' => 'R61318',
				'checked' => 't'
				),
			array('roomfeature_id' => '3',
				'roomtype_id' => 'R61318',
				'checked' => 't'
				),
			array('roomfeature_id' => '9',
				'roomtype_id' => 'R61318',
				'checked' => 't'
				),
			array('roomfeature_id' => '2',
				'roomtype_id' => 'R61319',
				'checked' => 't'
				),
			array('roomfeature_id' => '3',
				'roomtype_id' => 'R61319',
				'checked' => 't'
				),
			array('roomfeature_id' => '4',
				'roomtype_id' => 'R61319',
				'checked' => 't'
				),
			array('roomfeature_id' => '5',
				'roomtype_id' => 'R61319',
				'checked' => 't'
				),
			array('roomfeature_id' => '6',
				'roomtype_id' => 'R61319',
				'checked' => 't'
				),
			array('roomfeature_id' => '7',
				'roomtype_id' => 'R61319',
				'checked' => 't'
				),
			array('roomfeature_id' => '8',
				'roomtype_id' => 'R61319',
				'checked' => 't'
				),
			array('roomfeature_id' => '9',
				'roomtype_id' => 'R61319',
				'checked' => 't'
				)
			);
		DB::table('room_contents')->insert($roomcontents);

		$roomavailability = array(
			array(
				'roomavailability_id' => '2015-02-23 20:22:33',
				'roomavailability_date' => '2015-03-04',
				'roomtype_id' => 'R61318',
				'roomavailability_number' => '1',
				'roomavailability_minstay' => '1'
				),
			array(
				'roomavailability_id' => '2015-02-23 20:22:33',
				'roomavailability_date' => '2015-03-05',
				'roomtype_id' => 'R61318',
				'roomavailability_number' => '1',
				'roomavailability_minstay' => '1'
				),
			array(
				'roomavailability_id' => '2015-02-23 20:22:33',
				'roomavailability_date' => '2015-03-06',
				'roomtype_id' => 'R61318',
				'roomavailability_number' => '1',
				'roomavailability_minstay' => '1'
				),
			array(
				'roomavailability_id' => '2015-02-23 20:22:33',
				'roomavailability_date' => '2015-03-07',
				'roomtype_id' => 'R61318',
				'roomavailability_number' => '1',
				'roomavailability_minstay' => '1'
				),
			array(
				'roomavailability_id' => '2015-02-23 20:22:33',
				'roomavailability_date' => '2015-03-08',
				'roomtype_id' => 'R61318',
				'roomavailability_number' => '1',
				'roomavailability_minstay' => '1'
				),
			array(
				'roomavailability_id' => '2015-02-23 20:22:33',
				'roomavailability_date' => '2015-03-09',
				'roomtype_id' => 'R61318',
				'roomavailability_number' => '1',
				'roomavailability_minstay' => '1'
				),
			array(
				'roomavailability_id' => '2015-02-23 20:22:33',
				'roomavailability_date' => '2015-03-10',
				'roomtype_id' => 'R61318',
				'roomavailability_number' => '1',
				'roomavailability_minstay' => '1'
				),
			array(
				'roomavailability_id' => '2015-02-23 20:22:33',
				'roomavailability_date' => '2015-03-11',
				'roomtype_id' => 'R61318',
				'roomavailability_number' => '1',
				'roomavailability_minstay' => '1'
				),
			array(
				'roomavailability_id' => '2015-02-23 20:22:33',
				'roomavailability_date' => '2015-03-12',
				'roomtype_id' => 'R61318',
				'roomavailability_number' => '1',
				'roomavailability_minstay' => '1'
				)
			);
		DB::table('roomavailability')->insert($roomavailability);

		$roomfeatures = array(
			array(
				'roomfeature_id' => '1',
				'roomfeature_name' => 'Air Conditioner',
				'roomfeature_description' => 'Air Conditioner Description'
				),
			array(
				'roomfeature_id' => '2',
				'roomfeature_name' => 'Bathtub',
				'roomfeature_description' => 'Bathtub Description'
				),
			array(
				'roomfeature_id' => '3',
				'roomfeature_name' => 'Shower',
				'roomfeature_description' => 'Shower'
				),
			array(
				'roomfeature_id' => '4',
				'roomfeature_name' => 'Bathrobes',
				'roomfeature_description' => 'Bathrobes'
				),
			array(
				'roomfeature_id' => '5',
				'roomfeature_name' => 'Hair Dryer',
				'roomfeature_description' => 'Hair Dryer'
				),
			array(
				'roomfeature_id' => '6',
				'roomfeature_name' => 'Ironing Board',
				'roomfeature_description' => 'Ironing Board'
				),
			array(
				'roomfeature_id' => '7',
				'roomfeature_name' => 'DVD/CD Player',
				'roomfeature_description' => 'DVD/CD Player'
				),
			array(
				'roomfeature_id' => '8',
				'roomfeature_name' => 'Satellite/Cable TV',
				'roomfeature_description' => 'Satellite/Cable TV'
				),
			array(
				'roomfeature_id' => '9',
				'roomfeature_name' => 'Coffee/Tea Maker',
				'roomfeature_description' => 'Coffee/Tea Maker'
				),
			array(
				'roomfeature_id' => '10',
				'roomfeature_name' => 'Mini Bar',
				'roomfeature_description' => 'Mini Bar'
				),
			array(
				'roomfeature_id' => '11',
				'roomfeature_name' => 'Separate Shower and Tub',
				'roomfeature_description' => 'Separate Shower and Tub'
				),
			);
		DB::table('roomfeatures')->insert($roomfeatures);

		$roomprices = array(
			array(
				'roomprice_datetime' => '2015-02-23 20:22:33',
				'roomprice_date' => '2015-03-04',
				'occupancy_id' => '1',
				'roomtype_id' => 'R61318',
				'roomprice_rate' => '4546575',
				'roomprice_breakfast' => '1',
				'roomprice_day' => 'Wed'
				),
			array(
				'roomprice_datetime' => '2015-02-23 20:22:33',
				'roomprice_date' => '2015-03-05',
				'occupancy_id' => '1',
				'roomtype_id' => 'R61318',
				'roomprice_rate' => '4546575',
				'roomprice_breakfast' => '1',
				'roomprice_day' => 'Thu'
				),
			array(
				'roomprice_datetime' => '2015-02-23 20:22:33',
				'roomprice_date' => '2015-03-06',
				'occupancy_id' => '1',
				'roomtype_id' => 'R61318',
				'roomprice_rate' => '4546575',
				'roomprice_breakfast' => '1',
				'roomprice_day' => 'Fri'
				),
			array(
				'roomprice_datetime' => '2015-02-23 20:22:33',
				'roomprice_date' => '2015-03-07',
				'occupancy_id' => '1',
				'roomtype_id' => 'R61318',
				'roomprice_rate' => '4546575',
				'roomprice_breakfast' => '1',
				'roomprice_day' => 'Sat'
				),
			array(
				'roomprice_datetime' => '2015-02-23 20:22:33',
				'roomprice_date' => '2015-03-08',
				'occupancy_id' => '1',
				'roomtype_id' => 'R61318',
				'roomprice_rate' => '4546575',
				'roomprice_breakfast' => '1',
				'roomprice_day' => 'Sun'
				)
			);
		DB::table('roomprices')->insert($roomprices);

		$roomtypes = array(
			array(
				'roomtype_id' => 'R61318',
				'roomtype_name' => 'One Bedroom Villa',
				'roomtype_description' => 'Set in a 200 sqm area with contemporary Balinese interiors, featuring 1 king bed, air conditioning, free wifi, living room, coffee machine, indoor and outdoor shower, bathtub with Jacuzzi, gazebo facing beautiful garden, and private swimming pool.',
				'roomtype_size' => '200',
				'roomtype_maxoccupancy' => '2',
				'roomtype_minimumavailability' => '32',
				'roomtype_extrabed' => '0',
				'roomtype_activestatus' => 'false',
				'roomtype_lowestprice' => '45465754'
				)
			);		
		DB::table('roomtypes')->insert($roomtypes);

		$surcharge = array(
			array('surcharge_id' => '1',
				'surcharge_description' => 'Extra Bed'
				),
			array('surcharge_id' => '2',
				'surcharge_description' => 'Breakfast'
				),
			array('surcharge_id' => '7',
				'surcharge_description' => 'Gala Dinner'
				),
			array('surcharge_id' => '8',
				'surcharge_description' => 'High Season'
				),
			array('surcharge_id' => '9',
				'surcharge_description' => 'Christmas Dinner'
				),
			array('surcharge_id' => '10',
				'surcharge_description' => 'Gala Dinner (Child)'
				),
			array('surcharge_id' => '11',
				'surcharge_description' => 'One Way Airport Transfer'
				)
			);
		DB::table('surcharge')->insert($surcharge);

		$users = array(
			array('id' => '1',
				'email' => 'ramadhani.widodo@yahoo.co.id',
				'password' => 'admin123',
				'activated' => 'true',
				'activated_at' => '2014-12-10 01:58:54',
				'created_at' => '2014-12-10 01:58:54',
				'updated_at' => '2014-12-10 01:58:54',
				'username' => 'admin'
				),
			array('id' => '2',
				'email' => 'widodo.apple@gmail.com',
				'password' => 'admin123',
				'activated' => 'true',
				'activated_at' => '2014-12-10 01:58:54',
				'created_at' => '2014-12-10 01:58:54',
				'updated_at' => '2014-12-10 01:58:54',
				'username' => 'superadmin'
				),
			);
		DB::table('users')->insert($users);

		$usergroups = array(
			array('user_id' => '1',
				'group_id' => '1'
				)
			);
		DB::table('users_groups')->insert($usergroups);

		$roomimages = array(
			array('roomimage_name' => 'amarterra_spa_2.jpg',
				'roomtype_id' => 'R61318',
				'roomimage_primary' => 'false',
				'roomimage_description' => '/img/R61318/amarterra_spa_2.jpg'
				),
			array('roomimage_name' => 'bathroom_2.jpg',
				'roomtype_id' => 'R61318',
				'roomimage_primary' => 'false',
				'roomimage_description' => '/img/R61318/bathroom_2.jpg'
				),
			array('roomimage_name' => 'one_bedroom_villa_(private_pool).jpg',
				'roomtype_id' => 'R61318',
				'roomimage_primary' => 'false',
				'roomimage_description' => '/img/R61318/one_bedroom_villa_(private_pool).jpg'
				),
			array('roomimage_name' => 'one_bedroom_villa.jpg',
				'roomtype_id' => 'R61318',
				'roomimage_primary' => 'true',
				'roomimage_description' => '/img/R61318/one_bedroom_villa.jpg'
				)
			);
		DB::table('roomimages')->insert($roomimages);
	}

}