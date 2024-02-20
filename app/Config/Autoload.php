<?php

namespace Config;

use CodeIgniter\Config\AutoloadConfig;

/**
 * -------------------------------------------------------------------
 * AUTOLOADER CONFIGURATION
 * -------------------------------------------------------------------
 *
 * This file defines the namespaces and class maps so the Autoloader
 * can find the files as needed.
 *
 * NOTE: If you use an identical key in $psr4 or $classmap, then
 * the values in this file will overwrite the framework's values.
 */
class Autoload extends AutoloadConfig
{
	/**
	 * -------------------------------------------------------------------
	 * Namespaces
	 * -------------------------------------------------------------------
	 * This maps the locations of any namespaces in your application to
	 * their location on the file system. These are used by the autoloader
	 * to locate files the first time they have been instantiated.
	 *
	 * The '/app' and '/system' directories are already mapped for you.
	 * you may change the name of the 'App' namespace if you wish,
	 * but this should be done prior to creating any namespaced classes,
	 * else you will need to modify all of those classes for this to work.
	 *
	 * Prototype:
	 *```
	 *   $psr4 = [
	 *       'CodeIgniter' => SYSTEMPATH,
	 *       'App'	       => APPPATH
	 *   ];
	 *```
	 * @var array<string, string>
	 */
	public $psr4 = [
		APP_NAMESPACE => APPPATH, // For custom app namespace
		'Config'      => APPPATH . 'Config',
		'JWT'      => APPPATH . 'ThirdParty/JWT',
		'Modules'     => ROOTPATH . 'modules',
		'Modules\Account'    => ROOTPATH . 'modules/Account',
		'Modules\Add'    => ROOTPATH . 'modules/Add',
		'Modules\Agent'    => ROOTPATH . 'modules/Agent',
		'Modules\Blog'    => ROOTPATH . 'modules/Blog',
		'Modules\Coupon'    => ROOTPATH . 'modules/Coupon',
		'Modules\Employee'    => ROOTPATH . 'modules/Employee',
		'Modules\Fitness'    => ROOTPATH . 'modules/Fitness',
		'Modules\Fleet'    => ROOTPATH . 'modules/Fleet',
		'Modules\Frontend'    => ROOTPATH . 'modules/Frontend',
		'Modules\Inquiry'    => ROOTPATH . 'modules/Inquiry',
		'Modules\Localize'    => ROOTPATH . 'modules/Localize',
		'Modules\Location'    => ROOTPATH . 'modules/Location',
		'Modules\Page'    => ROOTPATH . 'modules/Page',
		'Modules\Passanger'    => ROOTPATH . 'modules/Passanger',
		'Modules\Paymethod'    => ROOTPATH . 'modules/Paymethod',
		'Modules\Rating'    => ROOTPATH . 'modules/Rating',
		'Modules\Report'    => ROOTPATH . 'modules/Report',
		'Modules\Role'    => ROOTPATH . 'modules/Role',
		'Modules\Schedule'    => ROOTPATH . 'modules/Schedule',
		'Modules\Ticket'    => ROOTPATH . 'modules/Ticket',
		'Modules\Trip'    => ROOTPATH . 'modules/Trip',
		'Modules\Tax'    => ROOTPATH . 'modules/Tax',
		'Modules\User'    => ROOTPATH . 'modules/User',
		'Modules\Website'    => ROOTPATH . 'modules/Website',
	];

	/**
	 * -------------------------------------------------------------------
	 * Class Map
	 * -------------------------------------------------------------------
	 * The class map provides a map of class names and their exact
	 * location on the drive. Classes loaded in this manner will have
	 * slightly faster performance because they will not have to be
	 * searched for within one or more directories as they would if they
	 * were being autoloaded through a namespace.
	 *
	 * Prototype:
	 *```
	 *   $classmap = [
	 *       'MyClass'   => '/path/to/class/file.php'
	 *   ];
	 *```
	 * @var array<string, string>
	 */
	public $classmap = [
		'Language' => APPPATH .'/Libraries/Language.php'
	];

	/**
	 * -------------------------------------------------------------------
	 * Files
	 * -------------------------------------------------------------------
	 * The files array provides a list of paths to __non-class__ files
	 * that will be autoloaded. This can be useful for bootstrap operations
	 * or for loading functions.
	 *
	 * Prototype:
	 * ```
	 *	  $files = [
	 *	 	   '/path/to/my/file.php',
	 *    ];
	 * ```
	 * @var array<int, string>
	 */
	public $files = [];
}
