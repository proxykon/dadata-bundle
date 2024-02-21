<?php

declare(strict_types=1);

namespace Proxykon\DadataBundle\Model\Request\General;

use Proxykon\DadataBundle\Model\Request\AbstractRequest;

abstract class GeneralRequest extends AbstractRequest
{
    /**
     * {@inheritdoc}
     */
    public function getBody(): array
    {
        return array_filter(get_object_vars($this), function ($var) {
            return null !== $var;
        });
    }
}
