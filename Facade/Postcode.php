<?php
/*
* (c) Api Postcode <info@api-postcode.nl>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace ApiPostcode\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class Postcode
 */
class Postcode extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'api.postcode';
    }
}
