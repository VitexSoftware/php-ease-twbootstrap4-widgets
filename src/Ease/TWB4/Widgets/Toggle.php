<?php
/**
 * EasePHP Twitter Bootstrap  - Toggle
 *
 * @link       https://gitbrent.github.io/bootstrap4-toggle
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  2019 Vitex Software
 */

namespace Ease\TWB4\Widgets;

class Toggle extends \Ease\Html\CheckboxTag
{
    /**
     * Properties holder
     * @var array
     */
    public $properties = [];

    /**
     * Stylesheet location
     * @var string 
     */
    public $css = 'https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/css/bootstrap4-toggle.min.css';
    
    /**
     * Javascript location
     * @var string
     */
    public $js = 'https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/js/bootstrap4-toggle.min.js';
    
    /**
     * Twitter Bootstrap switch
     *
     * @param string $name       tag name
     * @param bool   $checked    checkbox state
     * @param string $value      returned value
     * @param array  $properties tag parameters
     */
    public function __construct($name, $checked = false, $value = null,
                                $properties = null)
    {
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
     * Include requied assets in page
     */
    public function finalize()
    {
        \Ease\TWB4\Part::twBootstrapize();
        $this->includeCss($this->css);
        $this->includeJavascript($this->js);
    }
}
