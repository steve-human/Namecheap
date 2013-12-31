<?php
namespace Namecheap\Api;

use Namecheap\Api\Response;

/**
 * Client class which sends the Namecheap API calls
 *
 * @author Steve Oliveira <steve@vougalabs.com>     
 */
class Client
{
    /**
     * @var string Namecheap API url
     */
    private $api_url;

    /**
     * @var string Namecheap API user
     */
    private $api_user;

    /**
     * @var string Namecheap API Key
     */
    private $api_key;

    /**
     * @var string Namecheap user
     */
    private $username;

    /**
     * @var string client IP address
     */
    private $client_ip;

    /**
     * @var array An array of the request last sent
     */
    private $request;

    /**
     * @var \Namecheap\Api\Response
     */
    private $response;

    /**
     * Instantiate the Namecheap client
     * 
     * @param string $api_user
     * @param string $api_key
     * @param string $client_ip
     * @param string $sandbox
     * 
     * @access public
     */
    public function __construct($api_user, $api_key, $client_ip, $sandbox = false)
    {
        $this->api_user = $api_user;
        $this->api_key = $api_key;
        $this->client_ip = $client_ip;
        $this->username = $api_user;
        
        if ($sandbox) {
            $this->api_url = 'https://api.sandbox.namecheap.com/xml.response';
        } else {
            $this->api_url = 'https://api.namecheap.com/xml.response';
        }
    }

    /**
     * Set the user who will be sending the API command
     * 
     * @param string $username
     * @access public
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Send the api command to namecheap
     * 
     * @param string $command
     * @param array $params
     * 
     * @access public
     * @return \Namecheap\Api\Response
     */
    public function send($command, $params = array())
    {
        $params['ApiUser'] = $this->api_user;
        $params['ApiKey'] = $this->api_key;
        $params['UserName'] = $this->username;
        $params['ClientIP'] = $this->client_ip;
        $params['Command'] = $command;
        
        $this->request = array(
            'url' => $this->api_url,
            'params' => $params
        );
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        $response = curl_exec($ch); 
        curl_close($ch);
        
        return new Response($response);
    }

    /**
     * Returns the last request sent
     * 
     * @access public
     * @return array 
     */
    public function getLastRequest()
    {
        return $this->request;
    }
}