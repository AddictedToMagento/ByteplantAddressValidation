<?php

namespace AddictedToMagento\ByteplantAddressValidation;

use AddictedToMagento\AddressValidation\AddressInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;


class Address implements AddressInterface
{
    /**
     * @SerializedName("StreetAddress")
     * @Type("string")
     * @var string
     */
    protected $streetAddress;

    /**
     * @SerializedName("City")
     * @Type("string")
     * @var string
     */
    protected $city;

    /**
     * @SerializedName("PostalCode")
     * @Type("string")
     * @var string
     */
    protected $postcode;

    /**
     * @SerializedName("PostalCode")
     * @Type("string")
     * @var string
     */
    protected $countryIsoCode;

    /**
     * Retrieve street address
     *
     * @return string
     */
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    /**
     * Set street address
     *
     * @param string $streetAddress
     *
     * @return AddressInterface
     */
    public function setStreetAddress($streetAddress)
    {
        $this->streetAddress = $streetAddress;
        return $this;
    }

    /**
     * Retrieve city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return AddressInterface
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Retrieve postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     *
     * @return AddressInterface
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * Retrieve country iso code
     *
     * @return string
     */
    public function getCountryIsoCode()
    {
        return $this->countryIsoCode;
    }

    /**
     * Set country iso code
     *
     * @param string $countryIsoCode
     *
     * @return AddressInterface
     */
    public function setCountryIsoCode($countryIsoCode)
    {
        $this->countryIsoCode = $countryIsoCode;
        return $this;
    }
}