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
     * Returns the CommandResponse
     *
     * @return stdClass A stdClass object representing the CommandResponses, null if invalid response
     */
    public function data() {
        if ($this->xml && $this->xml instanceof \SimpleXMLElement) {
            return $this->xmlToArray($this->xml->CommandResponse);
        }
        return null;
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
            return $this->xmlToArray($this->xml->Errors);
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
            return $this->xmlToArray($this->xml->Warnings);
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
     * @param SimpleXMLElement $data
     * @return array 
     */
    private function xmlToArray($data)
    {
        $array = (array) $data;

        //recursive Parser
        foreach ($array as $key => $item) {

            if ($item instanceof \SimpleXMLElement) {

                if (count((array) $item) > 0) {
                    $array[$key] = $this->xmlToArray($item);
                } elseif ((string) $item) {
                    $array[$key] = (string) $item;
                } else {
                    $array[$key] = null;
                }

            } elseif (is_array($item)) {

                $array[$key] = $this->xmlToArray($item);
            }
        }

        if (isset($array['@attributes'])) {

            foreach ($array['@attributes'] as $key => $value) {

                $array[$key] = $value;
            }
            unset($array['@attributes']);
        }

        return $array;
    }
}
