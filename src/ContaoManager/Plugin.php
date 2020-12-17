<?php

declare(strict_types=1);

/*
 * This file is part of form-field-access-protection-bundle.
 *
 * (c) 2020 Dr. Philip von der Borch <git@vonderborch.com>
 *
 * @license LGPL-3.0-or-later
 */

namespace Philvdb\FormFieldAccessProtectionBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Philvdb\FormFieldAccessProtectionBundle\FormFieldAccessProtectionBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(FormFieldAccessProtectionBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
