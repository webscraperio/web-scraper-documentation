# Scheduler

Scheduler is a feature for [Cloud Web Scraper][cloud] which enables the user to automatize scraping jobs for a specific 
time. It can be set by going to sitemap `Details page` and clicking on `Scheduler` tab. 

If a ongoing scraping job is in motion or it runs for longer than the scheduling interval, the new scheduled scraping job will start only when the previous one has finished scraping.

## Scheduler configurations options

The configuration options for scheduled sitemap scraping jobs are:

* Scheduler Time Zone - time zone by which scraping jobs will be scheduled for.
* Scheduler Type - one of the 3 scheduler types, each type has different configuration options.
* Driver - `Full`(with JavaScript) or `Fast`(no JavaScript) driver.
* Request interval - page request interval in milliseconds. 
* Page load delay - time period that scraper will wait for page to load before extracting the data in milliseconds. 
* Proxy - whether to use proxy while scraping the site. Custom proxy can be selected only by `Scale` plans.

These configuration options will be applied for all scheduled scraping jobs, for the specific sitemap. 

## Scheduler types

There are 3 types of schedulers: 

#### Daily scheduler

Select the week days and the time for which the scraping jobs should be started. 

#### Interval scheduler

Interval can be set either by hours or minutes. If interval is set by hours, scheduler will start scraping jobs on the 
round hours.

#### Custom Cron expression scheduler

If a very customized and specific scheduler is needed, for which the previous scheduler types are not fit for, set up a [custom Cron expression][cron].

[cloud]: https://www.webscraper.io/cloud-scraper
[cron]: https://en.wikipedia.org/wiki/Cron
