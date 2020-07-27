# Webhook notifications

[Web Scraper Cloud][cloud] can notify your server when a scraping job has finished.
Configure a URL on your server which will receive notifications from Web Scraper Cloud when a scraping job finishes.
Web Scraper will execute a POST FORM submit with scraping job metadata. 
To configure and test the notification endpoint visit [Web Scraper Cloud API page][api-page].

Web Scraper will send the notification only once the job has completed.
After receiving the notification you can start or queue data import.
No other notifications will be sent. 
A webhook notification will be resent only in cases:

* Response from your server isn't received within 10 seconds
* Your server responds with HTTP status code error (>=400)
* When data extraction from empty and failed urls has been rescheduled. ("Continue" button in website)

Notification FORM data content example:
```
"scrapingjob_id": 1234
"status": "finished"
"sitemap_id": 12
"sitemap_name": "my-sitemap"
"custom_id": "custom-scraping-job-12"
```

## Webhook handling
When your server receives the notification, it has to respond with 2xx HTTP status code within 10 seconds.
In case of an error code or a timeout the notification will be resent after a 30 second delay.

We recommend using a queue system for deferred data import to improve data import handling.
Here is a good example of a queue system - https://laravel.com/docs/6.x/queues .
In case data import is being handled *on the fly* (in the webhook handler), 
send a success response immediately after receiving the request 
otherwise notification sender could timeout and resend the notification which could generate unexpected results.

@include 'Webhooks/example-handler*' as 'Example handlers'

[cloud]: https://www.webscraper.io/cloud-scraper
[api-page]: https://cloud.webscraper.io/api
