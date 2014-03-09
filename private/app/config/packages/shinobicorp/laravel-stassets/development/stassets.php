<?php

return array (
	// This enables the CDN.
	'cdn_enabled'=>true,

	// This rotates through the list of CDN's each time Stasset::getCDN() is called.
	'cdn_rotate_selection'=>false,

	// This selects a default CDN to use when _cdn_rotate_selection is set to false - it is optional.
	'cdn_default'=>'cdn1',

	// This is the list of CDN's to use.
	'cdn'=>array(
		'cdn1'=>'//giles-deacon.s3.amazonaws.com',
	),

	'css'=>'style.css',
	'js'=>'script.css'
);