<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package FormFieldAccessProtection
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'CliffParnitzky',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'CliffParnitzky\FormFieldAccessProtection\FormFieldAccessProtectionDcaHelper' => 'system/modules/FormFieldAccessProtection/classes/FormFieldAccessProtectionDcaHelper.php',
	'CliffParnitzky\FormFieldAccessProtection\FormFieldAccessProtectionHook'      => 'system/modules/FormFieldAccessProtection/classes/FormFieldAccessProtectionHook.php',

	// Forms
	'CliffParnitzky\FormFieldAccessProtection\FormEmpty'                          => 'system/modules/FormFieldAccessProtection/forms/FormEmpty.php',
));
