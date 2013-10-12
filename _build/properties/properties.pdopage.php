<?php

$properties = array();

$tmp = array(
	// namespace
	'plPrefix' => array(
		'type' => 'textfield',
		'value' => '',
	),
	'limit' => array(
		'type' => 'numberfield',
		'value' => 10,
	),
	'maxLimit' => array(
		'type' => 'numberfield',
		'value' => 100,
	),
	'offset' => array(
		'type' => 'numberfield',
		'value' => '',
	),

	'page' => array(
		'type' => 'numberfield',
		'value' => '',
	),
	'pageVarKey' => array(
		'type' => 'textfield',
		'value' => 'page',
	),
	'totalVar' => array(
		'type' => 'textfield',
		'value' => 'total',
	),
	'pageLimit' => array(
		'type' => 'numberfield',
		'value' => 2,
	),

	'element' => array(
		'type' => 'textfield',
		'value' => 'pdoResources',
	),
	// elementClass
	/*
	'class' => array(
		'type' => 'textfield',
		'value' => '',
	),
	*/

	'pageNavVar' => array(
		'type' => 'textfield',
		'value' => 'page.nav',
	),
	// pageNavTpl
	'tplPage' => array(
		'type' => 'textfield',
		'value' => '@INLINE <li><a href="[[+href]]">[[+pageNo]]</a></li>',
	),
	// pageNavOuterTpl
	'tplPageWrapper' => array(
		'type' => 'textfield',
		'value' => '@INLINE [[+first]][[+prev]][[+pages]][[+next]][[+last]]',
	),
	// pageActiveTpl
	'tplPageActive' => array(
		'type' => 'textfield',
		'value' => '@INLINE <li><a class="active" href="[[+href]]">[[+pageNo]]</a></li>',
	),
	// pageFirstTpl
	'tplPageFirst' => array(
		'type' => 'textfield',
		'value' => '@INLINE <li class="control"><a href="[[+href]]">&lt;&lt;</a></li>',
	),
	// pageLastTpl
	'tplPageLast' => array(
		'type' => 'textfield',
		'value' => '@INLINE <li class="control"><a href="[[+href]]">&gt;&gt;</a></li>',
	),
	// pagePrevTpl
	'tplPagePrev' => array(
		'type' => 'textfield',
		'value' => '@INLINE <li class="control"><a href="[[+href]]">&lt;</a></li>',
	),
	// pageNextTpl
	'tplPageNext' => array(
		'type' => 'textfield',
		'value' => '@INLINE <li class="control"><a href="[[+href]]">&gt;</a></li>',
	),
	// pageSkipTpl
	'tplPageSkip' => array(
		'type' => 'textfield',
		'value' => '@INLINE <li class="control"><span>...</span></li>',
	),


	'cache' => array(
		'type' => 'textfield',
		'options' => array(
			array('text' => 'Disabled','value' => ''),
			array('text' => 'URI','value' => 'uri'),
			array('text' => 'Custom','value' => 'custom'),
			array('text' => 'MODX','value' => 'modx'),
		),
		'value' => '',
	),
	'cachePageKey' => array(
		'type' => 'textfield',
		'value' => '',
	),
	'cache_key' => array(
		'type' => 'textfield',
		'value' => 'resource',
	),
	'cache_handler' => array(
		'type' => 'textfield',
		'value' => '',
	),
	'cache_expires' => array(
		'type' => 'numberfield',
		'value' => '',
	),

	// pageNavScheme
	'scheme' => array(
		'type' => 'list',
		'options' => array(
			array(
				'name' => '-1 (relative to site_url)',
				'value' => -1,
			),
			array(
				'name' => 'full (absolute, prepended with site_url)',
				'value' => 'full',
			),
			array(
				'name' => 'abs (absolute, prepended with base_url)',
				'value' => 'abs',
			),
			array(
				'name' => 'http (absolute, forced to http scheme)',
				'value' => 'http',
			),
			array(
				'name' => 'https (absolute, forced to https scheme)',
				'value' => 'https',
			),
		),
		'value' => -1,
	),

	'showEdgePages' => array(
		'type' => 'combo-boolean',
		'value' => true,
	),
	'toPlaceholder' => array(
		'type' => 'textfield',
		'value' => '',
	),
	/*
	'strictMode' => array(
		'type' => 'combo-boolean',
		'value' => true,
	),
	*/



);

foreach ($tmp as $k => $v) {
	$properties[] = array_merge(array(
			'name' => $k,
			'desc' => 'pdotools_prop_'.$k,
			'lexicon' => 'pdotools:properties',
		), $v
	);
}

return $properties;