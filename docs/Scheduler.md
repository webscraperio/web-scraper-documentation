# Scheduler

Scheduler is a feature for [Cloud Web Scraper][cloud] that lets you automatically start scraping jobs in a specific 
time. It can be set by going to sitemap `Details page` and clicking on `Scheduler` tab. 

New scheduled scraping job will be started only if previous one has finished scraping. If the scheduled scraping job 
runs for longer than the scheduling interval, the new scraping job will be started only after the previous one has 
finished.

## Scheduler configurations options

Configuration options will be used for all scheduled scraping jobs for the specific sitemap.

* Scheduler Time Zone - time zone by which scraping jobs will be scheduled.
* Scheduler Type - one of the 3 scheduler types, each type has different configuration options.
* Driver - `Full`(with JavaScript) or `Fast`(no JavaScript) driver.
* Request interval - page request interval in milliseconds. 
* Page load delay - time period that scraper will wait for page to load before extracting the data in milliseconds. 
* Proxy - whether to use proxy while scraping the site. Custom proxy can be selected only by `Scale` plans.

## Scheduler types

There are 3 types of schedulers: 

#### Daily scheduler

Select week days and time in which the scraping jobs should be started.

#### Interval scheduler

Interval can be set either by hours or minutes. If interval is set by hours, scheduler will start scraping jobs on the 
round hours.

#### Custom Cron expression scheduler

If you were not able to setup the scheduler with any of previous scheduler types in your desired time, you can setup 
a [custom Cron expression][cron].

[cloud]: https://www.webscraper.io/cloud-scraper
[cron]: https://en.wikipedia.org/wiki/Cron
