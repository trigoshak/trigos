<?php

return array(
	'label' => array(
		'Home',
		'Home',
	),
	'types' => array('content'),
	'standardFields' => array('cssID'),
	'fields' => array(
		'image' => array(
			'label' => array('Hintergrund-Bild', ''),
			'inputType' => 'fileTree',
			'eval' => array(
				'fieldType' => 'radio',
				'filesOnly' => true,
				'extensions' => \Config::get('validImageTypes'),
			),
		),
		'logo' => array(
			'label' => array('Logo-Grafik', ''),
			'inputType' => 'fileTree',
			'eval' => array(
				'fieldType' => 'radio',
				'filesOnly' => true,
				'extensions' => \Config::get('validImageTypes'),
			),
		),
	),
);
