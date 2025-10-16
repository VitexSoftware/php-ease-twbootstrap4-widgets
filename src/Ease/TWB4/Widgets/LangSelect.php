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

/**
 * Bootstrap 4 Language Selector Dropdown.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class LangSelect extends \Ease\Html\DivTag
{
    /**
     * Language Selector Dropdown.
     *
     * @param string                $name       Input Name
     * @param array<string, string> $properties Additional properties
     */
    public function __construct(string $name = 'locale', array $properties = [])
    {
        if (!isset($properties['class'])) {
            $properties['class'] = 'dropdown';
        } else {
            $properties['class'] .= ' dropdown';
        }

        parent::__construct(null, $properties);

        $locale = \Ease\Locale::singleton();
        $availableLanguages = $locale->availble();
        $currentLocale = \Ease\Locale::$localeUsed;

        // Get current language name
        $currentLangName = '';

        if (isset($availableLanguages[$currentLocale])) {
            $currentLangName = substr($availableLanguages[$currentLocale], 0, strpos($availableLanguages[$currentLocale], ' (') ?: \strlen($availableLanguages[$currentLocale]));
        }

        // Create dropdown button
        $dropdownButton = new \Ease\Html\ButtonTag(
            [
                new FaIcon('globe'),
                ' ',
                $currentLangName ?: $currentLocale,
                ' ',
                new \Ease\Html\SpanTag('', ['class' => 'caret']),
            ],
            [
                'class' => 'btn btn-secondary dropdown-toggle',
                'type' => 'button',
                'id' => $this->getTagID().'-button',
                'data-toggle' => 'dropdown',
                'aria-haspopup' => 'true',
                'aria-expanded' => 'false',
            ],
        );

        // Create dropdown menu
        $dropdownMenu = new \Ease\Html\DivTag(null, [
            'class' => 'dropdown-menu',
            'aria-labelledby' => $this->getTagID().'-button',
        ]);

        // Add language options
        foreach ($availableLanguages as $code => $langInfo) {
            $langName = substr($langInfo, 0, strpos($langInfo, ' (') ?: \strlen($langInfo));

            // Parse existing query string
            $queryParams = $_GET;
            $queryParams[$name] = $code;
            $queryString = http_build_query($queryParams);

            // Get the base URL without query string
            $baseUrl = strtok($_SERVER['REQUEST_URI'], '?');
            $url = $baseUrl.($queryString ? '?'.$queryString : '');

            $linkClass = 'dropdown-item';

            if ($code === $currentLocale) {
                $linkClass .= ' active';
            }

            $dropdownMenu->addItem(new \Ease\Html\ATag(
                $url,
                _($langName),
                ['class' => $linkClass],
            ));
        }

        $this->addItem($dropdownButton);
        $this->addItem($dropdownMenu);
    }

    /**
     * Include required Bootstrap 4 assets.
     */
    public function finalize(): void
    {
        \Ease\TWB4\Part::twBootstrapize();
    }
}
