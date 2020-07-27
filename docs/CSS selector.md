# CSS selector

Web Scraper uses css selectors to find HTML elements in web pages and to extract
data from them. When selecting an element the Web Scraper will try to make its
best guess what the CSS selector might be for the selected elements. But you
can also write it yourself and test it with by clicking "Element preview". You
can use CSS selectors that are available in CSS versions 1-4(that are supported by the browser) and also pseudo
selectors that are additionally available in jQuery. Here are some
documentation links that might help you:
 
 * [CSS Selectors] [css-selectors-wikipedia]
 * [jQuery CSS selectors] [css-selectors-jquery]
 * [w3schools CSS selector reference] [w3schools-css-selector-reference]

## Additional Web Scraper selectors
It is possible to add new pseudo CSS selectors to Web Scraper. Right now there
is only one CSS selector added.

#### Parent selector

CSS Selector `_parent_` allows a child selector of an
*Element selector* to select the element that was returned by the *Element selector*. For
example this CSS selector could be used in a case where you need to extract an
attribute from the element that the *Element selector* returned.

#### Selecting elements within iframe or shadow root

A custom written CSS selector can be used to select elements within an iframe or
shadow-root.

To select data within iframe create a selector that would select the
iframe element and then afterwards add `:iframe`. For example:
`iframe:iframe .selector-within-iframe`

Similarly a custom CSS selector can be used to select elements within a shadow root.
First select the shadow root parent element and then add `:shadow-root` to
the selector.
For example: `.shadow-root-parent-element:shadow-root .selector-within-shadow-root`

## Related videos

* [How to select elements that contain specific text]
* [How to select elements that have a specific element]
* [How to select elements that don’t contain specific text]
* [How to select elements that don’t have a specific element]

 [css-selectors-wikipedia]: http://en.wikipedia.org/wiki/Cascading_Style_Sheets#Selector
 [css-selectors-jquery]: http://api.jquery.com/category/selectors/
 [w3schools-css-selector-reference]: http://www.w3schools.com/cssref/css_selectors.asp
[How to select elements that contain specific text]:
https://www.webscraper.io/how-to-video/jquery-contains-selector
[How to select elements that have a specific element]:
https://www.webscraper.io/how-to-video/jquery-has-selector
[How to select elements that don’t contain specific text]:
https://www.webscraper.io/how-to-video/jquery-not-contains-selector
[How to select elements that don’t have a specific element]:
https://www.webscraper.io/how-to-video/jquery-not-has-selector
