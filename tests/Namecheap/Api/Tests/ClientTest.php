<?php
namespace Namecheap\Api\Test;

use Namecheap\Api;
use Namecheap\Api\Response;
use Namecheap\Api\Client;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $data = array(
            'api_user' => 'user',
            'api_key' => 'key',
            'client_ip' => 'ip'
        );
        
        $this->client = new Client($data['api_user'], $data['api_key'], $data['client_ip']);
    }
    
    public function teadDown()
    {
        unset($this->client);
    }
    
    /**
     * @test
     */
    public function testSendReturnsResponse()
    {
        $command = 'namecheap.domains.gettldlist';
        $this->assertInstanceOf('\Namecheap\Api\Response', $this->client->send($command));
    }
    
    /**
     * @test
     */
    public function testLastRequestReturnsRequestArray()
    {
        $domain = new \Namecheap\Api\Domains\Domains($this->client);
        $domain->getTldList();
        $request = $this->client->getLastRequest();
        
        $this->assertArrayHasKey('url', $request);
        $this->assertArrayHasKey('params', $request);
    }
    
    /**
     * @test
     */
    public function testLastRequestIsNull()
    {
        $this->assertNull($this->client->getLastRequest());
    }
}