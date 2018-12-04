<?php

return array(
	'label' => array(
		'Aufbau',
		'Erzeugt Beschreibungen für multiple Abteilungen',
	),
	'types' => array('content'),
	'standardFields' => array('cssID'),
		'fields' => array(
			'headline1' => array(
				'label' => array('1. Abteilung', ''),
				'inputType' => 'text',
			),
			// Für Animationen (Aufbau)
			'text1' => array(
				'label' => array('Anzahl Mitarbeiter', ''),
				'inputType' => 'text',
				'eval' => array('rte' => 'tinyMCE'),
			),
			'headline2' => array(
				'label' => array('2. Abteilung', ''),
				'inputType' => 'text',
			),
			'text2' => array(
				'label' => array('Anzahl Mitarbeiter', ''),
				'inputType' => 'text',
				'eval' => array('rte' => 'tinyMCE'),
			),
			'headline3' => array(
				'label' => array('3. Abteilung', ''),
				'inputType' => 'text',
			),
			'text3' => array(
				'label' => array('Anzahl Mitarbeiter', ''),
				'inputType' => 'text',
				'eval' => array('rte' => 'tinyMCE'),
			),
			'headline4' => array(
				'label' => array('4. Abteilung', ''),
				'inputType' => 'text',
			),
			'text4' => array(
				'label' => array('Anzahl Mitarbeiter', ''),
				'inputType' => 'text',
				'eval' => array('rte' => 'tinyMCE'),
			),

			// Für NACH Animationen (Aufbau)
			'text_aufbau' => array(
				'label' => array('Text für Aufbau', 'machen Sie bitte Absätze mit einem Enter zeichen!'),
				'inputType' => 'text',
				'eval' => array('rte' => 'tinyMCE'),
			),

			// Unternehmensgegenstand (ug)
			'text_ug' => array(
				'label' => array('Text für Unternehmensgegenstand', 'machen Sie bitte Absätze mit einem Enter zeichen!'),
				'inputType' => 'text',
				'eval' => array('rte' => 'tinyMCE'),
			),
		),
);
