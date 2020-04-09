<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ease\TWB4\Widgets;

/**
 * LoginForm widget
 *
 * @author vitex
 */
class LoginForm extends \Ease\TWB4\Form {

    public $loginInput = null;
    public $passwordInput = null;
    public $loginInputName = 'login';
    public $passwordInputName = 'password';
    public $formMethod = 'POST';
    public $formAction = null;

    /**
     * Login Form
     * @param string $username
     * @param string $password
     * @param array $tagProperties
     */
    public function __construct($username = null, $password = null, $tagProperties = array()) {
        parent::__construct('Login', $this->formAction, $this->formMethod, $formContents, $tagProperties);
        $this->addInput(new \Ease\Html\InputTextTag($this->loginInputName, $username), _('Username'));
        $this->addItem(new PasswordInputShowHide($this->passwordInputName, _('Password'), $password));
    }

    /**
     * Finally add submit button
     */
    public function finalize() {
        \Ease\TWB4\Part::twBootstrapize();
        $this->addItem(new \Ease\Html\SubmitButton(_('Submit')));
    }

}
