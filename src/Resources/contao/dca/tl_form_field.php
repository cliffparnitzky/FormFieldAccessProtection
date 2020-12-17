<?php

declare(strict_types=1);

/*
 * This file is part of form-field-access-protection-bundle.
 *
 * (c) 2020 Dr. Philip von der Borch <git@vonderborch.com>
 *
 * @license LGPL-3.0-or-later
 */

/**
 * Add a palette to tl_form_field
 */
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['__selector__'][] = 'protected';
$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['protected'] = 'groups';

/**
 * Add fields to tl_form_field
 */
$GLOBALS['TL_DCA']['tl_form_field']['fields']['protected'] =
    [
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['protected'],
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'checkbox',
	'eval'                    => ['submitOnChange'=>true],
	'sql'                     => "char(1) NOT NULL default ''"
    ];
$GLOBALS['TL_DCA']['tl_form_field']['fields']['groups'] =
    [
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['groups'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'foreignKey'              => 'tl_member_group.name',
	'eval'                    => ['mandatory'=>true, 'multiple'=>true],
	'sql'                     => "blob NULL"
    ];
$GLOBALS['TL_DCA']['tl_form_field']['fields']['guests'] =
    [
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['guests'],
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'checkbox',
	'sql'                     => "char(1) NOT NULL default ''"
    ];
