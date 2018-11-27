<?php

return array(
	'label' => array(
		'Leistungen',
		'Erzeugt nebeneinander dargestellte Boxen mit Bild und Text',
	),
	'types' => array('content'),
	'standardFields' => array('cssID'),
	'fields' => array(
		'boxes' => array(
			'label' => array('Boxen', ''),
			'elementLabel' => 'Box %s',
			'inputType' => 'list',
			'fields' => array(
				'image1' => array(
					'label' => array('Bild 1', ''),
					'inputType' => 'fileTree',
					'eval' => array(
						'fieldType' => 'radio',
						'filesOnly' => true,
						'extensions' => \Config::get('validImageTypes'),
					),
				),
				'image2' => array(
					'label' => array('Bild 2', ''),
					'inputType' => 'fileTree',
					'eval' => array(
						'fieldType' => 'radio',
						'filesOnly' => true,
						'extensions' => \Config::get('validImageTypes'),
					),
				),
				'image3' => array(
					'label' => array('Bild 3', ''),
					'inputType' => 'fileTree',
					'eval' => array(
						'fieldType' => 'radio',
						'filesOnly' => true,
						'extensions' => \Config::get('validImageTypes'),
					),
				),
				'headline' => array(
					'label' => array('Software-Kategorie', ''),
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
