<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
/**
 *  MULTI TENANCY
 */
use Hyn\Tenancy\Models\Hostname;
use Hyn\Tenancy\Models\Website;
use Hyn\Tenancy\Repositories\HostnameRepository;
use Hyn\Tenancy\Repositories\WebsiteRepository;

class createNewTenant extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tenant:createNewTenant {fqdn}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Given a domain, creates a new Tenant his own database and environment.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $fqdn = sprintf('%s.%s', $this->argument('fqdn'), env('APP_DOMAIN'));
        $website = new Website;
        $website->uuid = 'tenant_' . Str::random(6);
        app(WebsiteRepository::class)->create($website);
        $hostname = new Hostname;
        $hostname->fqdn = $fqdn;
        $hostname = app(HostnameRepository::class)->create($hostname);
        app(HostnameRepository::class)->attach($hostname, $website);
    }
}
