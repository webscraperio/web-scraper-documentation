{
	scheduler_enabled: true,
	proxy: 0, // 0: No proxy, 1: Use proxy, 123: Custom proxy id, 'residential-*': Use residential proxy, replace * with country code, for example, 'residential-us'
	cron_minute: "*/10",
	cron_hour: "*",
	cron_day: "*",
	cron_month: "*",
	cron_weekday: "*",
	request_interval: 2000,
	page_load_delay: 2000,
	driver: "fast", // 'fast' or 'fulljs'
	cron_timezone: "Europe/Riga",
}
