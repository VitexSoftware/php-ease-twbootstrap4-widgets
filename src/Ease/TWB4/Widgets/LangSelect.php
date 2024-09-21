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

/**
 * Description of LangSelect.
 *
 * @author vitex
 */
class LangSelect extends \Ease\Html\SelectTag
{
    public function __construct(string $name = 'locale', array $properties = [])
    {
        parent::__construct($name, \Ease\Locale::singleton()->availble(), \Ease\Locale::$localeUsed, $properties);
    }
}
