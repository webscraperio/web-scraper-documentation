# Replace text parser
This parser enables to replace or remove a string. To remove a string, leave `Text to place` field empty.

## Configure options
 * Text to replace - text or pattern that will be searched for and replaced in the output.
 * Text to place - text that will be placed. Escape sequences as `\n\r\t` can be used. If `Use Regex` is checked, 
 capture groups can be returned as `$x` where `x` is the capture group number.
 * Use Regex - if checked, parser will interpret `Text to replace` field as a regular expression. To learn more 
 about regular expressions see [RegExr][regexr].

## Use cases

**Insert text in the middle of the string**  
By returning capture groups in `Text to place` field, it is possible to place a text within an existing string.  

Source text: 
```html
Color
 Green
Material
 Metal
```

Text to replace: `([^\n]+)[\s\n]+([^\n]+)`  
Text to place: `$1: $2`  
Use Regex: `checked`

Result text: 
```html
Color: Green
Material: Metal
```

**Replace all text**  
To add a default value - replace all the text in the field. `[\s\S]+` regular expression will match all whitespaces 
and not whitespaces thus the whole string.  

Text to replace: `[\s\S]+`  
Text to place: `your new text`  
Use Regex: `checked`

**Add domain to URL path**  
If scraping image URLs or URLs a domain name is missing, add a domain name by replacing the 
beginning of the string and slash with domain name and slash. This way parser will add domain name only to those fields
that have a path instead of all fields even if they are empty.  

Text to replace: `^/`  
Text to place: `https://website.com/`  
Use Regex: `checked`

[regexr]: https://regexr.com/
