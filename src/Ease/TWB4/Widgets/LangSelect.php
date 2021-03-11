<?php

/**
 * EasePHP Twitter Bootstrap4  - Availble Languages Select
 *
 * @link       https://fontawesome.com/
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  2020 Vitex Software
 */

namespace Ease\TWB4\Widgets;

/**
 * Description of LangSelect
 *
 * @author vitex
 */
class LangSelect extends \Ease\Html\SelectTag {

    public function __construct(string $name = 'locale', array $properties = []) {
        parent::__construct($name, \Ease\Locale::singleton()->availble(), \Ease\Locale::$localeUsed, $properties);
    }

}
