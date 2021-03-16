# Data quality control

Web scraper has the functionality to control the quality of scraped data.
You can set control according to several criteria:

* Minimum record count
* Maximum failed page %
* Maximum empty page %
* Minimum % of fields that must be filled

![Fig. 1: Data quality control][data-quality-control-image]

### How to detect whether quality control has failed

**1. Data quality control tab in sitemap**

As you see in the image above, there are slider indicators **red/green** - that's one
of the ways of telling which data control setting is failing.

**2. Notifications**

More information here [Notifications][notifications]

### Set data quality control with suggested values

If there is at least one scraping job finished in the data quality control
tab, you will see the button **Fill with suggested values**. It will fill
data quality control settings based on previous scraping job data.

### Delete related data quality notifications on save

As you see in the image above there is a checkbox called **Delete related data
quality notifications on save**, if it's checked, we will delete all related
data quality notifications for that exact sitemap.


[notifications]: Notifications.md
[data-quality-control-image]: ../images/cloud/data-quality-control-example.png
