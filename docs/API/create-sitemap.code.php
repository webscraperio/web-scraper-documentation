$sitemapJSON = '
{
	"_id": "webscraper-io-landing",
	"startUrl": [
		"http://webscraper.io/"
	],
	"selectors": [
		{
			"parentSelectors": [
				"_root"
			],
			"type": "SelectorText",
			"multiple": false,
			"id": "title",
			"selector": "h1",
			"regex": "",
			"delay": ""
		}
	]
}
';

$sitemap = json_decode($sitemapJSON, true);
$response = $client->createSitemap($sitemap);
