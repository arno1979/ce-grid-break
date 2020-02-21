<?php

/**
 * @copyright  Arno Schumacher 2020
 * @author     Arno Schumacher
 * @package    GridBreak
 * @license    LGPL-3.0+
 */

namespace Arno1979\GridBreak\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Arno1979\GridBreak\Arno1979GridBreakBundle;

/**
 * Plugin for the Contao Manager.
 *
 */
class Plugin implements BundlePluginInterface
{
    /**
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(Arno1979GridBreakBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}
