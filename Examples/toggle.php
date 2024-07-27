<?php

/**
 * EasePHPbricks - Bootstrap5 Switch example
 *
 * 
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  2016-2024 VitexSoftware
 */
include '../vendor/autoload.php';

new \Ease\Locale();

$oPage = new \Ease\TWB5\WebPage('TWB5 Toggle - EasePHP Framework Widget ');

$oPage->addItem(new \Ease\TWB5\Widgets\Toggle('blue', true, 1,
                ['data-on' => 'YES', 'data-off' => 'NO']));

$oPage->addItem(new \Ease\TWB5\Widgets\Toggle('red', true, 1,
                ['data-on' => 'YES', 'data-off' => 'NO', 'data-onstyle' => 'danger']));

$oPage->addItem(new \Ease\TWB5\Widgets\Toggle('green', true, 1,
                ['data-on' => 'YES', 'data-off' => 'NO', 'data-onstyle' => 'warning', 'data-offstyle' => 'success']));

$oPage->draw();
