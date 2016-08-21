<?php
/************************
*
*	Rys - Furkan Kadıoğlu
*	February - 2016	
*	http://github.com/furkankadioglu
*
*************************/

return [
	
	'path' => app_path('Modules'),

	'checkTime' => 30, // Minute 
	
	'modules' => 'App\Modules\\',
	
	'theme' => 'default',
	
	'adminTheme' => 'default',

    'enabledModules' => array(

    ),

    'baseModules' => array(
    	'Users',
    	'Main'
    )
];