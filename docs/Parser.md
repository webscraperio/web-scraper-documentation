# Parser

Parser is a feature which is solely exclusive for the [Cloud Web Scraper][cloud]. It is used to automatize data post processing that
usually would be done by a custom user written script or manually in a spreadsheet software. 

Its modular design allows you to create and further on configure multiple parsers for each column to easily create the most suitable post processing methods, 
ranging from very simple to more sophisticated. To edit or to delete a parser - click on the specific parser's button. 
To reorder the parsers, parser sequence can be changed by dragging and dropping parser buttons within the row.

![Fig. 1: Drag and drop to swap parsers][drag-n-drop]

If parser is set, data will always be parsed when downloaded.

## Getting started
 
To set up a parser for a sitemap, go to `Sitemap details` page in your [Cloud Web Scraper][cloud] account and open 
`Parser` tab. A table with 2 columns - `Column name` and `Parsers` will be visible. If there is some data already scraped for the selected sitemap, 
another table below with data preview containing the first 10 scraped records will show. To add a parser - click 
`Add parser` dropdown for the relevant row and then select a parser type to set up. Information of how each parser type works and how to configure each, check one of the related documentation pages listed in [Parser types](#parser-types) section. 

An additional, custom column, using and combining data from other columns, called a "Virtual column" can be created by clicking on `+ Add column` button at the bottom of the parser table.

For more complex data processing some knowledge of RegEx is useful; however, it is not obligatory as only one of the parser types are solely for 
using RegEx.

The data preview will be updated automatically everytime a parser is configured, showing a comparison of the applied changes. 
Fields with more than 1000 characters will be abbreviated in the data preview. 

It is possible to set multiple parsers of the same type for one column, this is extremely helpful for using [Replace text]
[replace-parser] parsers, because it allows to achieve the same result by creating very simple replace text operations as 
only one parser with a more complicated configuration.

### Parser types

These parsers can be used for data post processing:

 * [Regex match] [regex-parser]
 * [Replace text] [replace-parser]
 * [Remove whitespaces] [whitespace-parser]
 * [Strip HTML] [strip-html]
 * [Remove column] [remove-column]
 * [Virtual column] [virtual-column]

 
 [regex-parser]: Parsers/Regex%20parser.md
 [replace-parser]: Parsers/Replace%20parser.md
 [whitespace-parser]: Parsers/Remove%20whitespaces.md
 [strip-html]: Parsers/Strip%20HTML.md
 [remove-column]: Parsers/Remove%20column.md
 [virtual-column]: Parsers/Virtual%20column.md
 [drag-n-drop]: images/parsers/drag-n-drop.gif
 [cloud]: https://cloud.webscraper.io/
 
