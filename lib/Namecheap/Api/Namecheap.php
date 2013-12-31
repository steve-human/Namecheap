<?php

namespace Namecheap\Api;

/**
* Namecheap main class.
*
* @package Namecheap
* @author Steve Oliveira <steve@vougalabs.com>
*/
abstract class Namecheap
{
	protected $client;
	
	/**
	 * Sets the Namecheap client
	 * 
	 * @param Namecheap\Client $client
	 * @access public
	 */
	public function __construct(Client $client)
	{
		$this->client = $client;
	}
}