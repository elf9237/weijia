<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	/*
	'connectionString' => 'mysql:host=localhost;dbname=testdrive',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
	*/
	'connectionString' => 'mysql:host=localhost;port=3306; dbname=cyapp',
            'emulatePrepare' => true,
            'enableProfiling' => true,
            'username' => 'root',
            'password' => '123',
            'charset' => 'utf8',
			'tablePrefix' => 'cy_', 
);