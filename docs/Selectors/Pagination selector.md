# Pagination selector

Pagination selector is used to navigate through all pagination pages or to load
all items with the `Load more` button. Pagination selector is always recursive, 
so all pagination pages are discovered. To extract data from pagination pages, 
data extraction selectors have to be set as child selectors for pagination
selector.

## Configuration options

* selector - [CSS selector] [css-selector] for elements that change page after
  clicking on them.
* pagination type - a method that will be used to find pagination urls or click
  on pagination buttons.

### Pagination type
* **Auto** - automatically uses one of these pagination types. The auto option is 
  recommended by default, with additional configuration needed when the auto 
  option does not recognize the element correctly by default.
* **Link** - extracts pagination URL from anchor `href` attribute.
* **Scripted link** - extracts URL from javascript statement within `href` or
  `onclick` attribute.
* **Attribute link** - extracts URL from HTML element attribute.
* **Text link** - extracts URL from plain text.
* **Link from any script** - reads link from a script (window.location=, window.open).
* **Click multiple times on next/more button** - navigates through pagination pages
  by clicking on a button multiple times until no new records are scraped.
* **Click once on multiple buttons** - navigates through pagination pages by
  clicking on each unique button once.

## Use cases

**Handle pagination**

For example, an e-commerce site has multiple categories. Each category has a
list of items and pagination links. Some pages are not directly available
from the category but are available from pagination pages (pagination links 1-5
are visible but 6-8 are not). You can start by building a sitemap that
visits each category and extracts items from the category page. This sitemap 
will extract items only from the first pagination page. To extract items from 
all pagination links including the ones that are not visible at the beginning
you need to create a `Pagination selector` that selects the pagination links.
Figure 1 shows how the pagination selector should be created in the sitemap.
When the scraper opens a category link, it will extract items that are available
on the page. After that, it will find the pagination links and also extract
data from those. Figure 2 shows a selector graph where you can see how
pagination links discover more pagination links and more data.

![Fig. 1: Sitemap with Pagination selector][pagination-selector]
![Fig. 2: Selector graph with pagination][pagination-selector-graph]


[css-selector]: ../CSS%20selector.md
[pagination-selector]: ../images/selectors/pagination/pagination-selector.png?raw=true
[pagination-selector-graph]: ../images/selectors/pagination/pagination-selector-graph.png?raw=true
 
