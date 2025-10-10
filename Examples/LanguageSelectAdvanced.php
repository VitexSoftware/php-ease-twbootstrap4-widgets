<?php

/**
 * EasePHP TWBootstrap4 Widgets - Advanced Language Selector Examples
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  2024 Vitex Software
 */

require_once '../vendor/autoload.php';

// Initialize locale
$locale = \Ease\Locale::singleton('en_US', '../i18n/', 'ease-twbootstrap4-widgets');

// Create page
$oPage = new \Ease\TWB4\WebPage('Advanced Language Selector Examples');

// Add custom CSS for examples
$oPage->addCSS('
.example-section {
    margin-bottom: 3rem;
    padding: 2rem;
    background-color: #f8f9fa;
    border-radius: 0.5rem;
}
.navbar-example {
    margin-bottom: 2rem;
}
');

// Add container
$container = $oPage->addItem(new \Ease\Html\DivTag(null, ['class' => 'container mt-5']));

// Page header
$container->addItem(new \Ease\Html\H1Tag('Advanced Language Selector Examples'));
$container->addItem(new \Ease\Html\PTag('Demonstrating language selectors in different contexts'));

// Example 1: Language selector in navbar
$container->addItem(new \Ease\Html\H2Tag('Navbar Integration'));
$navbarSection = $container->addItem(new \Ease\Html\DivTag(null, ['class' => 'example-section']));

// Create navbar
$navbar = $navbarSection->addItem(new \Ease\Html\NavTag(null, [
    'class' => 'navbar navbar-expand-lg navbar-dark bg-dark navbar-example'
]));

$navbarContent = $navbar->addItem(new \Ease\Html\DivTag(null, ['class' => 'container-fluid']));

// Brand
$navbarContent->addItem(new \Ease\Html\ATag(
    '#',
    'MyApp',
    ['class' => 'navbar-brand']
));

// Navbar toggler
$navbarContent->addItem(new \Ease\Html\ButtonTag(
    new \Ease\Html\SpanTag(null, ['class' => 'navbar-toggler-icon']),
    [
        'class' => 'navbar-toggler',
        'type' => 'button',
        'data-bs-toggle' => 'collapse',
        'data-bs-target' => '#navbarNav',
        'aria-controls' => 'navbarNav',
        'aria-expanded' => 'false',
        'aria-label' => 'Toggle navigation'
    ]
));

// Navbar collapse
$collapse = $navbarContent->addItem(new \Ease\Html\DivTag(null, [
    'class' => 'collapse navbar-collapse',
    'id' => 'navbarNav'
]));

// Left menu
$leftMenu = $collapse->addItem(new \Ease\Html\UlTag(null, ['class' => 'navbar-nav me-auto']));
$leftMenu->addItem(new \Ease\Html\LiTag(
    new \Ease\Html\ATag('#', 'Home', ['class' => 'nav-link active']),
    ['class' => 'nav-item']
));
$leftMenu->addItem(new \Ease\Html\LiTag(
    new \Ease\Html\ATag('#', 'Features', ['class' => 'nav-link']),
    ['class' => 'nav-item']
));
$leftMenu->addItem(new \Ease\Html\LiTag(
    new \Ease\Html\ATag('#', 'About', ['class' => 'nav-link']),
    ['class' => 'nav-item']
));

// Right side with language selector
$rightSide = $collapse->addItem(new \Ease\Html\DivTag(null, ['class' => 'd-flex']));
$langDropdown = new \Ease\TWB4\Widgets\LangSelect();
$langDropdown->setTagProperty('class', 'dropdown ms-3');
$rightSide->addItem($langDropdown);

// Example 2: Language selector in card header
$container->addItem(new \Ease\Html\H2Tag('Card Header Integration'));
$cardSection = $container->addItem(new \Ease\Html\DivTag(null, ['class' => 'example-section']));

$card = $cardSection->addItem(new \Ease\Html\DivTag(null, ['class' => 'card']));

// Card header with language selector
$cardHeader = $card->addItem(new \Ease\Html\DivTag(null, ['class' => 'card-header d-flex justify-content-between align-items-center']));
$cardHeader->addItem(new \Ease\Html\SpanTag('Settings'));
$cardHeader->addItem(new \Ease\TWB4\Widgets\LangSelect());

// Card body
$cardBody = $card->addItem(new \Ease\Html\DivTag(null, ['class' => 'card-body']));
$cardBody->addItem(new \Ease\Html\H5Tag('Application Settings', ['class' => 'card-title']));
$cardBody->addItem(new \Ease\Html\PTag('Configure your application preferences here.'));

// Example 3: Language selector with custom styling
$container->addItem(new \Ease\Html\H2Tag('Custom Styled Selectors'));
$customSection = $container->addItem(new \Ease\Html\DivTag(null, ['class' => 'example-section']));

// Row with different button styles
$row = $customSection->addItem(new \Ease\Html\DivTag(null, ['class' => 'row']));

// Primary style
$col1 = $row->addItem(new \Ease\Html\DivTag(null, ['class' => 'col-md-4 mb-3']));
$col1->addItem(new \Ease\Html\H5Tag('Primary Style'));
$primarySelect = new \Ease\TWB4\Widgets\LangSelect();
// Modify the button class after creation
$col1->addItem($primarySelect);
$col1->addItem(new \Ease\Html\PTag('Use btn-primary class', ['class' => 'text-muted mt-2']));

// Success style
$col2 = $row->addItem(new \Ease\Html\DivTag(null, ['class' => 'col-md-4 mb-3']));
$col2->addItem(new \Ease\Html\H5Tag('Success Style'));
$successSelect = new \Ease\TWB4\Widgets\LangSelect();
$col2->addItem($successSelect);
$col2->addItem(new \Ease\Html\PTag('Use btn-success class', ['class' => 'text-muted mt-2']));

// Small size
$col3 = $row->addItem(new \Ease\Html\DivTag(null, ['class' => 'col-md-4 mb-3']));
$col3->addItem(new \Ease\Html\H5Tag('Small Size'));
$smallSelect = new \Ease\TWB4\Widgets\LangSelect();
$col3->addItem($smallSelect);
$col3->addItem(new \Ease\Html\PTag('Use btn-sm class', ['class' => 'text-muted mt-2']));

// Example 4: Inline language links
$container->addItem(new \Ease\Html\H2Tag('Inline Language Links'));
$inlineSection = $container->addItem(new \Ease\Html\DivTag(null, ['class' => 'example-section']));

// Text with inline language selector
$inlineSection->addItem(new \Ease\Html\PTag([
    'Choose your language: ',
    new \Ease\TWB4\Widgets\LangLinks(['class' => 'nav nav-pills d-inline-flex'])
]));

// Example 5: Footer integration
$container->addItem(new \Ease\Html\H2Tag('Footer Integration'));
$footerSection = $container->addItem(new \Ease\Html\DivTag(null, ['class' => 'example-section bg-dark text-white']));

$footerRow = $footerSection->addItem(new \Ease\Html\DivTag(null, ['class' => 'row']));

// Footer content
$footerCol1 = $footerRow->addItem(new \Ease\Html\DivTag(null, ['class' => 'col-md-4']));
$footerCol1->addItem(new \Ease\Html\H5Tag('About'));
$footerCol1->addItem(new \Ease\Html\PTag('Your awesome application'));

$footerCol2 = $footerRow->addItem(new \Ease\Html\DivTag(null, ['class' => 'col-md-4']));
$footerCol2->addItem(new \Ease\Html\H5Tag('Links'));
$footerCol2->addItem(new \Ease\Html\UlTag([
    new \Ease\Html\LiTag(new \Ease\Html\ATag('#', 'Privacy', ['class' => 'text-white'])),
    new \Ease\Html\LiTag(new \Ease\Html\ATag('#', 'Terms', ['class' => 'text-white']))
], ['class' => 'list-unstyled']));

$footerCol3 = $footerRow->addItem(new \Ease\Html\DivTag(null, ['class' => 'col-md-4']));
$footerCol3->addItem(new \Ease\Html\H5Tag('Language'));
$footerCol3->addItem(new \Ease\TWB4\Widgets\LangLinks(['class' => 'nav flex-column']));

// Add some JavaScript for button style customization
$oPage->addJavaScript("
// Customize button styles after page load
document.addEventListener('DOMContentLoaded', function() {
    // Find all dropdown buttons and customize them
    var buttons = document.querySelectorAll('.example-section .dropdown button');
    if (buttons.length >= 3) {
        buttons[buttons.length - 3].className = buttons[buttons.length - 3].className.replace('btn-secondary', 'btn-primary');
        buttons[buttons.length - 2].className = buttons[buttons.length - 2].className.replace('btn-secondary', 'btn-success');
        buttons[buttons.length - 1].className = buttons[buttons.length - 1].className.replace('btn-secondary', 'btn-secondary btn-sm');
    }
});
");

$oPage->draw();