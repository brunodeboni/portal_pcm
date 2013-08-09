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
);
