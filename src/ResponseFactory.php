<?php

declare(strict_types=1);

namespace Proxykon\DadataBundle;

use Proxykon\DadataBundle\Exception\InvalidConfigException;
use Proxykon\DadataBundle\Model\Response\AbstractResponse;

class ResponseFactory
{
    /**
     * @var Resolver
     */
    protected $resolver;

    public function __construct(Resolver $resolver)
    {
        $this->resolver = $resolver;
    }

    /**
     * @throws InvalidConfigException
     */
    public function create(string $methodName, array $data): AbstractResponse
    {
        $responseClass = $this->resolver->getMatchedResponse($methodName);

        if (null === $responseClass) {
            throw new InvalidConfigException("Для метода $methodName не указан параметр \"response\"");
        }

        return new $responseClass($data);
    }
}
