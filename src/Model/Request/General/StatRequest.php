<?php

declare(strict_types=1);

namespace Proxykon\DadataBundle\Model\Request\General;

class StatRequest extends GeneralRequest
{
    /**
     * @var string Дата, за которую возвращается статистика
     */
    public $date;
}
