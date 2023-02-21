<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Utils;

class SecurityClient implements \GuzzleHttp\ClientInterface
{
    private \GuzzleHttp\ClientInterface $client;
    /** @var array<string, array<string, string>> */
    private array $clientOptions;

    /**
     * @param array<string, array<string, string>> $clientOptions
     */
    public function __construct(\GuzzleHttp\ClientInterface $client, array $clientOptions)
    {
        $this->client = $client;
        $this->clientOptions = $clientOptions;
    }

    /**
     * @param \Psr\Http\Message\RequestInterface $request
     * @param array<string, mixed> $options
     */
    public function send(\Psr\Http\Message\RequestInterface $request, array $options = []): \Psr\Http\Message\ResponseInterface
    {
        return $this->client->send($request, $this->addClientOptions($options));
    }

    /**
     * @param \Psr\Http\Message\RequestInterface $request
     * @param array<string, mixed> $options
     */
    public function sendAsync(\Psr\Http\Message\RequestInterface $request, array $options = []): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->client->sendAsync($request, $this->addClientOptions($options));
    }

    /**
     * @param string $method
     * @param string|\Psr\Http\Message\UriInterface $uri
     * @param array<string, mixed> $options
     */
    public function request(string $method, $uri, array $options = []): \Psr\Http\Message\ResponseInterface
    {
        return $this->client->request($method, $uri, $this->addClientOptions($options));
    }

    /**
     * @param string $method
     * @param string|\Psr\Http\Message\UriInterface $uri
     * @param array<string, mixed> $options
     */
    public function requestAsync(string $method, $uri, array $options = []): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->client->requestAsync($method, $uri, $this->addClientOptions($options));
    }

    public function getConfig(?string $option = null)
    {
        return $this->client->getConfig($option);
    }

    /**
     * @param array<string, mixed> $options
     * @return array<string, mixed>
     */
    private function addClientOptions(array $options): array
    {
        if (!isset($options["headers"])) {
            $options["headers"] = [];
        }

        if (!isset($options["query"])) {
            $options["query"] = [];
        }

        if (count($this->clientOptions["headers"]) > 0) {
            $options["headers"] = array_merge_recursive($options["headers"], $this->clientOptions["headers"]);
        }

        if (count($this->clientOptions["query"]) > 0) {
            $options["query"] = array_merge_recursive($options["query"], $this->clientOptions["query"]);
        }

        return $options;
    }
}