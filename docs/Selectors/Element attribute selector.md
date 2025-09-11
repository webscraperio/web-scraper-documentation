# Element attribute selector
Element attribute selector can extract an attributes value of an HTML element.
For example you could use this selector to extract title attribute from
this link: `<a href="#" title="my title">link<a>`.

## Configuration options
 * selector - [CSS selector] [css-selector] for the element. * multiple type - The way multiple extracted images should be handled.
 * column count - the number of columns returned when multiple type is set to
  `Multiple Records in Multiple Columns`
 * attribute name - the attribute that is going to be extracted. For example
 `title`, `data-id`.

## Use cases
See [Text selector] [text-selector] use cases.

### Multiple Type

A specific selector can find multiple items on a single site. To handle this a `Multiple Type`
is available when creating the selector. The selected type affects
how data is returned

* `First Record Only` - returns only the first record extracted. Use when only one record expected
* `Multiple Records in Multiple Columns` - returns multiple records split into up to `Column Count`
  columns. Enables and Requires filling `Column count` (defaults to 5)
* `Multiple Records in One Column` - returns all extracted records in a single column joined by newline

## Related videos

* [How to extract data from element attribute]

[text-selector]: Text%20selector.md
[css-selector]: ../CSS%20selector.md
[How to extract data from element attribute]: https://www.webscraper.io/how-to-video/element-attribute

description: Web Scraper Element Attribute Selector - extract HTML element attributes like title, data attributes, and custom properties from web pages
keywords: attribute selector, html attributes, element attributes, data attributes, title attribute, custom attributes, attribute extraction
