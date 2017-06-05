<?php
/*
* (c) Api Postcode <info@api-postcode.nl>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace ApiPostcode;

use Illuminate\Support\ServiceProvider as AppServiceProvider;
use ApiPostcode\Client\PostcodeClient;

/**
 * Class ApiPostcodeServiceProvider
 */
class ApiPostcodeServiceProvider extends AppServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        // Postcode Client
        $this->app->singleton('api.postcode', function () {
            return new PostcodeClient(config('api-postcode.token'));
        });
    }
    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/config/api-postcode.php' => config_path('api-postcode.php')]);
    }
}
