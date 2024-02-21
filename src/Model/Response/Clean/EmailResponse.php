<?php

declare(strict_types=1);

namespace Proxykon\DadataBundle\Model\Response\Clean;

use Proxykon\DadataBundle\Traits\Email;

class EmailResponse extends CleanResponse
{
    use Email;

    /**
     * @var string Стандартизованный email
     */
    public $email;

    /**
     * @var string Тип адреса
     */
    public $type;
}
