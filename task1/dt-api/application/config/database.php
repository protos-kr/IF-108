<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'alternate' => array
	(
		'type'       => 'MySQL',
		'connection' => array(
			/**
			 * The following options are available for MySQL:
			 *
			 * string   hostname     server hostname, or socket
			 * string   database     database name
			 * string   username     database username
			 * string   password     database password
			 * boolean  persistent   use persistent connections?
			 * array    variables    system variables as "key => value" pairs
			 *
			 * Ports and sockets may be appended to the hostname.
			 */
			'hostname'   => 'localhost',
			'database'   => 'dtapi2',
			'username'   => 'dtapi',
			'password'   => 'dtapi',
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
	),
	'default' => array(
		'type'       => 'PDO_MySQL',
		'connection' => array(
			/**
			 * The following options are available for PDO:
			 *
			 * string   dsn         Data Source Name
			 * string   username    database username
			 * string   password    database password
			 * boolean  persistent  use persistent connections?
			 */
			'dsn'        => 'mysql:host=192.168.33.100;dbname=dtapi2;charset=utf8',
			'username'   => 'username',
			'password'   => 'passwordQ1@',
			'persistent' => FALSE,
		),
		/**
		 * The following extra options are available for PDO:
		 *
		 * string   identifier  set the escaping identifier
		 */
		'table_prefix' => '',
		'charset'      => 'utf8',
		'options' 	   => array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'),
		'caching'      => FALSE,
	),
);
