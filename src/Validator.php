<?php

namespace AddictedToMagento\ByteplantAddressValidation;

use AddictedToMagento\AddressValidation\AddressInterface;
use AddictedToMagento\AddressValidation\ResultInterface;
use AddictedToMagento\AddressValidation\ValidatorInterface;
use Doctrine\Common\Annotations\AnnotationRegistry;
use GuzzleHttp\Client;
use JMS\Serializer\SerializerBuilder;

class Validator implements ValidatorInterface
{
    protected $apiKey;

    protected $httpClient;

    protected $serializer;

    protected $defaultConfig = [
        "base_uri" => "http://api.address-validator.net/"
    ];

    function __construct($apiKey, $config = null)
    {
        $this->apiKey = $apiKey;

        if($config === null) {
            $config = $this->defaultConfig;
        }

        $this->httpClient = new Client($config);

        AnnotationRegistry::registerLoader('class_exists');
        $this->serializer = SerializerBuilder::create()->build();
    }


    /**
     * @param AddressInterface $address
     *
     * @return ResultInterface
     */
    public function validate($address)
    {
        $response = $this->httpClient->request('POST', 'api/verify/', [
            'form_params' => [
                'StreetAddress' => $address->getStreetAddress(),
                'PostalCode'    => $address->getPostcode(),
                'City'          => $address->getCity(),
                'Country'       => $address->getCountryIsoCode(),
                'APIKey'        => $this->apiKey
            ]
        ]);

        echo $response->getBody()->getContents();

        return new Result();
    }
}