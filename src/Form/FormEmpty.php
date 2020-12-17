<?php

declare(strict_types=1);

/*
 * This file is part of form-field-access-protection-bundle.
 *
 * (c) 2020 Dr. Philip von der Borch <git@vonderborch.com>
 *
 * @license LGPL-3.0-or-later
 */

namespace Philvdb\FormFieldAccessProtectionBundle\Form;

use Contao\Widget;

/**
 * Class FormEmpty
 *
 * Return an empty string as a Form Widget.
 *
 * @author     Cliff Parnitzky
 * @author     Dr. Philip von der Borch
 */
class FormEmpty extends Widget
{
	/**
	 * Generate the widget and return it as string
	 * @return string
	 */
	public function generate()
	{
		return '';
	}
}
