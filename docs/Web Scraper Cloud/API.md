# API

[Web Scraper Cloud][cloud] can be managed via an HTTPS JSON API.
The API allows to manage sitemaps, scraping jobs and download data.

* Use our [Node.js package][node] when developing your application in JS.
* Use our [PHP SDK][sdk] when developing your application in PHP.

API access token can be found in [Web Scraper Cloud API page][api-page].

## API call limit

By default, each user has a limit of 200 API calls per 15 minutes. Limit can be 
tracked by API call response headers:

```sh
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
* `scheduling` - the scraping job is currently being scheduled;
* `scheduled` - the scraping job is waiting for the scraper server and will start in a moment;
* `started` - the scraping job is in motion;
* `failed` - the website returned more than 50% 4xx or 50xx responses or there were network errors, which means that job execution was 
stopped and scraping job marked as failed; however, the user can continue it manually;
* `finished` - the scraping job has been completed;
* `stopped` - the scraping job has been stopped manually by the user;

## Proxies

Datacenter:

* `datacenter-de` - Datacenter Germany;
* `datacenter-gb` - Datacenter United Kingdom;
* `datacenter-us` - Datacenter United States;

Residential:

* `residential-ae` - Residential United Arab Emirates;
* `residential-at` - Residential Austria;
* `residential-au` - Residential Australia;
* `residential-be` - Residential Belgium;
* `residential-br` - Residential Brazil;
* `residential-ca` - Residential Canada;
* `residential-ch` - Residential Switzerland;
* `residential-cn` - Residential China;
* `residential-cy` - Residential Cyprus;
* `residential-cz` - Residential Czechia;
* `residential-de` - Residential Germany;
* `residential-dk` - Residential Denmark;
* `residential-es` - Residential Spain;
* `residential-fi` - Residential Finland;
* `residential-fr` - Residential France;
* `residential-gb` - Residential United Kingdom;
* `residential-gr` - Residential Greece;
* `residential-hk` - Residential Hong Kong;
* `residential-hu` - Residential Hungary;
* `residential-id` - Residential Indonesia;
* `residential-ie` - Residential Ireland;
* `residential-il` - Residential Israel;
* `residential-in` - Residential India;
* `residential-it` - Residential Italy;
* `residential-jp` - Residential Japan;
* `residential-kr` - Residential South Korea;
* `residential-mx` - Residential Mexico;
* `residential-nl` - Residential Netherlands;
* `residential-no` - Residential Norway;
* `residential-nz` - Residential New Zealand;
* `residential-ph` - Residential Philippines;
* `residential-pl` - Residential Poland;
* `residential-pt` - Residential Portugal;
* `residential-py` - Residential Paraguay;
* `residential-ru` - Residential Russia;
* `residential-sa` - Residential Saudi Arabia;
* `residential-se` - Residential Sweden;
* `residential-sg` - Residential Singapore;
* `residential-sk` - Residential Slovakia;
* `residential-tr` - Residential Turkey;
* `residential-tw` - Residential Taiwan;
* `residential-ua` - Residential Ukraine;
* `residential-us` - Residential United States;
* `residential-vn` - Residential Vietnam;

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
[queue system]: https://laravel.com/docs/10.x/queues
