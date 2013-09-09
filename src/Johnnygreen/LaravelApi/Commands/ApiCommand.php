<?php namespace Johnnygreen\LaravelApi\Commands;

use Illuminate\Console\Command;

use Johnnygreen\LaravelApi\Api;

class ApiCommand extends Command {

	protected $name = 'api';
	protected $description = "Laravel API Package Commands";

	public function __construct()
	{
		parent::__construct();
		$this->api = new Api;
	}

	public function fire()
	{
		$this->info("Laravel API Version: {$this->api->getVersion()}");
	}
	
}