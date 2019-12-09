# Parser

Parser is a feature exclusive for [Cloud Web Scraper][cloud]. It can be used to automate data post processing that 
usually would be done by a custom user written script or manually in a spreadsheet software. 

Its modular design allows you to chain multiple parsers for each column to easily create post processing methods, 
ranging from simple to sophisticated. In case of a need to reorder the parsers, parser sequence can be changed by 
dragging and dropping parser buttons within the row.

![Fig. 1: Drag and drop to swap parsers][drag-n-drop]

If parser is set, data will always be parsed when downloaded.

 ## Getting started
 
To set up a parser for a sitemap, go to `Sitemap details` page in your [Cloud Web Scraper][cloud] account and open 
`Parser` tab. You will see a table with 2 columns - `Column name` and `Parsers`. If you have some data already scraped, 
you will have another table below with data preview that contains the first 10 scraped records. To add a parser click on 
`Add parser` dropdown for the relevant row and select a parser type you wish to set up. On how each parser type works 
and how to configure it check one of the related documentation pages listed in [Parser types](#parser-types) section. 

Virtual column can be created by clicking on `+ Add column` button at the bottom of the parser table.

It is useful to have a basic knowledge of RegEx but it is not required as only one of the parser types are solely for 
using RegEx.

As you configure your parser, data preview will be updated in real time for you to check and compare the applied 
changes. Fields with more than 1000 characters will be truncated in the data preview. 

You can set multiple parsers of the same type for one column, this is extremely helpful for using [Replace text]
[replace-parser] parser as you can achieve the same result by creating very simple replace text operations as having 
only one parser with a complicated configuration.

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
 
