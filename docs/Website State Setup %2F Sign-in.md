# Website State Setup / Sign-in

The Website State Setup feature allows the execution of conditional action
that must be true to collect a particular set of data by combining navigation,
input, and click actions.

## Use cases

* Change location
* Change currency
* Sign-in / Login into a website

## Configurations:

* **Enable** - Enable/disable Website State Setup for sitemap.
* **Perform when not found selector** - Define an element that, if not found,
  will trigger the Website State Setup sequence. If the element is found
  within the page, the sequence will not trigger.

  ### Use Case Example:

  In the example below, the element of the navigation bar is configured to
  contain the string 'John Doe' for the sitemap. If the element is found
  and contains 'John Doe', the sequence will not trigger. If the element
  is not found, or if it is found but does not contain 'John Doe', the sequence
  will trigger to execute the Website State Setup action.

  ![Fig. 1: Website State Setup][website-state-setup]

  ### Testing:

  To test whether Website State Setup will execute on a particular page,
  use the 'Element Preview' button for ￼the Perform when not found selector.
  When previewing, if the 'Selected Element Count' is:

* **0** - the sequence **will execute** within the page.
* **1+** - the element is present and Website State Setup action **will not
execute** within the page.

    ![Fig. 2: Selected Element][selected-element]

  ### Important Note:

  The selector tool may not always include the desired text by default
  using the point-and-click interface. Therefore, adding a jQuery selector
  manually to the selected element may be necessary.

  For example, a selected element of `div.store-location` will need to be
  combined with a jQuery selector of `:contains('New York')` for an updated
  selector of `div.store-location:contains('New York')` to signal to the
  scraper the exact location that needs to be set.

  This also can be used in reverse using a jQuery `:not(:contains(''))`
  selector. For example, to execute Website State Setup when an element is
  found -  `div.nav-bar:not(:contains('Log In'))`.

* **Additional information regarding jQuery selectors can be found here:**
  * [CSS selectors]
  * [jQuery Contains Selector]

* **Actions**
  * **Open Url** -  Set a specific URL to open. This action is only required
    when a specific URL needs to be opened. If the action can be executed without
    navigating to a different URL, this action is not necessary.
  * **Click** - Execute a click action.
  * **Text Input** - Input text.
  * **Password Input** - Input password. Security notice: Passwords that are
    synced or imported into Web Scraper Cloud are encrypted. The passwords cannot
    be exported and are only decrypted when scraping a site. If a sitemap containing
    a Password Input value is exported, this value within the sitemap will be blank.

*Please note that the login feature is only allowed to be used for websites where scraping 
data behind a login does not violate the site's terms and conditions or for websites where 
you have explicit written permission to conduct data extraction behind a login.*

[website-state-setup]: images/website-state-setup/website-state-setup.png?raw=true
[selected-element]: images/website-state-setup/selected-element.png?raw=true

[CSS selectors]: https://webscraper.io/documentation/css-selector
[jQuery Contains Selector]: https://webscraper.io/tutorials/jquery-contains-selector

description: Website State Setup for Web Scraper - configure conditional actions, website sign-in, location changes, and currency settings for automated web scraping workflows
keywords: website state setup, web scraper login, sign-in automation, location change, currency change, conditional scraping, scraper authentication
