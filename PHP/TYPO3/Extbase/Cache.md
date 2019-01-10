#Caching

http://blog.teamgeist-medien.de/2016/04/typo3-snippet-page-cache-aus-einer-extension-heraus-loeschen.html

```
# Page Cache der Seite 6 löschen
$this->cacheService->clearPageCache(6);
  
# Page Cache der Seiten 6,66,666 löschen
$this->cacheService->clearPageCache(array(6,66,666));
  
# Page Cache aller Seiten löschen
$this->cacheService->clearPageCache();
```


https://aimeos.org/tips/how-to-use-the-typo3-caching-framework-with-cache-groups/



