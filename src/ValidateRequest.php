<?php

namespace AddictedToMagento\ByteplantAddressValidation;

use AddictedToMagento\AddressValidation\AddressInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ValidateRequest
{
    function __construct($address, $apiKey)
    {
        $this->address = $address;
        $this->apiKey = $apiKey;
    }


    /**
     * @Type("AddictedToMagento\AddressValidation\AddressInterface")
     * @var AddressInterface
     */
    protected $address;

    /**
     * @SerializedName("APIKey")
     * @Type("string")
     * @var string;
     */
    protected $apiKey;

    /**
     * Set address
     *
     * @param AddressInterface $address
     *
     * @return ValidateRequest
     */
    public function setAddress(AddressInterface $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Retrieve address
     *
     * @return AddressInterface
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set api key
     *
     * @param string $apiKey
     *
     * @return $this
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * Retrieve api key
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }
}