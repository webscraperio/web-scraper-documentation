# API

[Web Scraper Cloud][cloud] can be managed via an HTTPS JSON API.
The API allows to manage sitemaps, scraping jobs and download data.

* Use our [Node.js package][node] when developing your application in JS.
* Use our [PHP SDK][sdk] when developing your application in PHP.

API access token can be found in [Web Scraper Cloud API page][api-page].

## API call limit

By default, each user has a limit of 200 API calls per 15 minutes. Limit can be 
tracked by API call response headers:

```
X-RateLimit-Limit: 200
X-RateLimit-Remaining: 199
X-RateLimit-Reset: 1609372800   // returned only when limit is reached
```

### Handle API request limit

[PHP SDK][sdk] and [API SDK][node] has built-in backoff mechanism in case of reaching the limit. If 
API request limit is reached and 429 response code is returned, client will 
be automatically put to sleep and will make request again when API request 
limits are restored.

This behavior can be disabled and throw exception instead of sleep.

@include '../API/handle-api-limit'
                                                                             
If more API calls are required, please contact support.

## Scraping job status

Scraping job can have one of these statuses:

* `waiting-to-be-scheduled` - the scraping job is waiting in a queue to be scraped;
* `scheduled` - the scraping job is waiting for the scraper server and will start in a moment;
* `started` - the scraping job is in motion;
* `failed` - the website returned more than 50% 4xx or 50xx responses or there were network errors, which means that job execution was 
stopped and scraping job marked as failed; however, the user can continue it manually;
* `finished` - the scraping job has completed successfully without any failed or empty pages;
* `stopped` - the scraping job has been stopped manually by the user;

## API calls

### Create Sitemap

@include '../API/create-sitemap'

### Get Sitemap

@include '../API/get-sitemap'

### Get Sitemaps

@include '../API/get-sitemaps'

### Update Sitemap

@include '../API/update-sitemap'

### Delete Sitemap

@include '../API/delete-sitemap'

### Create Scraping Job (Scrape Sitemap)

@include '../API/create-scraping-job'

### Enable Sitemap Scheduler

@include '../API/enable-sitemap-scheduler'

### Disable Sitemap Scheduler

@include '../API/disable-sitemap-scheduler'

### Get Sitemap Scheduler

@include '../API/get-sitemap-scheduler'

### Get Scraping Job

**Note!** You can also receive a push notification once the scraping job has 
finished. Pinging the API until the scraping job has finished isn't a good 
practice.

@include '../API/get-scraping-job'

### Get Scraping Jobs

@include '../API/get-scraping-jobs'

### Download scraped data in JSON format

**Note!** A good practice would be to move the download/import task to a queue 
job. A good example of [queue system].

@include '../API/download-scraped-data-in-json-format'

### Download scraped data in CSV format

**Note!** We recommend using JSON format since multiple CSV notations are being 
used by different products. For example:

* CSV Standard: https://tools.ietf.org/html/rfc4180
* MS Excel cannot handle escape sequences from the CSV standard
* PHP has incorrect default implementation. See https://wiki.php.net/rfc/kill-csv-escaping

@include '../API/download-scraped-data-in-csv-format'

### Get Scraping Job Problematic Urls

Returns **empty** and **failed** urls for specific scraping job.

@include '../API/get-scraping-job-problematic-urls'

### Get Scraping Job Data Quality

@include '../API/get-scraping-job-data-quality'

### Delete Scraping Job

@include '../API/delete-scraping-job'

### Account info

@include '../API/account-info'

[cloud]: https://www.webscraper.io/cloud-scraper
[sdk]: https://github.com/webscraperio/api-client-php
[node]: https://github.com/webscraperio/api-client-nodejs
[api-page]: https://cloud.webscraper.io/api
[queue system]: https://laravel.com/docs/7.x/queues
