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
 * Show history of visited pages in app.
 *
 * @param mixed $content
 * @param array $properties
 */
class BrowsingHistory extends \Ease\Html\DivTag
{
    /**
     * Show history of visited pages in app.
     *
     * @param mixed $content
     * @param array $properties
     */
    public function __construct($content = null, $properties = null)
    {
        $webPage = \Ease\WebPage::singleton();

        if (null === $properties) {
            $properties = [];
        }

        $properties['id'] = 'history';

        if (!isset($_SESSION['history'])) {
            $_SESSION['history'] = [];
        }

        parent::__construct(null, $properties);

        $currentUrl = \Ease\Document::phpSelf(false);
        $currentTitle = $webPage->pageTitle;

        foreach ($_SESSION['history'] as $hid => $page) {
            if ($page['url'] === $currentUrl) {
                unset($_SESSION['history'][$hid]);
            }
        }

        array_unshift(
            $_SESSION['history'],
            ['url' => $currentUrl, 'title' => $currentTitle],
        );

        foreach ($_SESSION['history'] as $bookmark) {
            $this->addItem(new \Ease\Html\SpanTag(
                new \Ease\Html\ATag(
                    $bookmark['url'],
                    ['🔖 '.$bookmark['title']],
                ),
                ['class' => 'hitem'],
            ));
        }
    }

    /**
     * Add Css.
     */
    public function finalize(): void
    {
        $this->addCss(<<<'EOD'

            .hitem { background-color: #B5FFC4; margin: 5px; border-radius: 15px 50px 30px 5px; padding-left: 3px; padding-right: 10px; }
            #history { margin: 5px; }

EOD);
        parent::finalize();
    }
}
