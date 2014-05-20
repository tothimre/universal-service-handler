<?php
/*
 * @author Zsolt Javorszky
 * @author Sandor Legoza
 * @copyright 2013
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace UniversalServiceHandler\Event;

use Symfony\Component\EventDispatcher\Event;

class UnprocessedRequestEvent extends Event
{
    /**
     * @var mixed
     */
    protected $unprocessedRequest;

    /**
     * @param $unprocessedRequest
     */
    public function __construct($unprocessedRequest)
    {
        $this->unprocessedRequest = $unprocessedRequest;
    }

    /**
     * @return mixed
     */
    public function getUnprocessedRequest()
    {
        return $this->unprocessedRequest;
    }
}