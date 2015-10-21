<?php

namespace AddictedToMagento\ByteplantAddressValidation;

use AddictedToMagento\AddressValidation\AddressInterface;
use AddictedToMagento\AddressValidation\ResultInterface;
use AddictedToMagento\AddressValidation\ValidatorInterface;
use GuzzleHttp\Client;
use JMS\Serializer\SerializerBuilder;

class Validator implements ValidatorInterface
{
    protected $apiKey;

    protected $httpClient;

    protected $serializer;

    protected $defaultConfig = [
        "base_uri" => "http://api.address-validator.net/api/",
        "timeout"  => 2.0,
    ];

    function __construct($apiKey, $config = null)
    {
        $this->apiKey = $apiKey;

        if($config === null) {
            $config = $this->defaultConfig;
        }

        $this->httpClient = new Client($config);

        $this->serializer = SerializerBuilder::create()->build();
    }


    /**
     * @param AddressInterface $address
     *
     * @return ResultInterface
     */
    public function validate($address)
    {
        $validateRequest = new ValidateRequest($address, $this->apiKey);
        $validateRequest = $this->serializer->serialize($validateRequest, 'json');

        $response = $this->httpClient->request('GET', $validateRequest);
        echo $response->getBody()->getContents();

        return new Result();
    }
}