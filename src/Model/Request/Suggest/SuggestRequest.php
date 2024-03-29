<?php

declare(strict_types=1);

namespace Proxykon\DadataBundle\Model\Request\Suggest;

use Proxykon\DadataBundle\Model\Request\AbstractRequest;

abstract class SuggestRequest extends AbstractRequest
{
    /**
     * @var int Количество подсказок (результатов)
     */
    protected $count;

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
