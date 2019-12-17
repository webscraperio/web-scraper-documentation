# Regex match parser
Regular Expression is used to extract a substring from a string. To learn more about regular expressions see
[RegExr][regexr].

## Configuration options
 * Regex - regular expression. Global flag is set as default and can't be changed. Slashes don't have to be escaped and 
 expression must not be enclosed in slashes.
 * Groups - select a capture group that needs to be returned. If a group is selected and doesn't exist anymore, it will 
 change to default `Match 0`.
 * Multiple - if checked, returns more than one match.
 * Separator - separates matches. Active only if `Multiple` is checked. Escape sequences as `\n\r\t` can be used.

## Use cases
**Extract text that is before or after specific keywords.**

By using capture groups, it is easier to extract a specific string from text without writing complicated regular 
expressions.

| text                    	| regex                 | capture group     | result     	|
|--------------------------	|---------------------- |------------------ |-------------- |
| price: $14.99 inc.VAT    	| `price:\s+([^\s]+)`   | 1           	    | $14.99      	|
| 4.2 out of 5 stars    	| `([^\s]+) out of`     | 1                 | 4.2          	|
| date: 2014-08-20          | `\d+-\d+-\d+`         | 0                 | 2014-08-20    |

[regexr]: https://regexr.com/
