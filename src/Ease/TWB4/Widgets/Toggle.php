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

class Toggle extends \Ease\Html\CheckboxTag
{
    /**
     * Properties holder.
     *
     * @var array<string, string>
     */
    public array $properties = [];

    /**
     * StyleSheet location.
     */
    public string $css = 'https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css';

    /**
     * JavaScript location.
     */
    public string $js = 'https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js';

    /**
     * Twitter Bootstrap switch.
     *
     * @param string                $name       tag name
     * @param bool                  $checked    checkbox state
     * @param string                $value      returned value
     * @param array<string, string> $properties tag parameters
     */
    public function __construct(
        $name,
        $checked = false,
        $value = null,
        $properties = null
    ) {
        if (!isset($properties['data-toggle'])) {
            $properties['data-toggle'] = 'toggle';
        }

        if (!isset($properties['data-on'])) {
            $properties['data-on'] = _('Yes');
        }

        if (!isset($properties['data-off'])) {
            $properties['data-off'] = _('No');
        }

        parent::__construct($name, $checked, $value, $properties);
    }

    /**
     * Properties setter.
     *
     * @param array<string, string> $properties values to change
     */
    public function setProperties($properties): void
    {
        $this->properties = array_merge($this->properties, $properties);
    }

    /**
     * Include required assets in page.
     */
    public function finalize(): void
    {
        \Ease\TWB4\Part::twBootstrapize();
        $this->includeCss($this->css);
        $this->includeJavascript($this->js);
    }
}
