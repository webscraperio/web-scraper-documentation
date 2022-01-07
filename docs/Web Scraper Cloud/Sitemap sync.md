# Sitemap sync

Sitemap sync allows conveniently update sitemap versions between [Web Scraper
Cloud][cloud] and Web Scraper extension. Sitemap sync can be enabled by
connecting the Cloud account to the extension. A single Cloud account can be 
synced with multiple extensions at a time.

## Connecting Cloud to extension

Cloud account can be connected to extension by opening the extension in devtools
and clicking on `Sign in to Cloud` in the top right corner.

![Sign in to Cloud][sign-in]

This will open the Cloud's authentication page or extension authentication page 
if already authenticated. Click on `Connect cloud with extension`. After
the success message has prompted, refresh the sitemap list in the extension. If
the extension has been previously connected to Cloud but disconnected via
extension, the `Re-connect cloud with extension` button will show instead.

## Disconnecting Cloud from extension

The extension can be disconnected from Cloud by opening the extension in 
devtools and clicking on `Logout` in the top right corner.

![Logout from Cloud][logout]

After disconnecting the extension from Cloud, all Cloud sitemaps that were not
downloaded in extension will be discarded from the sitemap list.

## Synchronization states

| icon | state | description |
| ---- | ----- | ----------- |
| ![Sitemap is not synced][not-synced] | latest sitemap version can't be determined | sitemap names match between Cloud and extension<br>but latest sitemap version can't be determined by<br>looking at both sitemap editing history |
| ![Sitemap is not synced][not-synced] | latest sitemap is in Cloud | last update was made to sitemap in Cloud |
| ![Sitemap is not synced][not-synced] | latest sitemap is in extension | last update was made to sitemap in extension |
| ![Sitemap is synced][synced] | sitemaps are synchronized | Cloud and extension have the same sitemap |
| ![Sitemap is only in Cloud][sync-cloud] | sitemap is only in Cloud | sitemap is only in Cloud but can be downloaded in<br>extension for editing. Sitemap will download<br>automatically if opened
| ![Sitemap is only in extension][sync-extension] | sitemap is only in extension | sitemap is only in extension but can be uploaded to<br>Cloud

[cloud]: ../Web%20Scraper%20Cloud.md
[not-synced]: ../images/cloud/sitemap-sync/not-synced.svg
[synced]: ../images/cloud/sitemap-sync/synced.svg
[sync-cloud]: ../images/cloud/sitemap-sync/sync-cloud.svg
[sync-extension]: ../images/cloud/sitemap-sync/sync-extension.svg
[sign-in]: ../images/cloud/sitemap-sync/sign-in-to-cloud.png
[logout]: ../images/cloud/sitemap-sync/logout-from-cloud.png

## Sync limitations

User has a limit of 50 sitemap sync actions per 15 minutes.
