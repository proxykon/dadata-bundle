<?php

declare(strict_types=1);

namespace Proxykon\DadataBundle\Model\Request\Iplocate;

use Proxykon\DadataBundle\Model\Request\AbstractRequest;
use Proxykon\DadataBundle\Model\Request\Suggest\SuggestRequest;

class AddressRequest extends SuggestRequest
{
    /**
     * @var string IP-адрес
     */
    protected $ip;

    public function setQuery(string $ip): AbstractRequest
    {
        $this->ip = $ip;

        return $this;
    }
}
