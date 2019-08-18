<?php
/**
 * EasePHPbricks - Mainpage Large Icons Menu
 *
 * 
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  2016-2019 Vitex Software
 */

namespace Ease\TWB4\Widgets;

class MainPageMenu extends \Ease\TWB4\Row
{
    /**
     * Sem se přidávají položky.
     *
     * @var \Ease\Html\DivTag
     */
    public $row = null;

    /**
     * MainPage Menu
     */
    public function __construct()
    {
        parent::__construct(
            null, null,
            [
                'class' => 'container',
                'style' => 'margin: auto;',
            ]
        );
    }

    /**
     * Add Item to mainpage Menu
     * 
     * @param string $title caption
     * @param string $url   image link href url
     * @param string $image url
     * @param string $decription additional text
     * 
     * @return \Ease\Html\ATag
     */ public function addMenuItem($title, $url, $image, $description , $buttonText = null )
    {
         
         $icon = new \Ease\Html\ImgTag( $image, $title, ['alt'=>$title,'class'=>'card-img-top']);
         new \Ease\Html\H5Tag($title);
         $cardBody = new \Ease\Html\DivTag( new \Ease\Html\H5Tag($title) ,['class'=>'card-body'] );
         $cardBody->addItem( new \Ease\Html\PTag( $description ,['class'=>'card-text'] ) );
         $cardBody->addItem( new \Ease\TWB4\LinkButton($url, empty($buttonText) ? _('Visit') : $buttonText, 'primary' ));
         $menuCard = new \Ease\TWB4\Card([ $icon, $cardBody ]);
         
        return $this->addItem(new \Ease\TWB4\Col(3, $menuCard));
    }

}
