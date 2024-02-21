<?php

declare(strict_types=1);

namespace Proxykon\DadataBundle\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Proxykon\DadataBundle\Exception\DadataException;
use Proxykon\DadataBundle\Model\Request\AbstractRequest;
use Proxykon\DadataBundle\RequestFactory;
use Proxykon\DadataBundle\ResponseFactory;

abstract class AbstractService
{
    /**
     * @var string API-ключ
     */
    protected $token;

    /**
     * @var string Секретный ключ для стандартизации
     */
    protected $secret;

    /**
     * @var HttpClientInterface HTTP-клиент
     */
    protected $httpClient;

    /**
     * @var RequestFactory
     */
    protected $requestFactory;

    /**
     * @var ResponseFactory
     */
    protected $responseFactory;

    public function __construct(
        string $token,
        string $secret,
        HttpClientInterface $httpClient,
        RequestFactory $requestFactory,
        ResponseFactory $responseFactory
    ) {
        $this->token = $token;
        $this->secret = $secret;
        $this->httpClient = $httpClient;
        $this->requestFactory = $requestFactory;
        $this->responseFactory = $responseFactory;
    }

    /**
     * @throws DadataException
     */
    abstract protected function query(AbstractRequest $request): array;
}
