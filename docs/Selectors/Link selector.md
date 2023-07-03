# Link selector

Link selector is used for link selection and website navigation. If you use
*Link selector* without any child selectors then it will extract the link and
the href attribute of the link. If you add child selectors to *Link selector*
then these child selectors will be used in the page that this link was leading
to. If you are selecting multiple links then check *multiple* property.

**Note!** Check that the link in the url bar changes after clicking an item. If the link doesn't change, then the site is
probably using ajax for data loading. Instead of using link selector you
should use [Element click selector] [element-click].

The *Link selector* can extract links from 4 types of sources:

1. **Link** - reads the `href` attribute of an element. E.g. `<a href="https://example.com">`;
2. **Text** - reads the text content of an element. E.g. `<span>https://example.com</span>`;
3. **Attribute** - reads the attributes of an element and finds the link. E.g. `<a data-link="https://example.com">`;
4. **Script** - reads the scripted link in an attribute. E.g. `<a onclick="window.location='https://example.com'">`;

## Configuration options

 * selector - [CSS selector] [css-selector] for the link element from which the
 link for navigation will be extracted.
 * multiple - multiple records are being extracted. Usually should be checked.
 * link type - the source of the link. See above for more information.

## Use cases

**Navigate through multiple levels of navigation**

For example an e-commerce site has multi level navigation -
`categories -> subcategories`. To scrape data from all categories and
subcategories you can create two *Link selectors*. One selector would select
category links and the other selector would select subcategory links that are
available in the category pages. The subcategory *Link selector* should be made
as a child of the category *Link selector*. The selectors for data extraction
from subcategory pages should be made as a child selectors to the subcategory
selector.

![Fig. 1: Multiple link selectors for category navigation][multiple-level-link-selectors]

## Related videos

* [How to set up pagination with page numbers using Link selector]
* [How to set up pagination with "Next" button using Link selector]

 [multiple-level-link-selectors]: ../images/selectors/link/multiple-level-link-selectors.png?raw=true
 [element-click]: Element%20click%20selector.md
 [link-popup]: Link%20popup%20selector.md
 [css-selector]: ../CSS%20selector.md
[How to set up pagination with page numbers using Link selector]:
https://www.webscraper.io/how-to-video/link-button-pagination
[How to set up pagination with "Next" button using Link selector]:
https://www.webscraper.io/how-to-video/link-button-pagination-next
