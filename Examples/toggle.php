<?php
/**
 * EasePHPbricks - TwitterBootstrap Switch example
 *
 * 
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  2016 Vitex Software
 */

include '../vendor/autoload.php';

$oPage = new \Ease\TWB4\WebPage('TWB4 Toggle - EasePHP Framework Widget ');

$oPage->addItem(new \Ease\TWB4\Widgets\Toggle('swname', true, 1,
    ['data-on' => 'YES', 'data-off' => 'NO']));

$oPage->addItem(new \Ease\TWB4\Widgets\Toggle('swname', true, 1,
    ['data-on' => 'YES', 'data-off' => 'NO','data-onstyle'=>'danger']));

$oPage->addItem(new \Ease\TWB4\Widgets\Toggle('swname', true, 1,
    ['data-on' => 'YES', 'data-off' => 'NO','data-onstyle'=>'warning','data-offstyle'=>'success']));


$oPage->draw();
