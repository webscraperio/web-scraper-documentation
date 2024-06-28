$response = $client->enableSitemapScheduler(123, [
	'cron_minute' => '*/10',
	'cron_hour' => '*',
	'cron_day' => '*',
	'cron_month' => '*',
	'cron_weekday' => '*',
	'request_interval' => 2000,
	'page_load_delay' => 2000,
	'cron_timezone' => 'Europe/Riga',
	'driver' => 'fast', // 'fast' or 'fulljs'
	'proxy' => 0, // 0: No proxy, 1: Use proxy, 123: Custom proxy id, 'residential-*': Use residential proxy, replace * with country code, for example, 'residential-us'
]);
