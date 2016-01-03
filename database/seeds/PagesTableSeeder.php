<?php

use Illuminate\Database\Seeder;
use Architech\Business;
use Architech\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $business = Business::find(1);

		$business->saveMany([
			new Page([
				'uri' => '',
				'title' => 'Web Architech',
				'content' => '
				{
					"data": [
						{
							"type": "text",
							"data": {
								"text": "Welcome to Web Architech. Building the internet, one site at a time."
							}
						},
						{
							"type": "video",
							"data": {
								"source": "youtube",
								"remote_id": "FR7wOGyAzpw"
							}
						}
					]
				}'
			]),
			new Page([
				'uri' => 'contact',
				'title' => 'Contact Us',
				'content' => '
				{
					"data": [
						{
							"type": "text",
							"data": {
								"text": "Give me all your info"
							}
						}
					]
				}'
			])
		]);
    }
}
