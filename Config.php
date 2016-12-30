<?php

class Config {

	public static function Get($variable = null) {
		$config = include 'Settings.php';
		if ($variable) {
			$variable = explode('.', $variable);
			foreach ($variable as $each) {
				if (isset($config[$each])) {
					$config = $config[$each];
				} else {
					echo "$each Key Not Found..";
					return false;
				}
			}

			return $config;

		} else {
			return $config;
		}

	}

}
