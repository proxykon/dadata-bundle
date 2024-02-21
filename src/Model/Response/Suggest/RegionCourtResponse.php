<?php

declare(strict_types=1);

namespace Proxykon\DadataBundle\Model\Response\Suggest;

class RegionCourtResponse extends SuggestResponse
{
    /**
     * @var string Код суда
     */
    public $code;

    /**
     * @var string Полное название
     */
    public $name;

    /**
     * @var string Код региона (первые 2 цифры КЛАДР-кода)
     */
    public $regionCode;
}
