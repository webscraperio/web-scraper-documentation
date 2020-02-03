# API

[Web Scraper Cloud][cloud] can be managed via an HTTPS JSON API.
The API allows to manage sitemaps, scraping jobs and download data.
Use our [PHP SDK][sdk] when developing you application in PHP.

API access token can be found in [Web Scraper Cloud API page][api-page].

## API call limit

By default, each user has a limit of 200 API calls per 15 minutes. Limit can be tracked by API call response headers:

```
X-RateLimit-Limit: 200
X-RateLimit-Remaining: 199
X-RateLimit-Reset: 1609372800   // returned only when limit is reached
```

If more API calls are required, please contact support.

## Scraping job status

Scraping job can have one of these statuses:

* `waiting-to-be-scheduled` - the scraping job is waiting in a queue to be scraped;
* `scheduled` - the scraping job is waiting for the scraper server and will start in a moment;
* `started` - the scraping job is in motion;
* `failed` - the website returned more than 50% 4xx or 50xx responses or there were network errors, which means that job execution was 
stopped and scraping job marked as failed; however, the user can continue it manually;
* `finished` - the scraping job has completed successfully without any failed or empty pages;
* `shelved` - the scraping job has been moved to cold storage, meaning that either it stopped and then was moved to cold storage or 
it finished with empty or failed pages. This status will be removed in a future release;
* `stopped` - the scraping job has been stopped manually by a user and will change its status to "shelved" after 2 weeks.

## API calls

@include 'API/create-sitemap.*' as 'Create Sitemap'

@include 'API/get-sitemap.*' as 'Get Sitemap'

@include 'API/get-sitemaps.*' as 'Get Sitemaps'

@include 'API/delete-sitemap.*' as 'Delete Sitemap'

@include 'API/create-scraping-job.*' as 'Create Scraping Job'

@include 'API/get-scraping-job.*' as 'Get Scraping Job'

@include 'API/get-scraping-jobs.*' as 'Get Scraping Jobs'

@include 'API/download-scraped-data-in-json-format.*' as 'Download scraped data in JSON format'

@include 'API/download-scraped-data-in-csv-format.*' as 'Download scraped data in CSV format'

@include 'API/delete-scraping-job.*' as 'Delete Scraping Job'

@include 'API/account-info.*' as 'Account info'

[cloud]: https://www.webscraper.io/cloud-scraper
[sdk]: https://github.com/webscraperio/api-client-php
[api-page]: https://cloud.webscraper.io/api
