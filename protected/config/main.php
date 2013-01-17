<?php

// uncomment the following to define a path alias
 Yii::setPathOfAlias('local','/var/www/yii_salons');
 Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
 
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Hair on Show',
        'theme'=>'bootstrap',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.rights.*',//add this
		'application.modules.rights.components.*',//add this
    'application.helpers.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
//		'gii'=>array(
//			'class'=>'system.gii.GiiModule',
//			'password'=>'123',
//			// If removed, Gii defaults to localhost only. Edit carefully to taste.
//			'ipFilters'=>array('127.0.0.1','::1'),
//		),
                'gii' => array(
                    'generatorPaths' => array(
                        'bootstrap.gii',
                    ),
                ),
		'rights' => array(
		  'install' => false,
		),
	),

	// application components
	'components' => array(
            'bootstrap' => array(
                'class'=>'bootstrap.components.Bootstrap',
            ),
        'widgetFactory' => array(
            'widgets' => array(
                'SAImageDisplayer' => array(
                    'sizes' => array(
                        '50_50' => array('width' => 50, 'height' => 50),
                        '120_80' => array('width' => 120, 'height' => 80),
                    ),
                ),
            ),
        ),
        'user' => array(
            'class' => 'RWebUser',
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        'authManager' => array(
            'class' => 'RDbAuthManager', //add this
        ),
        'image' => array(
            'class' => 'application.extensions.image.CImageComponent',
            // GD or ImageMagick
            'driver' => 'GD',
        // ImageMagick setup path
//          'params'=>array('directory'=>'/usr/lib'),
        ),
        // uncomment the following to enable URLs in path-format
        /*
          'urlManager'=>array(
          'urlFormat'=>'path',
          'rules'=>array(
          '<controller:\w+>/<id:\d+>'=>'<controller>/view',
          '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
          '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
          ),
          ),
         */
        /*
          'db'=>array(
          'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
          ), */
        // uncomment the following to use a MySQL database

        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=yii_salon',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
    ),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
