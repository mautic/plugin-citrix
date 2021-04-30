<?php

namespace MauticPlugin\MauticCitrixBundle\Api;

use Mautic\PluginBundle\Exception\ApiErrorException;

class GotomeetingApi extends CitrixApi
{
    /**
     * @param string $operation
     * @param string $method
     *
     * @return mixed|string
     *
     * @throws ApiErrorException
     */
    public function request($operation, array $parameters = [], $method = 'GET')
    {
        $settings = [
            'module'     => 'G2M',
            'method'     => $method,
            'parameters' => $parameters,
        ];

        return parent::_request($operation, $settings);
    }
}
