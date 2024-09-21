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

use Ease\Functions;
use Ease\Html\ATag;
use Ease\Html\DivTag;
use Ease\Html\InputPasswordTag;
use Ease\Html\LabelTag;
use Ease\TWB4\Part;

class PasswordInputShowHide extends DivTag
{
    /**
     * @var unique widget identifier
     */
    public unique $key = null;

    /**
     * Password Input with Eye.
     *
     * @param string $inputName
     * @param string $label
     * @param string $plaintext
     */
    public function __construct($inputName, $label, $plaintext = null)
    {
        $this->key = Functions::randomString();
        parent::__construct(new LabelTag($this->key, $label), ['class' => 'form-group']);
        $inputGroup = new DivTag(new InputPasswordTag($inputName, $plaintext, ['class' => 'form-control']), ['class' => 'input-group', 'id' => $this->key]);
        $inputGroup->addItem(new DivTag(new ATag('', new FaIcon('eye-slash', ['aria-hidden' => 'true'])), ['class' => 'input-group-addon']));
        $this->addItem($inputGroup);
    }

    /**
     * Include requied assets in page.
     */
    public function finalize(): void
    {
        Part::twBootstrapize();
        $this->addJavascript(<<<'EOD'

$("#
EOD.$this->key.<<<'EOD'
 a").on("click", function (event) {
    event.preventDefault();
    if ($("#
EOD.$this->key.<<<'EOD'
 input").attr("type") == "text") {
      $("#
EOD.$this->key.<<<'EOD'
 input").attr("type", "password");
      $("#
EOD.$this->key.<<<'EOD'
 i").addClass("fa-eye-slash");
      $("#
EOD.$this->key.<<<'EOD'
 i").removeClass("fa-eye");
    } else if ($("#
EOD.$this->key.<<<'EOD'
 input").attr("type") == "password") {
      $("#
EOD.$this->key.<<<'EOD'
 input").attr("type", "text");
      $("#
EOD.$this->key.<<<'EOD'
 i").removeClass("fa-eye-slash");
      $("#
EOD.$this->key.<<<'EOD'
 i").addClass("fa-eye");
    }
  });

EOD);
    }
}
