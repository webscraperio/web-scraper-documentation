# Virtual column parser
Allows to create a new column by using data from one of the scraped columns. Virtual column can be created by clicking on 
`+ Add column` button at the bottom of the parser table.

Virtual column returns raw data from source columns. Setting parsers for virtual column won't affect data in source 
columns and vice versa. Virtual column parser can not be swapped with another parser by using drag and drop functionality.

## Configure options
 * Name - virtual column name. Must be unique.
 * Source columns - list of columns that data will be used.
 * Separator - used if multiple `Source columns` are selected. Escape sequences as `\n\r\t` can be used.
 
## Use cases
**Split fields into multiple columns**  

Sometimes data points like street address, city, ZIP code and state are contained in one HTML element and can't be 
scraped in separate fields by using [selectors][selectors]. This is where Virtual column parser and [Regex match]
[regex-parser] parser comes in handy. To split the address field, create a Virtual column for each data point you want to
extract and create a [Regex match][regex-parser] parser to extract it. See the example below. Please note that these regular 
expressions are written specifically for this address format.

Source address: 
```html
3879 Angus Road
New York, NY 10007
```

Regular expression to extract `street`: `^[^\n]+`  
Regular expression to extract `city`: `\n([^\,]+)` - return capture group `1`.  
Regular expression to extract `state`: `, ([^\s]+)` - return capture group `1`.  
Regular expression to extract `ZIP code`: `\d+$`


**Create columns with default values**  

Virtual column in combination with [Replace text][replace-parser] parser can be used to create a column with a default 
value. In order to do this:  

1. Create a Virtual column parser by clicking on "+ Add column" button at the bottom of the parser table.
2. Name your column and add any column as a source column.
3. Save your parser.
4. Create a Replace text parser and add the following configuration: 
    * Text to replace: `[\s\S]+`  
    * Text to place: `your default value`  
    * Use Regex: `checked`
5. Save your parser and download the data file with the new column.

[replace-parser]: Replace%20parser.md
[selectors]: ../Selectors.md
[regex-parser]: Regex%20parser.md
