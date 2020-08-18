![EasePHP TWB4 Widgets Logo](https://raw.githubusercontent.com/VitexSoftware/php-ease-bootstrap4-widgets/master/project-logo.png "Project Logo")

EasePHP Twitter Bootstrap4 Widgets
==================================

Object oriented PHP Framework for easy&fast writing small/middle sized apps.


[![Latest Stable Version](https://poser.pugx.org/vitexsoftware/ease-bootstrap4-widgets/v/stable)](https://packagist.org/packages/vitexsoftware/ease-bootstrap4-widgets)
[![Total Downloads](https://poser.pugx.org/vitexsoftware/ease-bootstrap4-widgets/downloads)](https://packagist.org/packages/vitexsoftware/ease-bootstrap4-widgets)
[![Latest Unstable Version](https://poser.pugx.org/vitexsoftware/ease-bootstrap4-widgets/v/unstable)](https://packagist.org/packages/vitexsoftware/ease-bootstrap4-widgets)
[![License](https://poser.pugx.org/vitexsoftware/ease-bootstrap4-widgets/license)](https://packagist.org/packages/vitexsoftware/ease-bootstrap4-widgets)
[![Monthly Downloads](https://poser.pugx.org/vitexsoftware/ease-bootstrap4-widgets/d/monthly)](https://packagist.org/packages/vitexsoftware/ease-bootstrap4-widgets)
[![Daily Downloads](https://poser.pugx.org/vitexsoftware/ease-bootstrap4-widgets/d/daily)](https://packagist.org/packages/vitexsoftware/ease-bootstrap4-widgets)

[![Latest Version](https://img.shields.io/github/release/VitexSoftware/php-ease-bootstrap4-widgets.svg?style=flat-square)](https://github.com/VitexSoftware/php-ease-bootstrap4-widgets/releases)
[![Software License](https://img.shields.io/badge/license-GPL-brightgreen.svg?style=flat-square)](https://github.com/VitexSoftware/php-ease-bootstrap4-widgets/blob/master/LICENSE)
[![Build Status](https://img.shields.io/travis/VitexSoftware/php-ease-bootstrap4-widgets/master.svg?style=flat-square)](https://travis-ci.org/VitexSoftware/php-ease-bootstrap4-widgets)
[![Total Downloads](https://img.shields.io/packagist/dt/vitexsoftware/php-ease-bootstrap4-widgets.svg?style=flat-square)](https://packagist.org/packages/vitexsoftware/php-ease-bootstrap4-widgets)
[![Docker pulls](https://img.shields.io/docker/pulls/vitexsoftware/php-ease-bootstrap4-widgets.svg)](https://hub.docker.com/r/vitexsoftware/php-ease-bootstrap4-widgets/)
[![Downloads](https://img.shields.io/packagist/dt/vitexsoftware/php-ease-bootstrap4-widgets.svg?style=flat-square)](https://packagist.org/packages/vitexsoftware/php-ease-bootstrap4-widgets)
[![Latest stable](https://img.shields.io/packagist/v/vitexsoftware/php-ease-bootstrap4-widgets.svg?style=flat-square)](https://packagist.org/packages/vitexsoftware/php-ease-bootstrap4-widgets)

---

Bricks Included
===============

GDPR Logger
-----------

Log all GDPR related information into SQL table

MainPageMenu
------------

Well framed large icons

![MainPageMenu](https://raw.githubusercontent.com/VitexSoftware/php-ease-bootstrap4-widgets/master/MainPageMenu.png "Main Page Menu screenshot")

```php
$mpmenu = new \Ease\ui\MainPageMenu();
$mpmenu->addMenuItem('logo.png', 'Caption', 'https://url/');
```

TwitterBootstrap Toggle
-----------------------

Ease support for http://bootstrapswitch.com/ 

![Toggle](https://raw.githubusercontent.com/VitexSoftware/php-ease-bootstrap4-widgets/master/Toggle.png "Main Page Menu screenshot")

```php
new Ease\ui\Toggle('swname', true, 1,['onText' => 'YES', 'offText' => 'NO']);
```

Password Input with eye
-----------------------

PasswordInputShowHide();


Font Awesome Icon
-----------------

FaIcon();


Installation
------------


Composer:
---------

    composer require vitexsoftware/php-ease-bootstrap4-widgets


Older versions and its requirements https://packagist.org/packages/vitexsoftware/


For Debian, Ubuntu & friends please use repo:

    wget -O - http://v.s.cz/info@vitexsoftware.cz.gpg.key|sudo apt-key add -
    echo deb http://v.s.cz/ stable main > /etc/apt/sources.list.d/ease.list
    aptitude update
    aptitude install php-ease-bootstrap4-widgets

In this case please add this to your app composer.json:

    "require": {
        "ease-bricks": "*"
    },
    "repositories": [
        {
            "type": "path",
            "url": "/usr/share/php/EaseCore",
            "options": {
                "symlink": true
            }
        },
        {
            "type": "path",
            "url": "/usr/share/php/EaseTWB4",
            "options": {
                "symlink": true
            }
        }
    ]

Links
=====

Homepage: https://www.vitexsoftware.cz/ease.php

GitHub: https://github.com/VitexSoftware/php-ease-bootstrap4-widgets

Apigen Docs: https://www.vitexsoftware.cz/php-ease-bootstrap4-widgets/
