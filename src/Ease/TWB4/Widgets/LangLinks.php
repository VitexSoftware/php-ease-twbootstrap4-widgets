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
class LangLinks extends \Ease\Html\UlTag
{
    public function __construct($properties = [])
    {
        parent::__construct(null, $properties);

        foreach (\Ease\Locale::singleton()->availble() as $code => $name) {
            $name = substr($name, 0, strpos($name, ' ('));

            if (\Ease\Locale::$localeUsed === $code) {
                $this->addItemSmart(new \Ease\Html\StrongTag(new \Ease\Html\ATag(
                    '?locale='.$code,
                    $name,
                )));
            } else {
                $this->addItemSmart(new \Ease\Html\ATag('?locale='.$code, $name));
            }
        }
    }
}
