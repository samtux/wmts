<?php

namespace Mapbender\WmtsBundle\Entity;

/**
 * RequestInformation class.
 *
 * @author Paul Schmidt
 */
class RequestInformation
{

    /**
     * ORM\Column(type="string", nullable=true)
     */
    //@TODO Doctrine bug: "protected" replaced with "public"
    public $httpGetRestful;

    /**
     * ORM\Column(type="string", nullable=true)
     */
    //@TODO Doctrine bug: "protected" replaced with "public"
    public $httpGetKvp;

    /**
     * ORM\Column(type="string", nullable=true)
     */
    //@TODO Doctrine bug: "protected" replaced with "public"
    public $httpPost;

    /**
     * ORM\Column(type="array", nullable=true)
     */
    //@TODO Doctrine bug: "protected" replaced with "public"
    public $formats = array();

    /**
     * Get httpGet
     *
     * @return string
     */
    public function getHttpGetRestful()
    {
        return $this->httpGetRestful;
    }

    /**
     * Set httpGetRestful
     * @param string $value
     */
    public function setHttpGetRestful($value)
    {
        $this->httpGetRestful = $value;
        return $this;
    }

    /**
     * Get httpGetKvp
     *
     * @return string
     */
    public function getHttpGetKvp()
    {
        return $this->httpGetKvp;
    }

    /**
     * Set httpGetKvp
     * @param string $value
     */
    public function setHttpGetKvp($value)
    {
        $this->httpGetKvpl = $value;
        return $this;
    }

    /**
     * Get httpPost
     * @return string
     */
    public function getHttpPost()
    {
        return $this->httpPost;
    }

    /**
     * Set httpPost
     * @param string $value
     */
    public function setHttpPost($value)
    {
        $this->httpPost = $value;
        return $this;
    }

    /**
     * Get formats
     * @return array
     */
    public function getFormats()
    {
        return $this->formats;
    }

    /**
     * Set formats
     * @param array $value
     */
    public function setFormats($value)
    {
        $this->formats = $value;
        return $this;
    }

    /**
     * Add format
     * @param string $value
     */
    public function addFormat($value)
    {
        $this->formats[] = $value;
        return $this;
    }
}
