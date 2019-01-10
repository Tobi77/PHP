# Install



```
$ cd ~/bin
$ wget https://github.com/phpmetrics/PhpMetrics/releases/download/v2.3.2/phpmetrics.phar
$ chmod +x phpmetrics.phar 
$ mv phpmetrics.phar ./phpmetrics
```

Execute first test
```
$ phpmetrics --report-html=/Users/tnussbaum/tmp/report.html /Users/tnussbaum/_Projekte/TUI/Tui_Blue/htdocs/typo3conf/ext/tui_blue_hotel
```

```
$ phpmetrics --report-html=/Users/tnussbaum/tmp/report.html dirs21_savings_calendar,dw_address,dw_apc,dw_browser_page_title,dw_contact,dw_contact_tui,dw_content_elements,dw_content_elements_source,dw_dailypoint,dw_exception_handler,dw_fal_fix,dw_fal_translation,dw_googlesitemap,dw_gtm,dw_holidaycheck,dw_l10nmgr_irre_ext,dw_live_validation,dw_log,dw_mail,dw_marketing_url,dw_maxmind,dw_meetingroom,dw_my_spa,dw_newsletter_subscribe,dw_newsletter_subscribe_validate,dw_pagenotfound,dw_release,dw_social_media,dw_social_media_api,dw_solr,dw_static_language,dw_tripadvisor,dw_utility,dw_varnish,dw_vhs,dw_wordpress_rss,golb,tui_airport,tui_blue,tui_blue_be_tools,tui_blue_checkin,tui_blue_contest,tui_blue_event_calendar,tui_blue_form_data,tui_blue_hotel,tui_blue_ibe,tui_blue_notification,tui_blue_protel,tui_blue_remember_me,tui_blue_spa_app,tui_blue_tracking
```
