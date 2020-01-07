<?php

namespace Laravel6SparkPost\Providers;

use Illuminate\Mail\TransportManager;
use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;
use Laravel6SparkPost\Transport\SparkPostTransport;
use GuzzleHttp\Client as HttpClient;

class Laravel6SparkPostServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->registerSparkPostDriver();
	}
	
	private function registerSparkPostDriver()
	{
		$this->app->extend('swift.transport', function(TransportManager $manager) {
			
			$manager->extend('sparkpost', function() {
				
				$config = config('services.sparkpost', []);
				return new SparkPostTransport(
					$this->guzzle($config), $config['secret'], $config['options'] ?? []
				);
				
			});
			
			return $manager;
			
		});
	}
	
	private function guzzle($config)
	{
		return new HttpClient(Arr::add(
			$config['guzzle'] ?? [], 'connect_timeout', 60
		));
	}
}
