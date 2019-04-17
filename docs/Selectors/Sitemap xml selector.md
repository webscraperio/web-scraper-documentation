# Sitemap.xml link selector

Sitemap.xml link selector is used same as [Link selector] [link-selector] but instead of selectors, sitemap.xml URLs 
are used. These sitemaps are meant for search engine crawlers to find what pages can be found on the site, so in most 
cases, they contain all of the sites URLs. By using this selector in the sitemap, the whole site can be traversed
without setting up pagination or other navigation selectors. The scraped page range can be narrowed down by using RegEx
or setting minimum priority for URLs. Note that all sitemap.xml pages don't have minimum priority value. 

If sitemap.xml contains other sitemap.xml URLs, the selector will automatically work recursively until it scrapes non XML 
pages. Web Scraper supports `sitemap.xml.gz` format as well. Sitemaps link can usually be found in 
`example.com/robots.txt` page. If robots.txt is empty or doesn't exist for the site, it is worth checking 
`example.com/sitemap.xml` page whether the site has a sitemap. Web Scraper only supports [standard sitemap.xml format]
[sitemap format].

Note! Web Scraper has a download size limit, so if multiple sitemap.xml URLs are set, scraping job might fail. To 
work around this, try splitting the sitemap into multiple sitemaps, where each sitemap has only one sitemap.xml. 

Note! Scraping large sitemap.xml files might result with performance issues in the browser extension, this can be resolved
by running the sitemap on [Cloud Web Scraper] [cloud-web-scraper] as it doesn't store scraper queue in RAM while
scraping.

## Configuration options

 * sitemap.xml urls - URL of the sites sitemap.xml, multiple URLs can be added. By clicking on "Add from robots.txt" 
 Web Scraper will automatically add all sitemap.xml URLs that can be found on sites robots.txt.
 * found URL RegEx - regular expression to match a substring from the URLs. If set, only URLs from sitemap.xml that 
 match RegEx will be scraped.
 * minimum priority - minimum priority of URLs to be scraped.

## Use cases

Sitemap.xml files are usually used for sites that want to be indexed by search engines, sitemaps can be found for most:
* e-commerce sites;
* travel sites;
* news sites;
* yellow pages.

Best way to scrape the whole site is by using Sitemap.xml link selector. It won't be necessary to deal 
with pagination, categories and search forms/queries. Some sites don't display category tree(breadcrumbs) if the page is 
opened directly, so the site has to be traversed through category pages while scraping, in order to scrape category tree.

**Making sure that only specific pages are scraped**

As in most cases, sitemap.xml contains all the pages of the site, it is possible to limit the scraper so it scrapes only 
the pages that contain the required data. For example, e-commerce sites sitemap.xml will contain of product pages, 
category pages and contact/about/etc. pages. To limit the scraper, so it scrapes only product pages, one or more methods 
can be used:

* Using RegEx - if all product URLs contain a specific string that other type pages don't contain, this string can 
be set in RegEx field and the scraper will traverse only pages that match it. For example, `/product/`. This will prevent 
the scraper from scraping unnecessary pages.
* Setting priority - some sites prioritize specific page types over others, so if that is the case, setting priority
will improve scraped page precision.
* Using wrapper element selector - if none of the previously mentioned methods are possible to use, element wrapper 
selector can be set up. This method works for all sites and doesn't return empty records in the result file if invalid or 
unnecessary page is traversed. To set up the element wrapper selector, follow these steps:
    1. Open a few pages that you want to be scraped.
    2. Find an element that can be found only in these type of pages, for example `h1.product-title`.
    3. Create an element selector and set it as a child selector for Sitemap.xml link selector.
    4. Set element selector to `multiple` and set its selector to (for example) `body:has(h1.product-title)`.
    5. Select rest of the selectors as child selectors for this element selector.

    The key part of this method is that a unique element has to be found and included in `body:has(unique_selector)`
    selector. If the data from meta tags has to be scraped, `html` tag can be used instead of `body` tag. Scraper will
    extract data only from the pages that have this unique element.

![Fig. 1: Sitemap with Sitemap.xml link selector and wrapper element selector][sitemap-xml-link-selectors]

When using Sitemap.xml selector, set the main page of the site as a start URL.

[link-selector]: Link%20selector.md
[cloud-web-scraper]: https://www.webscraper.io/cloud-scraper
[sitemap-xml-link-selectors]: ../images/selectors/sitemap-xml/sitemap-xml-link-selector.png?raw=true
[sitemap format]: https://www.sitemaps.org/protocol.html
