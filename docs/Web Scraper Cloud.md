# Web Scraper Cloud

[Web Scraper Cloud][cloud] is a premium service that enriches Web Scraper with automation features, improves scraped 
data consistency, is scalable and allows to monitor scraping jobs. It uses sitemaps that are built by using Web 
Scraper browser extension to run scraping jobs.

## Features 
### Proxy 

Proxy is used in order to prevent scraper of being blocked by the target site or to access the site from a 
non-restricted location. By the default, the proxy uses IP addresses located in the US. 
Other location IP addresses can be requested by contacting support. 
Scale plan users can integrate third party proxy providers and configure proxy locations as needed.

When the proxy is enabled, the scraper will rotate IP addresses every 5 minutes. If the page fails to load with proxy 
enabled, scraper changes the IP address and retries to scrape the page. 

### Other features

* [Scheduler][scheduler]
* [API][api]
* [Parser][parser]
* [Data export][data-export]

## Page credits

A page credit represents a single page loaded by the Web Scraper Cloud. For example, if the scraper has to navigate through 
100 pages, then 100 page credits will be subtracted from your account. If you are extracting 100 records from a single page, only one page 
credit will be charged.

Page credits are not subtracted when re-scraping empty or failed pages.

## Parallel tasks

A parallel task count represents how many scraping jobs can run at once. If all parallel tasks are in use and 
new scraping job is started, it will be scheduled and added to a queue whilst waiting for a task to free up. Scraping jobs can be manually 
stopped and continued to free up a parallel task or change the order in which the scraping jobs will be executed.

## Drivers

Web Scraper Cloud has 2 types of drivers to run scraping jobs on:
* `Full` driver - loads the page the same way as Web Scraper browser extension. All assets are loaded and JavaScript is executed before data extraction starts;
* `Fast` driver - doesn't execute JavaScript in the page. Data is extracted from raw HTML. The page loads faster than 
with `Full` driver or Web Scraper browser extension.

## Progress monitoring

In the scraping job table views you can track the progress of each scraping job:
* Scraped pages - scraped page count and total scheduled page count.
* Scraped record count - data rows extracted.
* Failed pages - pages that loaded with 4xx or 5xx response code or didn't load at all.
* Empty pages - pages that loaded successfully but selectors didn't extract any data.

Our built-in fail-over system automatically re-scrapes any empty and failed pages. If empty and/or failed pages are 
still present after the scraping job has finished, it can be continued manually from the scraping job `Action` dropdown 
menu.

## Scraping job inspection and troubleshooting

When troubleshooting a scraping job, a list of empty and failed pages with screenshots (only for `Full` driver) can be 
found by navigating to scraping job `Inspect` page from the scraping job `Action` dropdown menu. 

Additionally a performance graph is available while the scraping job is running. 
Data in this graph is kept for 7 days. 
It can be used to monitor the activity of the scraping job and to estimate the time necessary until the full completion.
The graph shows these values in 5-minute intervals:

* Scheduled pages;
* Executed pages;
* Records scraped;
* Empty pages;
* Failed pages.

 ![Fig. 1: Scraping job performance graph][scraping-job-performance-graph]

## Limits

* **Start URL limit** - 20'000.
* **Selector limit** - 100.
* **Data extraction execution time from a single URL** - 15 minutes. Can be reached by using scroll down selector on infinite scroll down or 
element click selector. If the timeout is reached, no data will be scraped from that page.

## Difference between scraping on Web Scraper Cloud and Web Scraper browser extension

| Web Scraper Cloud | Web Scraper browser extension |
|------------------ |------------------------------ |
| **Consistent site accessibility** while <br>scraping. Automatic failover, IP address rotation<br> and data extraction retry mechanisms decreases the <br>chance of the scraper access getting blocked. | **Limited access.** Only sites that you can access <br> via your browser can be scraped. For small data<br> extraction volumes this is good enough. |
| Scraped data is stored in **cloud storage** for all <br>scraping jobs within data retention period. | Only data from the latest scraping job is stored in <br>browsers's **local storage**. |
| **Images are not loaded** while scraping. This <br>decreases page load time as well as decreases <br>transferred data for custom proxy users. | **Images are loaded** while scraping. |
| URLs are traversed in **pseudo random** order. <br>This ensures the most recent data is being <br>scraped when crawling larger sites. | URLs are traversed in **last in first out** order on <br>how they were discovered. This will discover the initial <br>records sooner but won't decrease the total time <br>required to scrape the site. |


[cloud]: https://cloud.webscraper.io/
[scheduler]: Scheduler.md
[api]: API.md
[parser]: Parser.md
[data-export]: Data%20Export.md
[scraping-job-performance-graph]: ./images/cloud/scraping-job-performance-graph.png?raw=true
