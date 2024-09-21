<?php

declare(strict_types=1);

/**
 * This file is part of the Ease TWBootstrap4 Widgets package
 *
 * https://github.com/VitexSoftware/php-ease-twbootstrap4-widgets
 *
 * (c) Vítězslav Dvořák <http://vitexsoftware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ease\TWB4\Widgets;

use Ease\Html\PairTag;

/**
 * Font Awesome Icon.
 *
 * @author vitex
 */
class FaIcon extends PairTag
{
    /**
     * Font Awesome Icon tag.
     *
     * @param string $icon          Font Awesome Icon class name (maybe without fa- prefix)
     * @param array  $tagProperties eg. ['aria-hidden'=>false]
     */
    public function __construct($icon, $tagProperties = null)
    {
        $tagProperties['class'] = 'fa fa-'.preg_replace('/^fa\-/i', '', $icon);
        parent::__construct('i', $tagProperties);
    }
}
