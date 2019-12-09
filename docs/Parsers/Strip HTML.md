# Strip HTML parser
Remove HTML tags and decode [HTML entities][html-entities]. By removing HTML tags, text might miss some whitespaces that
previously were displayed by HTML so make sure to replace these HTML elements with [Replace text][replace-text]
parser beforehand.

## Configure options
 * Strip HTML tags - removes all HTML tags with attributes.
 * Decode HTML entities - decode all [HTML entities][html-entities].

[html-entities]: https://www.w3schools.com/html/html_entities.asp
[replace-text]: Replace%20parser.md
