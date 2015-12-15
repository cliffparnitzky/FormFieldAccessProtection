<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2015 Leo Feyer
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
 * @copyright  Cliff Parnitzky 2012-2015
 * @author     Cliff Parnitzky
 * @package    FormFieldAccessProtection
 * @license    LGPL
 * @filesource
 */
 
/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_form_field']['protected_legend'] = 'Access protection';

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_form_field']['protected'] = array('Protect form field', 'Show the form field to certain member groups only.');
$GLOBALS['TL_LANG']['tl_form_field']['groups']    = array('Allowed member groups', 'These member groups will be able to see the form field.');
$GLOBALS['TL_LANG']['tl_form_field']['guests']    = array('Show to guests only', 'Hide the form field if a member is logged in.'); 

?>