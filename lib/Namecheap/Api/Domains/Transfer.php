<?php
namespace Namecheap\Api\Domains;

use Namecheap\Api\Namecheap;

/**
 * An instance of this class represents the namecheap Domain transfer set of APIs
 *
 * @author Steve Oliveira <steve@vougalabs.com>
 */
class Transfer extends Namecheap
{
    /**
     * @var string
     */
    private $namespace = 'namecheap.domains.transfer.';
    
    /**
     * Creates a new nameserver
     *
     * @param array $params            
     *
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:domains.transfer:create
     */
    public function create(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Deletes a nameserver associated with the requested domain
     *
     * @param array $params            
     *
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:domains.transfer:getstatus
     */
    public function getStatus(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Creates a new nameserver
     *
     * @param array $params            
     *
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:domains.transfer:updatestatus
     */
    public function updateStatus(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }
}