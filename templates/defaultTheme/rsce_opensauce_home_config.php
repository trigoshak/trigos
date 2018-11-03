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
		'size' => array(
			'label' => $GLOBALS['TL_LANG']['tl_content']['size'],
			'inputType' => 'imageSize',
			'options' => \System::getImageSizes(),
			'reference' => &$GLOBALS['TL_LANG']['MSC'],
			'eval' => array(
				'rgxp' => 'digit',
				'includeBlankOption' => true,
			),
		),
		'alt' => array(
			'label' => array('Logo-Text', 'Alternativtext für Suchmaschinen und Browser ohne Bildunterstützung.'),
			'inputType' => 'text',
			'eval' => array('tl_class' => 'w50'),
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
