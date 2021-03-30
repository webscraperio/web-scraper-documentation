# Data quality control

Web Scraper has the functionality to control quality of the scraped data. Each 
sitemap has a separate data quality control configuration. Data quality can be 
determined by several criteria:

* Minimum record count
* Maximum failed page %
* Maximum empty page %
* Minimum % of fields that must be filled

![Fig. 1: Data quality control][data-quality-control-image]

### How to detect whether data quality control has failed

Data quality control fails if one of the configured criteria is not met.

**1. Data quality control tab in sitemap details page**

If last scraping job value for the specific criteria is lower than configured, 
slider indicator will be in **red**.

**2. Notifications**

Notifications about failed data quality control can be received via Cloud or 
e-mail. More information can be found in [Notifications page][notifications].

### Set data quality control with suggested values

If sitemap has at least one finished scraping job, it is possible to configure
data quality control automatically by clicking on **Fill with suggested 
values**. This will adjust data quality control settings based on the 
previous scraping job data.

### Delete related data quality notifications on save

With **Delete related data quality notifications on save** option checked, all 
previous data quality notifications for that exact sitemap will be deleted.


[notifications]: Notifications.md
[data-quality-control-image]: ../images/cloud/data-quality-control-example.png
