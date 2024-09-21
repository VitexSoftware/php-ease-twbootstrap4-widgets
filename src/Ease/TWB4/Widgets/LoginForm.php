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
 * LoginForm widget.
 *
 * @author vitex
 */
class LoginForm extends \Ease\TWB4\Form
{
    public $loginInput;
    public $passwordInput;
    public $loginInputName = 'login';
    public $passwordInputName = 'password';
    public $formMethod = 'POST';
    public $formAction;

    /**
     * Login Form.
     *
     * @param string $username
     * @param string $password
     * @param array  $tagProperties
     */
    public function __construct($username = null, $password = null, $tagProperties = [])
    {
        parent::__construct('Login', $this->formAction, $this->formMethod, $formContents, $tagProperties);
        $this->addInput(new \Ease\Html\InputTextTag($this->loginInputName, $username), _('Username'));
        $this->addItem(new PasswordInputShowHide($this->passwordInputName, _('Password'), $password));
    }

    /**
     * Finally add submit button.
     */
    public function finalize(): void
    {
        \Ease\TWB4\Part::twBootstrapize();
        $this->addItem(new \Ease\Html\SubmitButton(_('Submit')));
    }
}
