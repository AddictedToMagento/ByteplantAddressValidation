<?php

namespace AddictedToMagento\ByteplantAddressValidation;

use AddictedToMagento\AddressValidation\ResultInterface;
use GuzzleHttp\Psr7\Response;

class Result implements ResultInterface
{
    /**
     * Is valid
     *
     * @return bool
     */
    public function isValid()
    {
        // TODO: Implement isValid() method.
    }

    /**
     * Retrieve street address in standardized format
     *
     * @return string
     */
    public function getStreetAddress()
    {
        // TODO: Implement getStreetAddress() method.
    }

    /**
     * Retrieve street number in standardized format
     *
     * @return string
     */
    public function getStreetNumber()
    {
        // TODO: Implement getStreetNumber() method.
    }

    /**
     * Retrieve zip/postal code in standardized format
     *
     * @return string
     */
    public function getPostcode()
    {
        // TODO: Implement getPostcode() method.
    }

    /**
     * Retrieve city in standardized format
     *
     * @return string
     */
    public function getCity()
    {
        // TODO: Implement getCity() method.
    }

    /**
     * Retrieve state in standardized format
     *
     * @return string
     */
    public function getState()
    {
        // TODO: Implement getState() method.
    }

    /**
     * Retrieve country iso code 2 (for example: DE)
     *
     * @return string
     */
    public function getCountryIsoCode()
    {
        // TODO: Implement getCountryIsoCode() method.
    }
}