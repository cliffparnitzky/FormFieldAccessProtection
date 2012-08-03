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
 * Class FormFieldAccessProtectionHook
 *
 * Provide methods to handle display the field if allowed
 * @copyright  Cliff Parnitzky 2012
 * @author     Cliff Parnitzky
 * @package    Controller
 */
class FormFieldAccessProtectionHook extends Controller {
	/**
	 * Check if displaying is allowed
	 * @param string
	 * @return boolean
	 */
	public function loadFormField (Widget $objWidget, $strForm, $arrForm)
	{
	// Show to guests only
		if ($objWidget->guests && FE_USER_LOGGED_IN && !BE_USER_LOGGED_IN && !$objWidget->protected)
		{
			return new FormFieldAccessProtectionWidget();
		}

		// Protected element
		if (!BE_USER_LOGGED_IN && $objWidget->protected)
		{
			if (!FE_USER_LOGGED_IN)
			{
				return new FormFieldAccessProtectionWidget();
			}

			$this->import('FrontendUser', 'User');
			$groups = deserialize($objWidget->groups);
	
			if (!is_array($groups) || count($groups) < 1 || count(array_intersect($groups, $this->User->groups)) < 1)
			{
				return new FormFieldAccessProtectionWidget();
			}
		}
		
		return $objWidget;
	}
}

?>