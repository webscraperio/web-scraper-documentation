# Replace text parser
Replace or remove a string. To remove a string, leave `Text to place` field empty.

## Configure options
 * Text to replace - text or pattern that will be searched for.
 * Text to place - text that will be placed. Escape sequences as `\n\r\t` can be used. If `Use Regex` is checked, 
 capture groups can be returned as `$x` where `x` is the capture group number.
 * Use Regex - if checked, parser will interpret `Text to replace` field as a regular expression. You can learn more 
 about regular expressions on [RegExr][regexr].

## Use cases
**Add text at the beginning of the string**  
`^` represents the beginning of the string in regular expressions so we can replace it to add a string.  

Text to replace: `^`  
Text to place: `your text`  
Use Regex: `checked`

**Add text at the end of the string**  
`$` represents the end of the string in regular expressions so we can replace it to add a string.  

Text to replace: `$`  
Text to place: `your text`  
Use Regex: `checked`

**Insert text in the middle of the string**  
By returning capture groups in `Text to place` field, you can place text within already existing string.  

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
You can add a default value by replacing all text in the field. `[\s\S]+` regular expression will match all whitespaces 
and not whitespaces thus the whole string.  

Text to replace: `[\s\S]+`  
Text to place: `your new text`  
Use Regex: `checked`

**Add domain to URL path**  
If you scrape image URLs or URLs in general and they are missing domain name, you can add domain name by replacing the 
beginning of the string and slash with domain name and slash. This way parser will add domain name only to those fields
that have a path instead of all fields even if they are empty.  

Text to replace: `^/`  
Text to place: `https://website.com/`  
Use Regex: `checked`

[regexr]: https://regexr.com/
