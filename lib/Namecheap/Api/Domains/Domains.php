<?php
namespace Namecheap\Api\Domains;

use Namecheap\Api\Namecheap;

/**
 * An instance of this class represents the namecheap Domain set of APIs
 *
 * @author Steve Oliveira <steve@vougalabs.com>
 */
class Domains extends Namecheap
{
    /**
     * @var string
     */
    private $namespace = 'namecheap.domains.';

    /**
     * Returns a list of domains for the particular user
     *
     * @param array $params            
     *
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:domains:getlist
     */
    public function getList(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Returns a list of tlds
     *
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:domains:gettldlist
     */
    public function getTldlist()
    {
        return $this->client->send($this->namespace.__FUNCTION__);
    }

    /**
     * Registers a new domain name
     *
     * @param array $params            
     *
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:domains:create
     */
    public function create(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Gets contact information for the requested domain
     *
     * @param array $params            
     *
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:domains:getcontacts
     */
    public function getContacts(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Sets contact information for the requested domain
     *
     * @param array $params            
     *
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:domains:setcontacts
     */
    public function setContacts()
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Checks the availability of a domain name
     *
     * @param array $params            
     *
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:domains:check
     */
    public function check(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Reactivates an expired domain
     *
     * @param array $params            
     *
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:domains:reactivate
     */
    public function reactivate(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Renews an expiring domain
     *
     * @param array $params            
     *
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:domains:renew
     */
    public function renew(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Gets the RegistrarLock status for the requested domain
     *
     * @param array $params            
     *
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:domains:getregistrarlock
     */
    public function getRegistrarLock(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Sets the RegistrarLock status for a domain
     *
     * @param array $params            
     *
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:domains:setregistrarlock
     */
    public function setRegistrarLock(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }
}