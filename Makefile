clean:
	rm -rf debian/php-ease-twbootstrap4-widgets
	rm -rf debian/php-ease-twbootstrap4-widgets-doc
	rm -rf debian/*.log
	rm -rf docs/*
	rm -rf vendor/* composer.lock

doc:
	debian/apigendoc.sh

test:
	composer update
	phpunit --bootstrap tests/Bootstrap.php --configuration tests/configuration.xml tests
	codecept run

deb:
	debuild -i -us -uc -b

