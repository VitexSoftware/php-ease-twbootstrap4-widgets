repoversion=$(shell LANG=C aptitude show php-ease-bootstrap4-widgets | grep Version: | awk '{print $$2}')
nextversion=$(shell echo $(repoversion) | perl -ne 'chomp; print join(".", splice(@{[split/\./,$$_]}, 0, -1), map {++$$_} pop @{[split/\./,$$_]}), "\n";')


clean:
	rm -rf debian/php-ease-bootstrap4-widgets
	rm -rf debian/php-ease-bootstrap4-widgets-doc
	rm -rf debian/*.log
	rm -rf docs/*
	rm -rf vendor/* composer.lock

doc:
	debian/apigendoc.sh

test:
	composer update
	phpunit --bootstrap tests/Bootstrap.php --configuration tests/configuration.xml tests
	codecept run

release:
	echo Release v$(nextversion)
	dch -v $(nextversion) `git log -1 --pretty=%B | head -n 1`
	debuild -i -us -uc -b
	git commit -a -m "Release v$(nextversion)"
	git tag -a $(nextversion) -m "version $(nextversion)"


deb:
	debuild -i -us -uc -b

