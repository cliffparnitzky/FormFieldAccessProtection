<?php

declare(strict_types=1);

/*
 * This file is part of form-field-access-protection-bundle.
 *
 * (c) 2020 Dr. Philip von der Borch <git@vonderborch.com>
 *
 * @license LGPL-3.0-or-later
 */

namespace Philvdb\FormFieldAccessProtectionBundle\EventListener\ContaoHook;


use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\Form;
use Contao\FrontendUser;
use Contao\StringUtil;
use Contao\Widget;
use Philvdb\FormFieldAccessProtectionBundle\Form\FormEmpty;

class LoadFormFieldHook
{
    /**
     * @Hook("loadFormField")
     * @param Widget $objWidget
     * @param string $strFormId
     * @param array $arrFormData
     * @param Form $objForm
     * @return Widget
     */
    public function loadFormField(Widget $objWidget, string $strFormId, array $arrFormData, Form $objForm): Widget
    {
        // Show to guests only
        if ($objWidget->guests && FE_USER_LOGGED_IN && !BE_USER_LOGGED_IN && !$objWidget->protected)
        {
            return new FormEmpty();
        }

        // Protected element
        if (!BE_USER_LOGGED_IN && $objWidget->protected)
        {
            if (!FE_USER_LOGGED_IN)
            {
                return new FormEmpty();
            }

            $objFrontendUser = FrontendUser::getInstance();
            $groups = StringUtil::deserialize($objWidget->groups);

            if (!is_array($groups) || count($groups) < 1 || count(array_intersect($groups, $objFrontendUser->groups)) < 1)
            {
                return new FormEmpty();
            }
        }

        return $objWidget;
    }
}
