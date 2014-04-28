<?php

namespace Namecheap\Api;

/**
 * This class handles a namecheap API response
 *
 * @author Steve Oliveira <steve@vougalabs.com>
 */
class Response
{
    /**
     * @var string
     */
    private $raw;

    /**
     * @var \SimpleXMLElement
     */
    private $xml;

    public function __construct($response)
    {
        $this->raw = $response;
        
        try {
            $this->xml = new \SimpleXMLElement($this->raw);
        } catch (Exception $e) {
            echo $e;
        }
    }

    /**
     * Returns the response status (OK = success, ERROR = error, null = invalid responses)
     *
     * @return string NULL
     */
    public function getStatus()
    {
        if ($this->xml && $this->xml instanceof \SimpleXMLElement) {
            return (string) $this->xml->attributes()->Status;
        }
        return null;
    }

    /**
     * Returns errors contained in the response
     *
     * @return string|array
     */
    public function getErrors()
    {
        if ($this->xml && $this->xml instanceof \SimpleXMLElement) {
            return $this->toArray($this->xml->Errors);
        }
        
        return null;
    }

    /**
     * Returns warnings contained in the response
     *
     * @return array|NULL
     */
    public function getWarnings()
    {
        if ($this->xml && $this->xml instanceof \SimpleXMLElement) {
            return $this->toArray($this->xml->Warnings);
        }
        return false;
    }
    
    /**
     * Returns the XML response
     * 
     * @return string
     */
    public function getXml()
    {
        return $this->xml;
    }
    
    /**
     * Returns the raw XML response
     * 
     * @return string
     */
    public function getRaw()
    {
        return $this->raw;
    }

    /**
     * Returns an array from a SimpleXmlElement
     * 
     * @param mixed $data
     * @return array 
     */
    public function toArray($data)
    {
        return json_decode(json_encode($data), true);
    }
}