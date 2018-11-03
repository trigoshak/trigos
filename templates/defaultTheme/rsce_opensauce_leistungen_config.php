<?php

return array(
	'label' => array(
		'Leistungen',
		'Erzeugt nebeneinander dargestellte Boxen mit Bild und Text',
	),
	'types' => array('content'),
	'standardFields' => array('cssID'),
	'fields' => array(
		'label' => array('Laptop', ''),
		'image' => array(
			'label' => array('Laptop-Bild', ''),
			'inputType' => 'fileTree',
			'eval' => array(
				'fieldType' => 'radio',
				'filesOnly' => true,
				'extensions' => \Config::get('validImageTypes'),
			),
		),
		'boxes' => array(
			'label' => array('Boxen', ''),
			'elementLabel' => 'Box %s',
			'inputType' => 'list',
			'fields' => array(
				'image1' => array(
					'label' => array('Logo der Anwendung', ''),
					'inputType' => 'fileTree',
					'eval' => array(
						'fieldType' => 'radio',
						'filesOnly' => true,
						'extensions' => \Config::get('validImageTypes'),
					),
				),
				'image2' => array(
					'label' => array('Unbearbeitetes Bild', ''),
					'inputType' => 'fileTree',
					'eval' => array(
						'fieldType' => 'radio',
						'filesOnly' => true,
						'extensions' => \Config::get('validImageTypes'),
					),
				),
				'image3' => array(
					'label' => array('Bearbeitetes Bild', ''),
					'inputType' => 'fileTree',
					'eval' => array(
						'fieldType' => 'radio',
						'filesOnly' => true,
						'extensions' => \Config::get('validImageTypes'),
					),
				),
				'headline' => array(
					'label' => array('Software-Kategorien', ''),
					'inputType' => 'text',
				),
				'text' => array(
					'label' => array('Beschreibung/Beispiele', ''),
					'inputType' => 'textarea',
					'eval' => array('rte' => 'tinyMCE'),
				),
			),
		),
	),
);
