<?php

return array(
	'label' => array(
		'Jobs',
		'Erzeugt nebeneinander dargestellte Boxen mit Bild und Text',
	),
	'types' => array('content'),
	'standardFields' => array('cssID', 'headline', 'columns'),
	'fields' => array(
		'size' => array(
			'label' => array('Bildbreite und Bildhöhe', ''),
			'inputType' => 'imageSize',
			'options' => \System::getImageSizes(),
			'reference' => &$GLOBALS['TL_LANG']['MSC'],
			'eval' => array(
				'rgxp' => 'digit',
				'includeBlankOption' => true,
			),
		),
		'boxes' => array(
			'label' => array('Boxen', ''),
			'elementLabel' => 'Box %s',
			'inputType' => 'list',
			'fields' => array(
				'image' => array(
					'label' => array('Bild', ''),
					'inputType' => 'fileTree',
					'eval' => array(
						'fieldType' => 'radio',
						'filesOnly' => true,
						'extensions' => \Config::get('validImageTypes'),
					),
				),
				'headline' => array(
					'label' => array('Überschrift', ''),
					'inputType' => 'text',
				),
				'text' => array(
					'label' => array('Beschreibung', ''),
					'inputType' => 'textarea',
					'eval' => array('rte' => 'tinyMCE'),
				),
				'url' => array(
					'label' => array('URL', 'Beispiele: {{link_url::seitenalias}} (Alias, ID oder anderer Inserttag), http://example.com'),
					'inputType' => 'url',
					'eval' => array('tl_class' => 'w50'),
				),
				'newWindow' => array(
					'label' => $GLOBALS['TL_LANG']['MSC']['target'],
					'inputType' => 'checkbox',
					'eval' => array('tl_class' => 'w50 m12'),
				),
			),
		),
	),
);
