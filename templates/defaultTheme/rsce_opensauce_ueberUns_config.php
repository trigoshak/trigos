<?php

return array(
	'label' => array(
		'Ueber uns',
		'Erzeugt nebeneinander dargestellte Boxen mit Bild und Text',
	),
	'types' => array('content'),
	'standardFields' => array('cssID'),
	'fields' => array(
		'image1' => array(
			'label' => array('Bild', ''),
			'inputType' => 'fileTree',
			'eval' => array(
				'fieldType' => 'radio',
				'filesOnly' => true,
				'extensions' => \Config::get('validImageTypes'),
			),
		),
		'kategorie1' => array(
			'label' => array('Kategorie 1', ''),
			'inputType' => 'text',
		),
		'kategorie1_text1' => array(
			'label' => array('Paragraph 1', ''),
			'inputType' => 'textarea',
			'eval' => array('rte' => 'tinyMCE'),
		),
		'kategorie1_text2' => array(
			'label' => array('Paragraph 2', ''),
			'inputType' => 'textarea',
			'eval' => array('rte' => 'tinyMCE'),
		),
		'image2' => array(
			'label' => array('Bild', ''),
			'inputType' => 'fileTree',
			'eval' => array(
				'fieldType' => 'radio',
				'filesOnly' => true,
				'extensions' => \Config::get('validImageTypes'),
			),
		),
		'kategorie2' => array(
			'label' => array('Kategorie 2', ''),
			'inputType' => 'text',
		),
		'kategorie2_text1' => array(
			'label' => array('Paragraph 1', ''),
			'inputType' => 'textarea',
			'eval' => array('rte' => 'tinyMCE'),
		),
		'kategorie2_text2' => array(
			'label' => array('Paragraph 2', ''),
			'inputType' => 'textarea',
			'eval' => array('rte' => 'tinyMCE'),
		),
		'image3' => array(
			'label' => array('Bild', ''),
			'inputType' => 'fileTree',
			'eval' => array(
				'fieldType' => 'radio',
				'filesOnly' => true,
				'extensions' => \Config::get('validImageTypes'),
			),
		),
		'kategorie3' => array(
			'label' => array('Kategorie 3', ''),
			'inputType' => 'text',
		),
		'kategorie3_text1' => array(
			'label' => array('Paragraph 1', ''),
			'inputType' => 'textarea',
			'eval' => array('rte' => 'tinyMCE'),
		),
		'kategorie3_text2' => array(
			'label' => array('Paragraph 2', ''),
			'inputType' => 'textarea',
			'eval' => array('rte' => 'tinyMCE'),
		),
	),
);
