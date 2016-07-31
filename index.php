<?php

return [

	'name' => 'bixie/perfectview_api',

	'type' => 'extension',

	'main' => 'Bixie\\PerfectviewApi\\PerfectviewApiModule',

	'autoload' => [

		'Bixie\\PerfectviewApi\\' => 'src'

	],
	'routes' => [

		'/perfectview_api' => [
			'name' => '@perfectview_api',
			'controller' => [
				'Bixie\\PerfectviewApi\\Controller\\PerfectviewApiController'
			]
		],
		'/api/perfectview_api' => [
			'name' => '@perfectview_api/api',
			'controller' => [
				'Bixie\\PerfectviewApi\\Controller\\PerfectviewApiApiController'
			]
		]

	],

	'resources' => [

		'bixie/perfectview_api:' => ''

	],

	'config' => [
		'api_key' => '',
		'database_id' => '',
		'user_id' => '',
		'search_types' => [],
		'person_types' => [],
		'organistation_types' => [],
		'person_type' => '',
		'person_relationship_type' => '',
		'communication_workflow' => '',
		'communication_workflow_step' => '',
		'communication_user' => ''
	],

	'menu' => [

		'perfectview_api' => [
			'label' => 'Perfectview Api',
			'icon' => 'packages/bixie/perfectview_api/icon.svg',
			'url' => '@perfectview_api',
			'access' => 'perfectview_api: use api',
			'active' => '@perfectview_api(/*)'
		],

		'perfectview_api: index' => [
			'label' => 'Api',
			'parent' => 'perfectview_api',
			'url' => '@perfectview_api',
			'access' => 'perfectview_api: use api',
			'active' => '@perfectview_api'
		],

		'perfectview_api: settings' => [
			'label' => 'Settings',
			'parent' => 'perfectview_api',
			'url' => '@perfectview_api/settings',
			'access' => 'perfectview_api: manage settings',
			'active' => '@perfectview_api/settings'
		]

	],

	'permissions' => [

		'perfectview_api: use api' => [
			'title' => 'Use API'
		],

		'perfectview_api: manage settings' => [
			'title' => 'Manage settings'
		]

	],

	'settings' => '@perfectview_api/settings',

	'events' => [
		'view.scripts' => function ($event, $scripts) use ($app) {
			$scripts->register('user-section-perfectview', 'bixie/perfectview_api:app/bundle/user-section-perfectview.js', ['~user-edit']);
		}

	]

];
