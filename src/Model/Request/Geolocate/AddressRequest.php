<?php

declare(strict_types=1);

namespace Proxykon\DadataBundle\Model\Request\Geolocate;

class AddressRequest extends GeolocateRequest
{
    /**
     * @var string На каком языке вернуть результат (ru / en)
     */
    protected $language;
}
