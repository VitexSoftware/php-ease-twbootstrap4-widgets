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
 * Bootstrap 4 Language Selector Links/Pills.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class LangLinks extends \Ease\Html\UlTag
{
    /**
     * Language Selector Links.
     *
     * @param array<string, string> $properties Additional properties
     */
    public function __construct(array $properties = [])
    {
        if (!isset($properties['class'])) {
            $properties['class'] = 'nav nav-pills';
        } else {
            $properties['class'] .= ' nav';
        }

        parent::__construct(null, $properties);

        $locale = \Ease\Locale::singleton();
        $availableLanguages = $locale->availble();
        $currentLocale = \Ease\Locale::$localeUsed;

        // Add language options as nav items
        foreach ($availableLanguages as $code => $langInfo) {
            $langName = substr($langInfo, 0, strpos($langInfo, ' (') ?: \strlen($langInfo));

            // Parse existing query string
            $queryParams = $_GET;
            $queryParams['locale'] = $code;
            $queryString = http_build_query($queryParams);

            // Get the base URL without query string
            $baseUrl = strtok($_SERVER['REQUEST_URI'], '?');
            $url = $baseUrl.($queryString ? '?'.$queryString : '');

            // Create nav item
            $navItem = new \Ease\Html\LiTag(null, ['class' => 'nav-item']);

            $linkClass = 'nav-link';

            if ($code === $currentLocale) {
                $linkClass .= ' active';
            }

            $link = new \Ease\Html\ATag(
                $url,
                $langName,
                ['class' => $linkClass],
            );

            $navItem->addItem($link);
            $this->addItem($navItem);
        }
    }

    /**
     * Include required Bootstrap 4 assets.
     */
    public function finalize(): void
    {
        \Ease\TWB4\Part::twBootstrapize();
    }
}
