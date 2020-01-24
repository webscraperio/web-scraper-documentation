# API

[Web Scraper Cloud][cloud] offers an API, which allows to manage sitemaps and scraping jobs, download data and receive
finished scraping job notifications. The API can be accessed via HTTP; however, JSON is used as a data exchanging format. [API SDK][sdk] can be also used if developing in PHP.

API token can be found in [Web Scraper Cloud API page][api-page].

## Notification endpoint

Configure an URL on your server which will be the one designated to receive notifications from Web Scraper when a scraping job finishes. Web 
Scraper will execute a POST form submit with scraping job metadata. When your server receives the notification it can 
then download and import scraped data into your database. To configure and test the notification endpoint visit 
[Web Scraper Cloud API page][api-page].

Web Scraper will send the notification only once the job has completed; therefore, there are no status update notifications.

## Scraping job status

Scraping job can have one of these statuses:  

* `waiting-to-be-scheduled` - the scraping job is waiting in a queue to be scraped;
* `scheduled` - the scraping job is waiting for the scraper server and will start in a moment;
* `started` - the scraping job is in motion;
* `failed` - the website returned more than 50% 4xx or 50xx responses or there were network errors, which means that job execution was 
stopped and scraping job marked as failed; however, the user can continue it manually;
* `finished` - the scraping job has completed successfully without any failed or empty pages;
* `shelved` - the scraping job has been moved to cold storage, meaning that either it stopped and then was moved to cold storage or 
it finished with empty or failed pages;
* `stopped` - the scraping job has been stopped manually by a user and will change its status to "shelved" after 2 weeks.

## API call limit

By default, each user has a limit of 200 API calls per 15 minutes. Limit can be tracked by API call response headers:

```
X-RateLimit-Limit: 200
X-RateLimit-Remaining: 199
X-RateLimit-Reset: 1609372800   // returned only when limit is reached
```

If more API calls are required, please contact support.

## API calls

@include 'API.api-code-panel' as 'Create Sitemap'

@include 'API.api-code-panel' as 'Get Sitemap'

@include 'API.api-code-panel' as 'Get Sitemaps'

@include 'API.api-code-panel' as 'Delete Sitemap'

@include 'API.api-code-panel' as 'Create Scraping Job'

@include 'API.api-code-panel' as 'Get Scraping Job'

@include 'API.api-code-panel' as 'Get Scraping Jobs'

@include 'API.api-code-panel' as 'Download scraped data in JSON format'

@include 'API.api-code-panel' as 'Download scraped data in CSV format'

@include 'API.api-code-panel' as 'Delete Scraping Job'

@include 'API.api-code-panel' as 'Account info'

[cloud]: https://www.webscraper.io/cloud-scraper
[sdk]: https://github.com/webscraperio/api-client-php
[api-page]: https://cloud.webscraper.io/api
