<?php

return array(
	'label' => array(
		'Menu',
		'Erzeugt nebeneinander dargestellte Boxen mit Bild und Text',
	),
	'types' => array('module'),
	'standardFields' => array('cssID'),
	'fields' => array(
		'image' => array(
			'label' => array('Close-Grafik', ''),
			'inputType' => 'fileTree',
			'eval' => array(
				'fieldType' => 'radio',
				'filesOnly' => true,
				'extensions' => \Config::get('validImageTypes'),
			),
		),
		'image2' => array(
			'label' => array('Open-Grafik', ''),
			'inputType' => 'fileTree',
			'eval' => array(
				'fieldType' => 'radio',
				'filesOnly' => true,
				'extensions' => \Config::get('validImageTypes'),
			),
		),
	),
);
