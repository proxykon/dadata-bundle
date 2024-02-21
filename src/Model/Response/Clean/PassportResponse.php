<?php

declare(strict_types=1);

namespace Proxykon\DadataBundle\Model\Response\Clean;

class PassportResponse extends CleanResponse
{
    /**
     * @var string Серия
     */
    public $series;

    /**
     * @var string Номер
     */
    public $number;
}
