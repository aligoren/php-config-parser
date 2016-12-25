<?php

return [
	'site' => [
			'title' 			=> 'Ali GÖREN',
			'description' 		=> 'Programming and Personal Blog',
			'author'			=> 'Ali GÖREN',
			'email' 			=> 'goren.ali@yandex.com',
			'url' 				=> 'http://localhost/config/',
			'admin' 			=> 'admin',
			'timezone' 			=> 'Europe/Istanbul',
			'debug' 			=> true,
			'version' 			=> '0.1',
			'social' => [
				'facebook' 	=> [
					'url' 		=> 'https://www.facebook.com/YOUR_PAGE',
					'username' 	=> 'YOUR_NAME',
				],
				'twitter' 	=> [
					'url' 		=> 'https://twitter.com/YOUR_PAGE',
					'username' 	=> 'YOUR_NAME',
				],
				'google' 	=> [
					'url' 		=> 'https://plus.google.com/+YOUR_PAGE',
					'username' 	=> 'YOUR_NAME',
				],
				'vk' 		=> [
					'url' 		=> 'https://vk.com/YOUR_PAGE',
					'username' 	=> 'YOUR_NAME',
				],
				'github' 	=> [
					'url' 		=> 'https://github.com/YOUR_PAGE',
					'username' 	=> 'YOUR_NAME',
				],
				'linkedin' 	=> [
					'url' 		=> 'https://www.linkedin.com/in/YOUR_PAGE',
					'username' 	=> 'YOUR_NAME',
				],
				'youtube' 	=> [
					'url' 		=> 'https://www.youtube.com/user/YOUR_PAGE',
					'username' 	=> 'YOUR_NAME',
				],
			],
	],
	'assets' => [
			'css' 				=> 'css',
			'js' 				=> 'js',
			'img' 				=> 'img',
	],
	'structure' => [
			'models' 			=> 'models',
			'controllers' 		=> 'controllers',
			'functions' 		=> 'functions',
			'classes' 			=> 'classes',
			'3rdparty' 			=> '3rdparty',
			'view' 				=> 'views',
	],
	'database' => [
			'connector' 		=> 'PDO',
			'driver' 			=> 'MySQL',
			'host' 				=> 'localhost',
			'user' 				=> 'root',
			'password' 			=> '',
			'database' 			=> 'NorthWind',
			'port' 				=> '3306',
			'charset' 			=> 'utf8',
			'collation' 		=> 'utf8_unicode_ci',
			'prefix' 			=> 'wp_', // inspired by wordpress
	],
	'mail' => [
			'smtp' 			=> [
				'host' 			=> 'mail.example.com',
				'username' 		=> 'mail@example.com',
				'password' 		=> '',
				'port' 			=> 587,
				'SSL' 			=> true,
				'TL' 			=> false,
			],
			'pop3' 			=> [
				'host' 			=> 'mail.example.com:110/pop3',
				'username' 		=> 'mail@example.com',
				'password' 		=> '',
			],
			'imap' 			=> [
				'host' 			=> 'mail.example.com:110',
				'username' 		=> 'mail@example.com',
				'password' 		=> '',
			],
	],
];