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
