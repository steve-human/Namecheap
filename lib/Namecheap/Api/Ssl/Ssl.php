<?php
namespace Namecheap\Ssl;

use Namecheap\Api\Namecheap;

/**
 * An instance of this class represents the namecheap SSL set of APIs
 *
 * @author Steve Oliveira <steve@vougalabs.com>
 */
class Ssl extends Namecheap
{
    /**
     * @var string
     */
    private $namespace = 'namecheap.ssl.';
    
    /**
     * Activates a newly purchased SSL certificate
     *
     * @param array $params            
     *
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:ssl:activate
     */
    public function activate(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Retrieves information about the requested SSL certificate
     *
     * @param
     *            s array $params
     *            
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:ssl:getinfo
     */
    public function getInfo($params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Parsers the CSR
     *
     * @param array $params            
     *
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:ssl:parsecsr
     */
    public function parseCSR(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Gets approver email list for the requested domain
     *
     * @param array $params            
     *
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:ssl:getapproveremaillist
     */
    public function getApproverEmailList(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Returns a list of SSL certificates for a particular user
     *
     * @param array $params            
     *
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:ssl:getlist
     */
    public function getList(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Creates a new SSL certificate
     *
     * @param array $params            
     *
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:ssl:create
     */
    public function create(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }
}