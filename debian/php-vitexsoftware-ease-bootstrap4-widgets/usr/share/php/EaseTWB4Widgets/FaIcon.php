<?php

/**
 * EasePHP Twitter Bootstrap4  - Font Awesome Icon
 *
 * @link       https://fontawesome.com/
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  2020 Vitex Software
 */

namespace Ease\TWB4\Widgets;

use Ease\Html\PairTag;

/**
 * Font Awesome Icon
 *
 * @author vitex
 */
class FaIcon extends PairTag {

    /**
     * Font Awesome Icon tag
     * 
     * @param string $icon Font Awesome Icon class name (maybe without fa- prefix)
     * 
     * @param array $tagProperties eg. ['aria-hidden'=>false]
     */
    public function __construct($icon, $tagProperties = null) {
        $tagProperties['class'] = 'fa fa-' . preg_replace('/^fa\-/i', '', $icon);
        parent::__construct('i', $tagProperties);
    }

}
