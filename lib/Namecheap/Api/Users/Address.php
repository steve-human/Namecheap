<?php
namespace Namecheap\Api\Users;

use Namecheap\Api\Namecheap;

/**
 * An instance of this class represents the namecheap user address set of APIs
 *
 * @author Steve Oliveira <steve@vougalabs.com>
 */
class Address extends Namecheap
{
    private $namespace = 'namecheap.users.address.';

    /**
     * Creates a new address for the user
     *
     * @param array $params            
     *
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:users.address:create
     */
    public function create(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Updates the particular address of the user
     *
     * @param array $params            
     *
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:users.address:update
     */
    public function update(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Deletes the particular address for the user
     *
     * @param array $params            
     *
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:users.address:delete
     */
    public function delete(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Gets a list of addressIDs and addressnames associated with the user account
     *
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:users.address:getlist
     */
    public function getList()
    {
        return $this->client->send($this->namespace.__FUNCTION__);
    }

    /**
     * Gets information for the requested addressID
     *
     * @params array $params
     *
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:users.address:getinfo
     */
    public function getInfo(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }

    /**
     * Sets default address for the user
     *
     * @param array $params            
     *
     * @return \Namecheap\Api\Response
     * @see http://developer.namecheap.com/docs/doku.php?id=api-reference:users.address:setdefault
     */
    public function setDefault(array $params)
    {
        return $this->client->send($this->namespace.__FUNCTION__, $params);
    }
}