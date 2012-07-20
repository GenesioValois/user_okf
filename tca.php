<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['user_okf_photo_images'] = array (
	'ctrl' => $TCA['user_okf_photo_images']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,starttime,endtime,fe_group,image_id,cat_id,image_name,image_thumb_file,image_allow_comments,image_allow_itsme,image_comments,image_hits,image_votes'
	),
	'feInterface' => $TCA['user_okf_photo_images']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'starttime' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config'  => array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'default'  => '0',
				'checkbox' => '0'
			)
		),
		'endtime' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config'  => array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0',
				'range'    => array (
					'upper' => mktime(3, 14, 7, 1, 19, 2038),
					'lower' => mktime(0, 0, 0, date('m')-1, date('d'), date('Y'))
				)
			)
		),
		'fe_group' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.fe_group',
			'config'  => array (
				'type'  => 'select',
				'items' => array (
					array('', 0),
					array('LLL:EXT:lang/locallang_general.xml:LGL.hide_at_login', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.any_login', -2),
					array('LLL:EXT:lang/locallang_general.xml:LGL.usergroups', '--div--')
				),
				'foreign_table' => 'fe_groups'
			)
		),
		'image_id' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_images.image_id',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'cat_id' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_images.cat_id',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'image_name' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_images.image_name',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'required,trim',
			)
		),
		'image_thumb_file' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_images.image_thumb_file',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'trim',
			)
		),
		'image_allow_comments' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_images.image_allow_comments',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'image_allow_itsme' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_images.image_allow_itsme',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'image_comments' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_images.image_comments',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'image_hits' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_images.image_hits',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'image_votes' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_images.image_votes',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, image_id, cat_id, image_name, image_thumb_file, image_allow_comments, image_allow_itsme, image_comments, image_hits, image_votes')
	),
	'palettes' => array (
		'1' => array('showitem' => 'starttime, endtime, fe_group')
	)
);



$TCA['user_okf_photo_categories'] = array (
	'ctrl' => $TCA['user_okf_photo_categories']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,cat_id,cat_name,cat_description,cat_parent_id,cat_hits,cat_order,cat_hires,cat_since,cat_time,cat_location,cat_type,auth_viewcat,auth_vote,auth_postcomment,auth_votepic'
	),
	'feInterface' => $TCA['user_okf_photo_categories']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'cat_id' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_categories.cat_id',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'cat_name' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_categories.cat_name',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'required,trim',
			)
		),
		'cat_description' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_categories.cat_description',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
				'wizards' => array(
					'_PADDING' => 2,
					'RTE' => array(
						'notNewRecords' => 1,
						'RTEonly'       => 1,
						'type'          => 'script',
						'title'         => 'Full screen Rich Text Editing|Formatteret redigering i hele vinduet',
						'icon'          => 'wizard_rte2.gif',
						'script'        => 'wizard_rte.php',
					),
				),
			)
		),
		'cat_parent_id' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_categories.cat_parent_id',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'cat_hits' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_categories.cat_hits',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'cat_order' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_categories.cat_order',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'cat_hires' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_categories.cat_hires',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'cat_since' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_categories.cat_since',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'cat_time' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_categories.cat_time',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'cat_location' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_categories.cat_location',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'cat_type' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_categories.cat_type',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'auth_viewcat' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_categories.auth_viewcat',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'auth_vote' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_categories.auth_vote',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'auth_postcomment' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_categories.auth_postcomment',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'auth_votepic' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_photo_categories.auth_votepic',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, cat_id, cat_name, cat_description;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_userokf/rte/], cat_parent_id, cat_hits, cat_order, cat_hires, cat_since, cat_time, cat_location, cat_type, auth_viewcat, auth_vote, auth_postcomment, auth_votepic')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);



$TCA['user_okf_locations'] = array (
	'ctrl' => $TCA['user_okf_locations']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,starttime,endtime,id,cat_id,premium,name,typ,typ2,typ3,strasse,plz,ort,email,telefon,fax,url,offen,dresscode,age,beschreibung,hits,since'
	),
	'feInterface' => $TCA['user_okf_locations']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'starttime' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config'  => array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'default'  => '0',
				'checkbox' => '0'
			)
		),
		'endtime' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config'  => array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0',
				'range'    => array (
					'upper' => mktime(3, 14, 7, 1, 19, 2038),
					'lower' => mktime(0, 0, 0, date('m')-1, date('d'), date('Y'))
				)
			)
		),
		'id' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_locations.id',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'cat_id' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_locations.cat_id',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'premium' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_locations.premium',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'name' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_locations.name',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
			)
		),
		'typ' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_locations.typ',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
			)
		),
		'typ2' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_locations.typ2',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
			)
		),
		'typ3' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_locations.typ3',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'strasse' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_locations.strasse',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
			)
		),
		'plz' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_locations.plz',		
			'config' => array (
				'type' => 'input',	
				'size' => '10',	
				'max' => '5',	
				'eval' => 'trim',
			)
		),
		'ort' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_locations.ort',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
			)
		),
		'email' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_locations.email',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
			)
		),
		'telefon' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_locations.telefon',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
			)
		),
		'fax' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_locations.fax',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
			)
		),
		'url' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_locations.url',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
			)
		),
		'offen' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_locations.offen',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
				'wizards' => array(
					'_PADDING' => 2,
					'RTE' => array(
						'notNewRecords' => 1,
						'RTEonly'       => 1,
						'type'          => 'script',
						'title'         => 'Full screen Rich Text Editing|Formatteret redigering i hele vinduet',
						'icon'          => 'wizard_rte2.gif',
						'script'        => 'wizard_rte.php',
					),
				),
			)
		),
		'dresscode' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_locations.dresscode',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
			)
		),
		'age' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_locations.age',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
			)
		),
		'beschreibung' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_locations.beschreibung',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
				'wizards' => array(
					'_PADDING' => 2,
					'RTE' => array(
						'notNewRecords' => 1,
						'RTEonly'       => 1,
						'type'          => 'script',
						'title'         => 'Full screen Rich Text Editing|Formatteret redigering i hele vinduet',
						'icon'          => 'wizard_rte2.gif',
						'script'        => 'wizard_rte.php',
					),
				),
			)
		),
		'hits' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_locations.hits',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'since' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:user_okf/locallang_db.xml:user_okf_locations.since',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, id, cat_id, premium, name, typ, typ2, typ3, strasse, plz, ort, email, telefon, fax, url, offen;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_userokf/rte/], dresscode, age, beschreibung;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_userokf/rte/], hits, since')
	),
	'palettes' => array (
		'1' => array('showitem' => 'starttime, endtime')
	)
);
?>