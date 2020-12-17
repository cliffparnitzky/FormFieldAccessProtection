<?php

declare(strict_types=1);

/*
 * This file is part of form-field-access-protection-bundle.
 *
 * (c) 2020 Dr. Philip von der Borch <git@vonderborch.com>
 *
 * @license LGPL-3.0-or-later
 */

namespace Philvdb\FormFieldAccessProtectionBundle\EventListener\Dca;

use Contao\CoreBundle\ServiceAnnotation\Callback;

/**
 * Class FormFieldAccessProtectionDcaHelper
 *
 * Special helper class for dca
 * @copyright  Cliff Parnitzky 2015-2015
 * @author     Cliff Parnitzky
 * @package    Controller
 */
class FormFieldDcaListener
{
    /**
     * Extend all the DCA palettes of tl_form_field
     *
     * @Callback(table="tl_form_field", target="config.onload")
     */
    public static function extendAllPalettes()
    {
        foreach (array_keys($GLOBALS['TL_DCA']['tl_form_field']['palettes']) as $palette)
        {
            if ($palette == '__selector__')
            {
                continue;
            }
            $GLOBALS['TL_DCA']['tl_form_field']['palettes'][$palette] = str_replace('{expert_legend:hide}', '{protected_legend:hide},protected;{expert_legend:hide},guests', $GLOBALS['TL_DCA']['tl_form_field']['palettes'][$palette]);
        }
    }
}
