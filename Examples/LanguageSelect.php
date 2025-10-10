<?php

/**
 * EasePHP TWBootstrap4 Widgets - Language Selector Examples
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  2016-2024 Vitex Software
 */

require_once '../vendor/autoload.php';

// Initialize locale with available languages
$locale = \Ease\Locale::singleton('cs_CZ', '../i18n/', 'ease-twbootstrap4-widgets');

// Create page
$oPage = new \Ease\TWB4\WebPage('Language Selector Widgets - Bootstrap 4');

// Add Bootstrap container
$container = $oPage->addItem(new \Ease\Html\DivTag(null, ['class' => 'container mt-5']));

// Page title
$container->addItem(new \Ease\Html\H1Tag('Language Selector Examples'));
$container->addItem(new \Ease\Html\PTag('This page demonstrates different language selector widgets for Bootstrap 4.'));

// Divider
$container->addItem(new \Ease\Html\HrTag());

// LangLinks Example
$container->addItem(new \Ease\Html\H2Tag('LangLinks Widget'));
$container->addItem(new \Ease\Html\PTag('Navigation pills style language selector:'));
$container->addItem(new \Ease\Html\DivTag(
    new \Ease\TWB4\Widgets\LangLinks(),
    ['class' => 'mb-4']
));

// Divider
$container->addItem(new \Ease\Html\HrTag());

// LangSelect Example
$container->addItem(new \Ease\Html\H2Tag('LangSelect Widget'));
$container->addItem(new \Ease\Html\PTag('Dropdown style language selector:'));
$container->addItem(new \Ease\Html\DivTag(
    new \Ease\TWB4\Widgets\LangSelect(),
    ['class' => 'mb-4']
));

// Divider
$container->addItem(new \Ease\Html\HrTag());

// Custom styles example
$container->addItem(new \Ease\Html\H2Tag('Customization Examples'));

// LangLinks with tabs style
$container->addItem(new \Ease\Html\H3Tag('LangLinks as Tabs'));
$container->addItem(new \Ease\Html\DivTag(
    new \Ease\TWB4\Widgets\LangLinks(['class' => 'nav nav-tabs']),
    ['class' => 'mb-4']
));

// Multiple instances
$container->addItem(new \Ease\Html\H3Tag('Multiple Instances'));
$row = $container->addItem(new \Ease\Html\DivTag(null, ['class' => 'row mb-4']));
$row->addItem(new \Ease\Html\DivTag(
    [
        new \Ease\Html\PTag('In navbar:'),
        new \Ease\Html\DivTag(
            new \Ease\TWB4\Widgets\LangSelect('lang'),
            ['class' => 'navbar-nav']
        )
    ],
    ['class' => 'col-md-6']
));
$row->addItem(new \Ease\Html\DivTag(
    [
        new \Ease\Html\PTag('In button group:'),
        new \Ease\Html\DivTag(
            new \Ease\TWB4\Widgets\LangSelect('locale'),
            ['class' => 'btn-group']
        )
    ],
    ['class' => 'col-md-6']
));

// Information about current locale
$container->addItem(new \Ease\Html\HrTag());
$container->addItem(new \Ease\Html\H2Tag('Current Locale Information'));
$info = $container->addItem(new \Ease\Html\DivTag(null, ['class' => 'alert alert-info']));
$info->addItem(new \Ease\Html\StrongTag('Current locale: '));
$info->addItem(\Ease\Locale::$localeUsed ?? 'Not set');
$info->addItem(new \Ease\Html\BrTag());
$info->addItem(new \Ease\Html\StrongTag('Available languages: '));
$info->addItem(implode(', ', array_keys($locale->availble())));

$oPage->draw();

