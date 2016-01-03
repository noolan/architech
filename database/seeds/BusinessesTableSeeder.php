<?php

use Illuminate\Database\Seeder;
use Architech\Business;

class BusinessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $business = Business::create([
			'name'    => 'Web Architech',
			'url'     => 'webarchi.tech',
			'address' => '6579 Ranchero Drive',
			'city'    => 'Salmon Arm',
			'region'  => 'BC',
			'country' => 'Canada',
			'code'    => 'V1E 2R2',
			'phone1'  => '2503075535',
			'phone2'  => '2502999608',
			'email'   => 'questions@webarchi.tech',
			'hours'   => '{
				"hours": {
					"Monday": {
						"9:00": "16:30"
					},
					"Tuesday": {
						"9:00": "12:00",
						"13:00": "17:00"
					},
					"Wednesday": {
						"9:00": "12:00",
						"12:30": "17:00",
						"19:00": "23:00"
					},
					"Thursday": {
						"10:30": "13:00",
						"13:30": "17:30"
					},
					"Friday": {
						"7:00": "14:30"
					}
				}
			}'
		]);
    }
}
