<?php

return [
	'title' => 'Menus',
	'single' => 'item',
	'model' => 'App\Menu',
	'columns' => [
		'id',
		'active',
		'title',
		'position',
	],
	'edit_fields' => [
		'active' => [
			'type' => 'bool',
		],
		'weight' =>  [
			'type' => 'number',
		],
		'title' => [
			'type' => 'text',
		],
		'url' => [
			'type' => 'text',
		],
		'position' => [
			'type' => 'enum',
			'options' => [
				'left',
				'right',
			],
		],
		/*'filter' => [
			'active' => [
				'type' => 'boolean',
			],
			'title' => [
				'type' => 'text',
			],
			'position' => [
				'type' => 'enum',
				'options' => [
					'left',
					'right',
				],
			],
		],*/
	],
];