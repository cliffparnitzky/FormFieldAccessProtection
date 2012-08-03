<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Cliff Parnitzky 2012
 * @author     Cliff Parnitzky
 * @package    FormFieldAccessProtection
 * @license    LGPL
 * @filesource
 */
 
/**
 * Add a palette to tl_form_field
 */
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['__selector__'][] = 'protected';
$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['protected'] = 'groups';

foreach ($GLOBALS['TL_DCA']['tl_form_field']['palettes'] as $name=>$palette) {
	$GLOBALS['TL_DCA']['tl_form_field']['palettes'][$name] = str_replace("{expert_legend:hide}", "{protected_legend:hide},protected;{expert_legend:hide},guests", $palette);
}

/**
 * Add fields to tl_form_field
 */

$GLOBALS['TL_DCA']['tl_form_field']['fields']['protected'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['protected'],
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)
);
$GLOBALS['TL_DCA']['tl_form_field']['fields']['groups'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['groups'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'foreignKey'              => 'tl_member_group.name',
	'eval'                    => array('mandatory'=>true, 'multiple'=>true)
);
$GLOBALS['TL_DCA']['tl_form_field']['fields']['guests'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['guests'],
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'checkbox'
);

?>