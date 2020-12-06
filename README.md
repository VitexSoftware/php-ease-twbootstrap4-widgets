![EasePHP TWB4 Widgets Logo](project-logo.png?raw=true "Project Logo")

EasePHP Twitter Bootstrap4 Widgets
==================================

Object oriented PHP Framework for easy&fast writing small/middle sized apps.

[![Latest Stable Version](https://poser.pugx.org/vitexsoftware/ease-twbootstrap4-widgets/v)](//packagist.org/packages/vitexsoftware/ease-twbootstrap4-widgets) 
[![Total Downloads](https://poser.pugx.org/vitexsoftware/ease-twbootstrap4-widgets/downloads)](//packagist.org/packages/vitexsoftware/ease-twbootstrap4-widgets) 
[![Latest Unstable Version](https://poser.pugx.org/vitexsoftware/ease-twbootstrap4-widgets/v/unstable)](//packagist.org/packages/vitexsoftware/ease-twbootstrap4-widgets) 
[![License](https://poser.pugx.org/vitexsoftware/ease-twbootstrap4-widgets/license)](//packagist.org/packages/vitexsoftware/ease-twbootstrap4-widgets)

[![Monthly Downloads](https://poser.pugx.org/vitexsoftware/ease-twbootstrap4-widgets/d/monthly)](//packagist.org/packages/vitexsoftware/ease-twbootstrap4-widgets)
[![Dependents](https://poser.pugx.org/vitexsoftware/ease-twbootstrap4-widgets/dependents)](//packagist.org/packages/vitexsoftware/ease-twbootstrap4-widgets)
[![Daily Downloads](https://poser.pugx.org/vitexsoftware/ease-twbootstrap4-widgets/d/daily)](//packagist.org/packages/vitexsoftware/ease-twbootstrap4-widgets)
[![Total Downloads](https://poser.pugx.org/vitexsoftware/ease-twbootstrap4-widgets/downloads)](//packagist.org/packages/vitexsoftware/ease-twbootstrap4-widgets)

---

Bricks Included
===============



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

```shell
composer require vitexsoftware/ease-twbootstrap4-widgets
```


Older versions and its requirements https://packagist.org/packages/vitexsoftware/


For Debian, Ubuntu & friends please use repo:

```shell
sudo apt install lsb-release wget
echo "deb http://repo.vitexsoftware.cz $(lsb_release -sc) main" | sudo tee /etc/apt/sources.list.d/vitexsoftware.list
sudo wget -O /etc/apt/trusted.gpg.d/vitexsoftware.gpg http://repo.vitexsoftware.cz/keyring.gpg
sudo apt update
sudo apt install php-vitexsoftware-ease-bootstrap4-widgets
```

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
        },
        {
            "type": "path",
            "url": "/usr/share/php/EaseTWB4Widgets",
            "options": {
                "symlink": true
            }
        }
    ]

Links
=====

Homepage: https://www.vitexsoftware.cz/ease.php

GitHub: https://github.com/VitexSoftware/php-ease-bootstrap4-widgets

PhpDocumentor: https://www.vitexsoftware.cz/php-ease-bootstrap4-widgets/
