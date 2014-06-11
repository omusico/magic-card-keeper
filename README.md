Magic Card Keeper
=================


Requirements
------------

* php 5.4.14+
  * php_intl
  * php_mongo 1.4.0+
  * php_mcrypt
  * php_mbstring
  * php_xml
* mongodb 2.4+
  * php_mongo
* Zend Framework 2.2
* apache 2.2+
  * mod_expires
  * mod_rewrite
  * mod_ssl

Installation setup with Vagrant
-------------------------------

1: The system is bundled with a Vagrant set up, so you can get up and running quickly and in a common environment. To get the Vagrant system running, go to vagrant and run the following:

```shell
$ vagrant up
```

2: Add this to your hosts file
192.168.10.101  magic-card-keeper.com

3: run composer

```shell
$ vagrant ssh
$ cd /var/www/mck
& composer install # or composer update if you have previously installed
```

4: When you are finished for the day, go to the vagrant directory and run:

```shell
$ vagrant halt
```

5: If you need to delete the VM run

```shell
$ vagrant destroy
```

Debugging
---------

xdebug is set up to use port 9001 instead of 9000.  Autostart is off since we now need to have the IDE key.
to start an xdebug session add XDEBUG_SESSION_START=<name of ide key> to the query

example: https://magic-card-keeper.com?XDEBUG_SESSION_START=manchuck

