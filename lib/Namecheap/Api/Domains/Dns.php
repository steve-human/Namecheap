<?php
namespace Namecheap\Api\Domains;

use Namecheap\Api\Namecheap;

/**
 * An instance of this class represents the namecheap Domain DNS set of APIs
 *
 * @author Steve Oliveira <steve@vougalabs.com>
 */
class Dns extends Namecheap
{
    /**
     * @var string
     */
    private $namespace = 'namecheap.domains.dns.';
    
    /**
     * Sets domain to use our default DNS servers.
     *
     *
     * Required for free services like Host record management, URL forwarding, email forwarding, dynamic dns and other value added services.
     *
     * @param array $params            
     *
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:domains.dns:setdefault
     */
    public function setDefault(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Sets domain to use custom DNS servers.
     *
     *
     * NOTE: Services like URL forwarding, Email forwarding, Dynamic DNS will not work for domains using custom nameservers.
     *
     * @param array $params            
     *
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:domains.dns:setcustom
     */
    public function setCustom(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Gets a list of DNS servers associated with the requested domain
     *
     * @param array $params            
     *
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:domains.dns:getlist
     */
    public function getList(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Retrieves DNS host record settings for the requested domain
     *
     * @param array $params            
     *
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:domains.dns:gethosts
     */
    public function getHosts(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Sets DNS host records settings for the requested domain.
     *
     *
     * NOTE: The [] brackets are used to represent optional values (e.g.[1...n]).
     * Do not include the [] brackets in your API requests.
     *
     * @param array $params            
     *
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:domains.dns:sethosts
     */
    public function setHosts(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Gets email forwarding settings for the requested domain
     *
     * @param array $params            
     *
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:domains.dns:getemailforwarding
     */
    public function getEmailForwarding(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Sets email forwarding for a domain name
     *
     * NOTE: The [] brackets are used to represent optional values (e.g.[1...n]).
     * Do not include the [] brackets in your API requests.
     *
     * @param array $params            
     *
     * @access public
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:domains.dns:setemailforwarding
     */
    public function setEmailForwarding(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }
}