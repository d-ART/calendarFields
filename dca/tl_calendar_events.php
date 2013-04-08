<?php 
 
//Anzeige im Backend
$GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['default'] = str_replace('author;','author;CONNECTOR', $GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['default']);
$GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['default'] = str_replace('CONNECTOR','{field_title_eventinfo},field_orga_name,field_orga_link,field_orga_linkname,field_event_link,field_event_linkname;CONNECTOR', $GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['default']);
$GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['default'] = str_replace('CONNECTOR','{field_title_location},field_location_name,field_location_street,field_location_zip,field_location_city,field_location_country,field_location_link,field_location_linkname;CONNECTOR', $GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['default']);
$GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['default'] = str_replace('CONNECTOR','', $GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['default']);
 
 
 
/**
 * Location
 */
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['field_location_name'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_calendar_events']['location']['name'],
    'exclude'           => true,
    'search'            => true,
    'inputType'         => 'text',
    'eval'              => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'               => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['field_location_link'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_calendar_events']['location']['link'],
    'exclude'           => true,
    'search'            => true,
    'inputType'         => 'text',
    'eval'              => array('rgxp'=>'url', 'maxlength'=>255, 'tl_class'=>'w50'),
    'sql'               => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['field_location_linkname'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_calendar_events']['location']['linkname'],
    'exclude'           => true,
    'search'            => true,
    'inputType'         => 'text',
    'eval'              => array('rgxp'=>'url', 'maxlength'=>255, 'tl_class'=>'w50'),
    'sql'               => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['field_location_street'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_calendar_events']['location']['street'],
    'exclude'           => true,
    'search'            => true,
    'inputType'         => 'text',
    'eval'              => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'               => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['field_location_zip'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_calendar_events']['location']['zip'],
    'exclude'           => true,
    'search'            => true,
    'inputType'         => 'text',
    'eval'              => array('rgxp'=>'digit', 'maxlength'=>6, 'tl_class'=>'w50'),
    'sql'               => "varchar(6) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['field_location_city'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_calendar_events']['location']['city'],
    'exclude'           => true,
    'search'            => true,
    'inputType'         => 'text',
    'eval'              => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'               => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['field_location_country'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_calendar_events']['location']['country'],
    'exclude'           => true,
    'search'            => true,
    'inputType'         => 'text',
    'eval'              => array('maxlength'=>255),
    'sql'               => "varchar(255) NOT NULL default ''"
);

/**
 * Veranstalter
 */
$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['field_orga_name'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_calendar_events']['orga']['name'],
    'exclude'           => true,
    'search'            => true,
    'inputType'         => 'text',
    'eval'              => array('maxlength'=>255),
    'sql'               => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['field_orga_link'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_calendar_events']['orga']['link'],
    'exclude'           => true,
    'search'            => true,
    'inputType'         => 'text',
    'eval'              => array('rgxp'=>'url', 'maxlength'=>255, 'tl_class'=>'w50'),
    'sql'               => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['field_orga_linkname'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_calendar_events']['orga']['linkname'],
    'exclude'           => true,
    'search'            => true,
    'inputType'         => 'text',
    'eval'              => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'               => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['field_event_link'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_calendar_events']['event']['link'],
    'exclude'           => true,
    'search'            => true,
    'inputType'         => 'text',
    'eval'              => array('rgxp'=>'url', 'maxlength'=>255, 'tl_class'=>'w50'),
    'sql'               => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['field_event_linkname'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_calendar_events']['event']['linkname'],
    'exclude'           => true,
    'search'            => true,
    'inputType'         => 'text',
    'eval'              => array('rgxp'=>'url', 'maxlength'=>255, 'tl_class'=>'w50'),
    'sql'               => "varchar(255) NOT NULL default ''"
);