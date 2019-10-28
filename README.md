![EasePHP TWB4 Widgets Logo](https://raw.githubusercontent.com/VitexSoftware/php-ease-twbootstrap4-widgets/master/project-logo.png "Project Logo")

EasePHP Twitter Bootstrap4 Widgets
==================================

Object oriented PHP Framework for easy&fast writing small/middle sized apps.


[![Latest Stable Version](https://poser.pugx.org/vitexsoftware/ease-twbootstrap4-widgets/v/stable)](https://packagist.org/packages/vitexsoftware/ease-twbootstrap4-widgets)
[![Total Downloads](https://poser.pugx.org/vitexsoftware/ease-twbootstrap4-widgets/downloads)](https://packagist.org/packages/vitexsoftware/ease-twbootstrap4-widgets)
[![Latest Unstable Version](https://poser.pugx.org/vitexsoftware/ease-twbootstrap4-widgets/v/unstable)](https://packagist.org/packages/vitexsoftware/ease-twbootstrap4-widgets)
[![License](https://poser.pugx.org/vitexsoftware/ease-twbootstrap4-widgets/license)](https://packagist.org/packages/vitexsoftware/ease-twbootstrap4-widgets)
[![Monthly Downloads](https://poser.pugx.org/vitexsoftware/ease-twbootstrap4-widgets/d/monthly)](https://packagist.org/packages/vitexsoftware/ease-twbootstrap4-widgets)
[![Daily Downloads](https://poser.pugx.org/vitexsoftware/ease-twbootstrap4-widgets/d/daily)](https://packagist.org/packages/vitexsoftware/ease-twbootstrap4-widgets)

[![Latest Version](https://img.shields.io/github/release/VitexSoftware/php-ease-twbootstrap4-widgets.svg?style=flat-square)](https://github.com/VitexSoftware/php-ease-twbootstrap4-widgets/releases)
[![Software License](https://img.shields.io/badge/license-GPL-brightgreen.svg?style=flat-square)](https://github.com/VitexSoftware/php-ease-twbootstrap4-widgets/blob/master/LICENSE)
[![Build Status](https://img.shields.io/travis/VitexSoftware/php-ease-twbootstrap4-widgets/master.svg?style=flat-square)](https://travis-ci.org/VitexSoftware/php-ease-twbootstrap4-widgets)
[![Total Downloads](https://img.shields.io/packagist/dt/vitexsoftware/php-ease-twbootstrap4-widgets.svg?style=flat-square)](https://packagist.org/packages/vitexsoftware/php-ease-twbootstrap4-widgets)
[![Docker pulls](https://img.shields.io/docker/pulls/vitexsoftware/php-ease-twbootstrap4-widgets.svg)](https://hub.docker.com/r/vitexsoftware/php-ease-twbootstrap4-widgets/)
[![Downloads](https://img.shields.io/packagist/dt/vitexsoftware/php-ease-twbootstrap4-widgets.svg?style=flat-square)](https://packagist.org/packages/vitexsoftware/php-ease-twbootstrap4-widgets)
[![Latest stable](https://img.shields.io/packagist/v/vitexsoftware/php-ease-twbootstrap4-widgets.svg?style=flat-square)](https://packagist.org/packages/vitexsoftware/php-ease-twbootstrap4-widgets)

---

Bricks Included
===============

GDPR Logger
-----------

Log all GDPR related information into SQL table

MainPageMenu
------------

Well framed large icons

![MainPageMenu](https://raw.githubusercontent.com/VitexSoftware/php-ease-twbootstrap4-widgets/master/MainPageMenu.png "Main Page Menu screenshot")

```php
$mpmenu = new \Ease\ui\MainPageMenu();
$mpmenu->addMenuItem('logo.png', 'Caption', 'https://url/');
```

TwitterBootstrap Switch
-----------------------

Ease support for http://bootstrapswitch.com/ 

![TWBSwitch](https://raw.githubusercontent.com/VitexSoftware/php-ease-twbootstrap4-widgets/master/TWBSwitch.png "Main Page Menu screenshot")

```php
new Ease\ui\TWBSwitch('swname', true, 1,['onText' => 'YES', 'offText' => 'NO']);
```

The **libjs-bootstrap-switch** package with requied js/css assets is already present in our repository https://www.vitexsoftware.cz/repo.php



Installation
------------


Composer:
---------

    composer require vitexsoftware/php-ease-twbootstrap4-widgets


Older versions and its requirements https://packagist.org/packages/vitexsoftware/


For Debian, Ubuntu & friends please use repo:

    wget -O - http://v.s.cz/info@vitexsoftware.cz.gpg.key|sudo apt-key add -
    echo deb http://v.s.cz/ stable main > /etc/apt/sources.list.d/ease.list
    aptitude update
    aptitude install php-ease-twbootstrap4-widgets

In this case please add this to your app composer.json:

    "require": {
        "ease-bricks": "*"
    },
    "repositories": [
        {
            "type": "path",
            "url": "/usr/share/php/Ease",
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

GitHub: https://github.com/VitexSoftware/php-ease-twbootstrap4-widgets

Apigen Docs: https://www.vitexsoftware.cz/php-ease-twbootstrap4-widgets/
