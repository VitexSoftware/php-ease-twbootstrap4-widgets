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

class MainPageMenu extends \Ease\TWB4\Row
{
    /**
     * Sem se přidávají položky.
     */
    public \Ease\Html\DivTag $row;

    /**
     * MainPage Menu.
     */
    public function __construct()
    {
        parent::__construct(
            null,
            [],
            [
                'class' => 'container',
                'style' => 'margin: auto;',
            ],
        );
    }

    /**
     * Add Item to mainpage Menu.
     *
     * @param string     $title       caption
     * @param string     $url         image link href url
     * @param string     $image       url
     * @param mixed      $description
     * @param null|mixed $buttonText
     * @param array      $properties  for Card
     *
     * @return \Ease\Html\ATag
     */
    public function addMenuItem($title, $url, $image, $description, $buttonText = null, $properties = [])
    {
        $icon = new \Ease\Html\ImgTag($image, $title, ['alt' => $title, 'class' => 'card-img-top']);
        //$cardHeader = new \Ease\Html\DivTag($title, ['class' => 'card-header']);
        $cardBody = new \Ease\Html\DivTag(new \Ease\Html\H5Tag($title), ['class' => 'card-body']);
        $cardBody->addItem(new \Ease\Html\PTag($description, ['class' => 'card-text']));
        $cardBody->addItem(new \Ease\TWB4\LinkButton($url, empty($buttonText) ? _('Visit') : $buttonText, 'primary btn-block'));
        $menuCard = new \Ease\TWB4\Card([$icon, $cardBody], $properties);

        return $this->addItem(new \Ease\TWB4\Col(3, $menuCard));
    }
}
