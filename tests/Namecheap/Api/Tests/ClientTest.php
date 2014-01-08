<?php
namespace Namecheap\Api\Test;

use Namecheap\Api;
use Namecheap\Api\Response;
use Namecheap\Api\Client;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    public function testSendReturnsResponse()
    {
        $data = $this->getApiData();
        $command = 'namecheap.domains.gettldlist';
        $client = new Client($data['api_user'], $data['api_key'], $data['client_ip']);
        
        $this->assertInstanceOf('\Namecheap\Api\Response', $client->send($command));
    }
    
    public function testLastRequestReturnsRequestArray()
    {
        $data = $this->getApiData();
        $client = new Client($data['api_user'], $data['api_key'], $data['client_ip']);
        $domain = new \Namecheap\Api\Domains\Domains($client);
        $domain->getTldList();
        $request = $client->getLastRequest();
        
        $this->assertArrayHasKey('url', $request);
        $this->assertArrayHasKey('params', $request);
    }
    
    public function testLastRequestIsNull()
    {
        $data = $this->getApiData(); 
        $client = new Client($data['api_user'], $data['api_key'], $data['client_ip']);
        $this->assertNull($client->getLastRequest());
    }
    
    public function getApiData()
    {
        return array(
            'api_user' => 'user',
            'api_key' => 'key',
            'client_ip' => 'ip'
        );
    }
}