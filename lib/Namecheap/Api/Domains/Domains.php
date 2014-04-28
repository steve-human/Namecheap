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
     * @return \Namecheap\Api\Response
     * @see https://www.namecheap.com/support/api/methods/domains/get-list.aspx
     */
    public function getList(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Returns a list of tlds
     *
     * @return \Namecheap\Api\Response
     * @see https://www.namecheap.com/support/api/methods/domains/get-tld-list.aspx
     */
    public function getTldList()
    {
        return $this->client->send($this->namespace.__FUNCTION__);
    }

    /**
     * Registers a new domain name
     *
     * @param array $params            
     *
     * @return \Namecheap\Api\Response
     * @see https://www.namecheap.com/support/api/methods/domains/create.aspx
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
     * @return \Namecheap\Api\Response
     * @see https://www.namecheap.com/support/api/methods/domains/get-contacts.aspx
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
     * @return \Namecheap\Api\Response
     * @see https://www.namecheap.com/support/api/methods/domains/set-contacts.aspx
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
     * @return \Namecheap\Api\Response
     * @see https://www.namecheap.com/support/api/methods/domains/check.aspx
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
     * @return \Namecheap\Api\Response
     * @see https://www.namecheap.com/support/api/methods/domains/reactivate.aspx
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
     * @return \Namecheap\Api\Response
     * @see https://www.namecheap.com/support/api/methods/domains/renew.aspx
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
     * @return \Namecheap\Api\Response
     * @see https://www.namecheap.com/support/api/methods/domains/get-registrar-lock.aspx
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
     * @return \Namecheap\Api\Response
     * @see https://www.namecheap.com/support/api/methods/domains/set-registrar-lock.aspx
     */
    public function setRegistrarLock(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     *  Returns information about the requested domain. 
     *
     * @param array $params
     *
     * @return \Namecheap\Api\Response
     * @see https://www.namecheap.com/support/api/methods/domains/get-info.aspx
     */
    public function getInfo(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }
}