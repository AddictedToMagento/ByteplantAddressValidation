<?php

namespace AddictedToMagento\ByteplantAddressValidation;

class ValidatorTest extends \PHPUnit_Framework_TestCase
{
    protected $address;
    protected $validator;

    protected function setUp()
    {
        parent::setUp();
        $this->address = new Address();

        $this->address->setStreetAddress("Ottmar-Pohl-Platz 1");
        $this->address->setPostcode("51103");
        $this->address->setCity("Köln");
        $this->address->setCountryIsoCode("DE");

        $this->validator = new Validator("#");
    }

    public function testValidate()
    {
        $result = $this->validator->validate($this->address);
        $this->assertTrue(true);
    }
}