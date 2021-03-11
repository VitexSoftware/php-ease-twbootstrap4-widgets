<?php

/**
 * EasePHP Twitter Bootstrap4  - Password Input with Eye
 *
 * @link       https://codepen.io/Qanser/pen/dVRGJv
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  2020 Vitex Software
 */

namespace Ease\TWB4\Widgets;

use Ease\Functions;
use Ease\Html\ATag;
use Ease\Html\DivTag;
use Ease\Html\InputPasswordTag;
use Ease\Html\LabelTag;
use Ease\TWB4\Part;

class PasswordInputShowHide extends DivTag {

    /**
     *
     * @var unique widget identifier 
     */
    public $key = null;

    /**
     * Password Input with Eye
     * 
     * @param string $inputName
     * @param string $label
     * @param string $plaintext
     */
    public function __construct($inputName, $label, $plaintext = null) {
        $this->key = Functions::randomString();
        parent::__construct(new LabelTag($this->key, $label), ['class' => 'form-group']);
        $inputGroup = new DivTag(new InputPasswordTag($inputName, $plaintext,['class'=>'form-control']), ['class' => 'input-group', 'id' => $this->key]);
        $inputGroup->addItem(new DivTag(new ATag('', new FaIcon('eye-slash', ['aria-hidden' => 'true'])), ['class' => 'input-group-addon']));
        $this->addItem($inputGroup);
    }

    /**
     * Include requied assets in page
     */
    public function finalize() {
        Part::twBootstrapize();
        $this->addJavascript('
$("#' . $this->key . ' a").on("click", function (event) {
    event.preventDefault();
    if ($("#' . $this->key . ' input").attr("type") == "text") {
      $("#' . $this->key . ' input").attr("type", "password");
      $("#' . $this->key . ' i").addClass("fa-eye-slash");
      $("#' . $this->key . ' i").removeClass("fa-eye");
    } else if ($("#' . $this->key . ' input").attr("type") == "password") {
      $("#' . $this->key . ' input").attr("type", "text");
      $("#' . $this->key . ' i").removeClass("fa-eye-slash");
      $("#' . $this->key . ' i").addClass("fa-eye");
    }
  });            
            ');
    }

}
