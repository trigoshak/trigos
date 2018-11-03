<?php

return array(
	'label' => array(
		'Aufbau',
		'Erzeugt Beschreibungen für multiple Abteilungen',
	),
	'types' => array('content'),
	'standardFields' => array('cssID'),
	'fields' => array(
		'boxes' => array(
			'label' => array('Abteilungen', ''),
			'elementLabel' => 'Abteilung %s',
			'inputType' => 'list',
			'fields' => array(
				'headline' => array(
					'label' => array('Abteilung', ''),
					'inputType' => 'text',
				),
				'text' => array(
					'label' => array('Anzahl Mitarbeiter', ''),
					'inputType' => 'text',
					'eval' => array('rte' => 'tinyMCE'),
				),
			),
		),
	),
);
