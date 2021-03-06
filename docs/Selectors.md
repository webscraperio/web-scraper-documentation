# Selectors

Web scraper has multiple selectors that can be used for different type data
extraction and for different interaction with the website. The selectors can
be divided in three groups:

 * Data extraction selectors for data extraction.
 * Link selectors for site navigation.
 * Element selectors for element selection that separate multiple records

### Data extraction selectors

Data extraction selectors simply return data from the selected element. 
For example [Text selector] [text-selector] extracts text from
selected element. These selectors can be used as data extraction selectors:

 * [Text selector] [text-selector]
 * [Link selector] [link-selector]
 * [Link popup selector] [link-popup-selector]
 * [Image selector] [image-selector]
 * [Table selector] [table-selector]
 * [Element attribute selector] [element-attribute-selector]
 * [HTML selector] [html-selector]
 * [Grouped selector] [grouped-selector]

### Link selectors

Link selectors extract URLs from links that can be later opened for data
extraction. For example if in a sitemap tree there is a *Link selector* that has
3 child text selectors then the Web Scraper extract all urls with the *Link
selector* and then open each link and use those child data extraction selectors
to extract data. Of course a link selector might have *Link selectors* as child
selectors then these child *Link selectors* would be used for further page
navigation. These are currently available *Link selectors*:

 * [Link selector] [link-selector]
 * [Link popup selector] [link-popup-selector]

### Element selectors

Element selectors are for element selection that contain multiple data elements.
For example an element selector might be used to select a list of items in an
e-commerce site. The selector will return each selected element as a parent
element to its child selectors. Element selectors child selectors will 
extract data only within the element that the element selector gave them.
These are currently available Element selectors:

 * [Element selector] [element-selector]
 * [Element scroll down selector] [element-scroll-selector]
 * [Element click selector] [element-click-selector]

## Selector configuration options

Each selector has configuration options. Here you can see the most common ones.
Configuration options that are specific to a selector are described in
selectors documentation.

 * selector - CSS selector that selects an element the selector will be working
 on.
 * multiple - should be checked when multiple records (data rows) are going to
 be extracted with this selector. Data extracted from two or more selectors with 
 multiple checked wont be merged in a single record.
 * delay - delay before selector is being used.
 * parent selectors - configure parent selectors for this selector to make the
selector tree.

**Note!** A common mistake when using multiple configuration option is to create
two selectors alongside with multiple checked and expect that the scraper will
join selector values in pairs. For example if you selected pagination links and
navigation links these links couldn't be logically joined in pairs. The correct
way is to select a wrapper element with Element selector and add data selectors
as child selectors to the element selector with multiple option not checked.

## Selecting elements

### Select tool

Web Scraper has a point and click select tool that makes selecting elements 
accessible for all users. It can be opened by clicking on `Select` in selector 
creation interface. It will highlight elements that it will select on click in 
yellow and already selected elements will be highlighted in red. Elements can 
be deselected by clicking on them again while selector tool is still active.

![Fig. 1: Point and click select tool][select-tool]

#### Hotkeys

Hotkeys can be enabled by clicking on a select tool after opening it or by 
selecting an element.

* **P**: expend the selected selector to a parent selector.
* **C**: change selected selector to a child selector. Can be used only if 
**P** key has been used prior.
* **S**: select the highlighted element. Useful for selecting elements that 
change or change something on the page when clicked on.
* Hold **Shift**: select multiple element groups.

![Fig. 2: Select elements with hotkeys][select-tool-hotkeys]

### Manual element selection

As we are always trying to improve the select tool to find the best CSS 
selector for the selected elements, there are still situations 
where it is required to manually specify a CSS selector. Some HTML and CSS 
knowledge is required to write CSS selectors. You can find more info about CSS 
selectors on [CSS selector][css-selectors] page.

## Related videos

* [How to select elements without clicking on them]
* [How to select elements that contain specific text]
* [How to select elements that have a specific element]
* [How to select elements that don’t contain specific text]
* [How to select elements that don’t have a specific element]

 [text-selector]: Selectors/Text%20selector.md
 [link-selector]: Selectors/Link%20Selector.md
 [link-popup-selector]: Selectors/Link%20Popup%20Selector.md
 [image-selector]: Selectors/Image%20selector.md
 [element-attribute-selector]: Selectors/Table%20selector.md
 [table-selector]: Selectors/Table%20selector.md
 [grouped-selector]: Selectors/Grouped%20selector.md
 [html-selector]: Selectors/HTML%20selector.md
 [element-selector]: Selectors/Element%20selector.md
 [element-click-selector]: Selectors/Element%20click%20selector.md
 [element-scroll-selector]: Selectors/Element%20scroll%20down%20selector.md
[How to select elements without clicking on them]: 
https://www.webscraper.io/how-to-video/action-keys
[How to select elements that contain specific text]: 
https://www.webscraper.io/how-to-video/jquery-contains-selector
[How to select elements that have a specific element]: 
https://www.webscraper.io/how-to-video/jquery-has-selector
[How to select elements that don’t contain specific text]: 
https://www.webscraper.io/how-to-video/jquery-not-contains-selector
[How to select elements that don’t have a specific element]: 
https://www.webscraper.io/how-to-video/jquery-not-has-selector
[select-tool]: images/selectors/select-tool.png
[select-tool-hotkeys]: images/selectors/select-tool-hotkeys.png
[css-selectors]: CSS%20selector.md
