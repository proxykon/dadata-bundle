<?php

declare(strict_types=1);

namespace Proxykon\DadataBundle\Model\Request\Clean;

use Proxykon\DadataBundle\Model\Request\AbstractRequest;

abstract class CleanRequest extends AbstractRequest
{
    /**
     * {@inheritdoc}
     */
    public function getBody(): array
    {
        return [$this->query];
    }
}
