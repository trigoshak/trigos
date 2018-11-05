<?php

return array(
	'label' => array(
		'Jobs',
		'Erzeugt nebeneinander dargestellte Boxen mit Bild und Text',
	),
	'types' => array('content'),
	'standardFields' => array('cssID'),
	'fields' => array(
		'headline' => array(
			'label' => array('Überschrift', ''),
			'inputType' => 'text',
			'eval' => array('rte' => 'tinyMCE'),
		),
		'text' => array(
			'label' => array('Text', 'Absatztext'),
			'inputType' => 'textarea',
			'eval' => array('tl_class' => 'w50'),
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
		'boxes' => array(
			'label' => array('Box', ''),
			'elementLabel' => 'Box %s',
			'inputType' => 'list',
			'fields' => array(
				'headline' => array(
					'label' => array('Überschrift', ''),
					'inputType' => 'text',
				),
				'image' => array(
					'label' => array('Bild', ''),
					'inputType' => 'fileTree',
					'eval' => array(
						'fieldType' => 'radio',
						'filesOnly' => true,
						'extensions' => \Config::get('validImageTypes'),
					),
				),
				'subheadline' => array(
					'label' => array('Kategorie Überschrift', ''),
					'inputType' => 'text',
					'eval' => array('rte' => 'tinyMCE'),
				),
			),
		),
	),
);
