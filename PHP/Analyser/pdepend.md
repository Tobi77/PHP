# Install

```
$ cd ~/bin
$ wget http://static.pdepend.org/php/latest/pdepend.phar
$ mv pdepend.phar pdepend
$ chmod +x pdepend
```

Execute first test
```
$ pdepend --summary-xml=/Users/tnussbaum/tmp/sum.xml --jdepend-chart=/Users/tnussbaum/tmp/jdepend.svg --overview-pyramid=/Users/tnussbaum/tmp/pyramid.svg /Users/tnussbaum/_Projekte/TUI/Tui_Blue/htdocs/typo3conf/ext/tui_blue_hotel
```
