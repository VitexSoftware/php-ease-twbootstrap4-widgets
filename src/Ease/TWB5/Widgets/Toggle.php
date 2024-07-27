<?php

/**
 * EasePHP Twitter Bootstrap  - Toggle
 *
 * @link       https://github.com/palcarazm/bootstrap5-toggle
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  2019-2024 Vitex Software
 */

namespace Ease\TWB5\Widgets;

class Toggle extends \Ease\Html\CheckboxTag
{
    /**
     * Properties holder
     * @var array
     */
    public $properties = [];

    /**
     * StyleSheet location
     * @var string
     */
    public $css = 'https://cdn.jsdelivr.net/npm/bootstrap5-toggle@5.1.1/css/bootstrap5-toggle.min.css';

    /**
     * JavaScript location
     * @var string
     */
    public $js = 'https://cdn.jsdelivr.net/npm/bootstrap5-toggle@5.1.1/js/bootstrap5-toggle.jquery.min.js';

    /**
     * Twitter Bootstrap switch
     *
     * @param string $name       tag name
     * @param bool   $checked    checkbox state
     * @param string $value      returned value
     * @param array  $properties tag parameters
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
     * Properties setter
     *
     * @param array $properties values to change
     */
    public function setProperties($properties)
    {
        $this->properties = array_merge($this->properties, $properties);
    }

    /**
     * Include required assets in page
     */
    public function finalize()
    {
        \Ease\Part::jQueryze();
        \Ease\TWB5\Part::twBootstrapize();
        $this->includeCss($this->css);
        $this->includeJavascript($this->js);
    }
}
