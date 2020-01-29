# Webhook notifications

[Web Scraper Cloud][cloud] can notify your server when a scraping job has finished.
Configure a URL on your server which will be designated to receive notifications from Web Scraper Cloud when a scraping job finishes.
Web Scraper will execute a POST FORM submit with scraping job metadata. 
To configure and test the notification endpoint visit [Web Scraper Cloud API page][api-page].

Web Scraper will send the notification only once the job has completed.
Therefore, there are no status update notifications.

Notification FORM data content example:
```
"scrapingjob_id": 1234
"status": "finished"
"sitemap_id": 12
"sitemap_name": "my-sitemap"
```

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

## Webhook handling
When your server receives the notification, it has to respond with 2xx HTTP status code within 10 seconds.
In case of an error code or a timeout the notification will be resent after a 30 second delay.

We recommend using a queue system for deferred data import to improve data import handling.
Here is a good example of a queue system - https://laravel.com/docs/6.x/queues .
In case data import is being handled *on the fly* (in the webhook handler), 
send a success response immediately after receiving the request 
otherwise notification sender could timeout and resend the notification which could generate unexpected results.

@include 'Webhooks.example-handler' as 'Example handlers'

[cloud]: https://www.webscraper.io/cloud-scraper
[api-page]: https://cloud.webscraper.io/api
