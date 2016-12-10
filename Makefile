nginx_name = tipstermanager_nginx_1
mysql_name = tipstermanager_mysql_1
php_name = tipstermanager_php_1
user = eddie

.PHONY: pac mod composer-update bash bower-install npm-install command dump

pac:
	docker exec -it $(php_name) php bin/console $(cmd)

mod:
	 sudo chmod 775 -R var/cache/ && sudo chown $(user):www-data -R var/cache/ && sudo chmod 775 -R var/logs/ && sudo chown $(user):www-data -R var/logs/

bash:
	docker exec -it $(php_name) bash

npm-install:
	docker exec -it $(php_name) npm install $(cmd)

bower-install:
	docker exec -it $(php_name) bower install --allow-root $(cmd)

composer-update:
	docker exec -it $(php_name) php composer.phar update

dump:
	docker exec -i $(mysql_name) bash -c "mysqldump -p'dev' -u root optedif" > dump.sql

default: pac
