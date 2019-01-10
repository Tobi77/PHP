# Install

```
$ cd ~/bin
$ wget https://phar.phpunit.de/phpcpd.phar
$ mv phpcpd.phar phpcpd
$ chmod +x phpcpd
```

Execute first test
```
$ phpcpd --names=*.php --exclude=Tests/ --exclude=Configuration/TCA/ --log-pmd=/Users/tnussbaum/tmp/phpcpd.xml /Users/tnussbaum/Projekte/TUI/Tui_Blue/htdocs/typo3conf/ext/tui_blue_hotel
```
