<?php

declare(strict_types=1);

namespace Proxykon\DadataBundle\Model\Request\Suggest;

class MetroRequest extends SuggestRequest
{
    /**
     * @var array Фильтрация
     */
    public $filters;
}
