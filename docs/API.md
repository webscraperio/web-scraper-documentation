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
