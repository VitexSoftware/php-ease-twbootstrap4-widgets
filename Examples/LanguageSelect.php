<?php

/**
 * EasePHPbricks - TwitterBootstrap Switch example
 *
 * 
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  2016-2021 Vitex Software
 */
include '../vendor/autoload.php';

$languager = \Ease\Locale::singleton('cs_CZ', '../i18n/', 'ease-twbootstrap4-widgets');

$oPage = new \Ease\TWB4\WebPage('TWB4 Lang Select - EasePHP Framework Widget ');

$oPage->addItem(new \Ease\TWB4\Widgets\LangLinks());

$oPage->addItem(new \Ease\TWB4\Widgets\LangSelect());

$oPage->draw();

