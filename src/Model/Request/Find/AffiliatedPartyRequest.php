<?php

declare(strict_types=1);

namespace Proxykon\DadataBundle\Model\Request\Find;

use Proxykon\DadataBundle\Model\Request\Suggest\SuggestRequest;

class AffiliatedPartyRequest extends SuggestRequest
{
    /**
     * @var string[] Ограничение области поиска (FOUNDERS / MANAGERS)
     */
    protected $scope;
}
