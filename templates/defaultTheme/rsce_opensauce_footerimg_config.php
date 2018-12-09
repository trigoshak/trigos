<?php

return array(
	'label' => array(
		'Footer Images',
		'Logo-Grafik',
	),
	'types' => array('module'),
	'standardFields' => array('cssID'),
	'fields' => array(
		'image' => array(
			'label' => array('Logo-Grafik', ''),
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
		'url' => array(
			'label' => array('Link-URL', 'URL der Seite auf die das Logo verlinkt. Lassen Sie dieses Feld leer um auf die Startseite zu verlinken. Beispiele: {{link_url::seitenalias}} (Alias, ID oder anderer Inserttag), http://example.com'),
			'inputType' => 'url',
			'eval' => array('tl_class' => 'w50'),
		),
	),
);
