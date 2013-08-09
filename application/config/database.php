<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'default' => array
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
			/* * /
			'hostname'   => 'mysql.centralsigma.com.br',
			'database'   => 'centralsigma02',
			'username'   => 'centralsigma02',
			'password'   => 'S4k813042012',
			/* */
			'hostname'   => '186.202.121.119',
			'database'   => 'cpcm_teste',
			'username'   => 'webadmin',
			'password'   => 'webADMIN',
			/* * /
			'hostname'   => 'localhost',
			'database'   => 'cpcm',
			'username'   => 'root',
			'password'   => FALSE,
			'persistent' => FALSE,
			/* */
		),
		'table_prefix' => 'cwk_',
		'charset'      => 'utf8',
		'caching'      => FALSE,
		'profiling'    => TRUE,
	),
	
	'testedeconhecimento' => array
	(
		'type'       => 'MySQL',
		'connection' => array(
			'hostname'   => '186.202.121.119',
			'database'   => 'sigmaquiz',
			'username'   => 'webadmin',
			'password'   => 'webADMIN',
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
		'profiling'    => TRUE,
	),
	
	'remote' => array
	(
			'type'       => 'MySQL',
			'connection' => array(
				'hostname'   => 'mysql.centralsigma.com.br',
				'database'   => 'centralsigma02',
				'username'   => 'webadmin',
				'password'   => 'webADMIN',
			),
			'table_prefix' => 'cwk_',
			'charset'      => 'utf8',
			'caching'      => FALSE,
			'profiling'    => TRUE,
	),
);
