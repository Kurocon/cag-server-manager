<?php

class PagesController extends AppController {

	public function index() {
		
	}

	public function display(){

	}

	public function test(){

		$servers = array(

			'Applejack' => array(
				'id' => 1,
				'name' => 'Applejack',
				'type' => 'Server 1',
				'services' => array(
					'www' => 'http://applejack.ctrlaltgame.com'
					)
				),
			'Twilight' => array(
				'id' => 2,
				'name' => 'Twilight',
				'type' => 'Server 2',
				'services' => array(
					'www' => 'http://twilight.ctrlaltgame.com'
					)
				),
			'RainbowDash' => array(
				'id' => 3,
				'name' => 'RainbowDash',
				'type' => 'Server 3',
				'services' => array(
					'www' => 'http://rainbowdash.ctrlaltgame.com'
					)
				),
			'Fluttershy' => array(
				'id' => 4,
				'name' => 'Fluttershy',
				'type' => 'Server 4',
				'services' => array(
					'www' => 'http://fluttershy.ctrlaltgame.com'
					)
				)
			);

		$pcs = array(

			'Celestia' => array(
				'id' => 1,
				'name' => 'Celestia',
				'type' => 'Gaming PC',
				'services' => array(
					'www' => 'http://celestia.ctrlaltgame.com'
					)
				),
			'Luna' => array(
				'id' => 2,
				'name' => 'Luna',
				'type' => 'Laptop',
				'services' => array(
					'www' => 'http://luna.ctrlaltgame.com'
					)
				),
			'Octavia' => array(
				'id' => 3,
				'name' => 'Octavia',
				'type' => 'Tablet',
				'services' => array(
					'www' => 'http://octavia.ctrlaltgame.com'
					)
				),
			'VinylScratch' => array(
				'id' => 4,
				'name' => 'VinylScratch',
				'type' => 'Phone',
				'services' => array(
					'www' => 'http://vinylscratch.ctrlaltgame.com'
					)
				),
			);

		$cameras = array(

			'Discord' => array(
				'id' => 1,
				'name' => 'Discord',
				'type' => 'Camera 1',
				'services' => array(
					'www' => 'http://discord.ctrlaltgame.com'
					)
				),
			'Chrysalis' => array(
				'id' => 2,
				'name' => 'Chrysalis',
				'type' => 'Camera 2',
				'services' => array(
					'www' => 'http://chrysalis.ctrlaltgame.com'
					)
				)
			);

		$others = array(

			'PinkiePi' => array(
				'id' => 1,
				'name' => 'PinkiePi',
				'type' => 'Raspberry Pi',
				'services' => array(
					'www' => 'http://pinkiepi.ctrlaltgame.com'
					)
				),

			'Derpy' => array(
				'id' => 2,
				'name' => 'Derpy',
				'type' => 'WiFi Hotspot',
				'services' => array(
					'www' => 'http://derpy.ctrlaltgame.com'
					)
				)

			);

		$this->set('servers', $servers);
		$this->set('pcs', $pcs);
		$this->set('cameras', $cameras);
		$this->set('others', $others);

	}
	
}
